<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


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


        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('saved new user with id '.$user->getId(), 201);
    }

    /**
     * @Route("/login", name="loginUser", methods={"GET"})
     */
    public function login(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();




        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('saved new user with id '.$user->getId(), 201);
    }

    /**
     * @Route("/user/{id}", name="showUser", methods={"GET"})
     */
    public function show(int $id): Response
    {
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        if (!$user) {
            return $this->json([
                'error' => 'Could not find user with id: '.$id,
            ]);
        }

        return $this->json([
            'login' => $user->getLogin(),
            'password' => $user->getPassword(),
            'email' => $user->getEmail(),
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname(),
        ]);
    }

    /**
     * @Route("/user/{id}", name="updateUser", methods={"PUT"})
     */
    public function update(int $id, Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        if (!$user) {
            return $this->json([
                'error' => 'Could not find user with id: '.$id,
            ]);
        }
        
        if ($request->get("login")) {
            $user->setLogin($request->get("login"));
        }

        if ($request->get("password" )) {
            $user->setLogin($request->get("password"));
        }

        if ($request->get("email")) {
            $user->setLogin($request->get("email"));
        }

        if ($request->get("firstname")) {
            $user->setLogin($request->get("firstname"));
        }

        if ($request->get("lastname")) {
            $user->setLogin($request->get("lastname"));
        }

        if (!$request) {
            return $this->json([
                'error' => 'You did not provide any information to update for user with id: '.$id,
            ]);
        }

        $entityManager->flush();

        return new Response('updated user with id '.$user->getId(), 201);
    }


}
