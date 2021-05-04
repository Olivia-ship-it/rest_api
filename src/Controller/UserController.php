<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\AuthController;

/**
 * @Route("/api", name="api_endpoint")
 */

class UserController extends AbstractController
{

    /**
     * @Route("/register", name="createUser", methods={"POST"})
     */
    public function create(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setLogin($request->get("login"));
        $user->setPassword($request->get("password"));
        $user->setEmail($request->get("email"));
        $user->setFirstname($request->get("firstname"));
        $user->setLastname($request->get("lastname"));

        if($this->getDoctrine()->getRepository(User::class)->findOneBy(['login' => $request->get('login')])){
            return $this->json(['error' => 'This login is already in use: '.$request->get('login')], 401);
        }
        
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json([
            'success' => 'Saved new user with id '.$user->getId(),
        ], 201);

    }

    function generateRandomString($length = 255):string {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function getUserFromToken($token): ?object {
        if(!$token || $token == ""){
            return null;
        }
        return $this->getDoctrine()->getRepository(User::class)->findOneBy(['token' => $token]);
    }
    
    /**
     * @Route("/login", name="loginUser", methods={"GET"})
     */
    public function login(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        try {
            $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['login' => $request->get('login')]);
        } catch (Exception $e){
            return $this->json(['error' => 'Wrong login or password'], 401);
        }

        if(!$request->get('login')){
            return $this->json(['error' => 'You need to provide a login.'], 400);
        }

        if(!$request->get('password')){
            return $this->json(['error' => 'You need to provide a password.'], 400);
        }

        if($user->getPassword() != $request->get('password')){
            return $this->json(['error' => 'Wrong login or password'], 401);
        }


        $token = $this->generateRandomString();
        $user->setToken($token);
        $entityManager->flush();

        return $this->json([
            'token' => $token,
        ], 200);

    }

    /**
     * @Route("/user", name="showUser", methods={"GET"})
     */
    public function show(Request $request): Response
    {
        $token = $request->headers->get('authorization');

        $user = $this->getUserFromToken($token);

        if(!$user){
            return $this->json(['error' => 'You need to login, in order to acess this page!'], 401);
        }

        $displayUserWoPasswd = new \stdClass();
        $displayUserWoPasswd->login = $user->getLogin();
        $displayUserWoPasswd->email = $user->getEmail();
        $displayUserWoPasswd->firstname = $user->getFirstname();
        $displayUserWoPasswd->lastname = $user->getLastname();

        return $this->json($displayUserWoPasswd);
    }

    /**
     * @Route("/user", name="updateUser", methods={"PUT"})
     */
    public function update(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $token = $request->headers->get('authorization');
        $user = $this->getUserFromToken($token);

        if(!$user){
            return $this->json(['error' => 'You are not authorized to change this account information!'], 401);
        }
        
        if ($request->get("login")) {
            $user->setLogin($request->get("login"));
        }

        if ($request->get("password" )) {
            $user->setPassword($request->get("password"));
        }

        if ($request->get("email")) {
            $user->setEmail($request->get("email"));
        }

        if ($request->get("firstname")) {
            $user->setFirstname($request->get("firstname"));
        }

        if ($request->get("lastname")) {
            $user->setLastname($request->get("lastname"));
        }

        if (!$request->get("lastname") && !$request->get("firstname") && !$request->get("password") && !$request->get("login") && !$request->get("email") ) {
            return $this->json([
                'error' => 'You did not provide any information to update for user with login: '.$user->getLogin(),
            ]);
        }

        $entityManager->flush();


        return $this->json([
            'success' => 'Updated provided information to user with login '.$user->getLogin(),
        ], 200);
    }


}
