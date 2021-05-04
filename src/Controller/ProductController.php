<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\User;
use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/api", name="api_endpoint")
 */

class ProductController extends AbstractController
{

    /**
     * @Route("/product", name="addProduct", methods={"POST"})
     */
    public function addProduct(Request $request): Response
    {

        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName($request->get("name"));
        $product->setDescription($request->get("description"));
        $product->setPhoto($request->get("photo"));
        $product->setPrice($request->get("price"));

        if($this->getDoctrine()->getRepository(Product::class)->findOneBy(['name' => $request->get('name')])){
            return $this->json(['error' => 'There is already a product with such a name: '.$request->get('name')], 401);
        }
        
        $entityManager->persist($product);
        $entityManager->flush();

        return $this->json([
            'success' => 'Saved new product with id '.$product->getId(),
        ], 201);
        
    }


    /**
     * @Route("/product/{id}", name="showProduct", methods={"GET"})
     */
    public function showProduct(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['id' => $id]);


        if(!$product){
            return $this->json(['error' => 'Could not find any product with such id: '.$id, 
        ], 401);
        }

        return $this->json([
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'photo' => $product->getPhoto(),
            'price' => $product->getPrice(),
        ], 201);  
    }

    /**
     * @Route("/product/{id}", name="editProduct", methods={"PUT"})
     */
    public function editProduct(int $id, Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['id' => $id]);

        if(!$product){
            return $this->json(['error' => 'Could not find any product with such id: '.$id, 
        ], 401);
        }
        
        if ($request->get("name")) {
            $product->setName($request->get("name"));
        }

        if ($request->get("description" )) {
            $product->setDescription($request->get("description"));
        }

        if ($request->get("photo")) {
            $product->setPhoto($request->get("photo"));
        }

        if ($request->get("price")) {
            $product->setPrice($request->get("price"));
        }

        if (!$request->get("name") && !$request->get("description") && !$request->get("photo") && !$request->get("price")) {
            return $this->json([
                'error' => 'You did not provide any information to update for product named: '.$product->getName(),
            ]);
        }

        $entityManager->flush();

        return $this->json([
            'success' => 'Updated provided information to product named '.$product->getName(),
        ], 200); 
    }

    /**
     * @Route("/product/{id}", name="deleteProduct", methods={"DELETE"})
     */
    public function deleteProduct(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['id' => $id]);

        if(!$product){
            return $this->json(['error' => 'Could not find any product with such id: '.$id, 
        ], 401);
        }

        $entityManager->remove($product);
        $entityManager->flush();

        return $this->json([
            'success' => 'Deleted product named '.$product->getName(),
        ], 201);  
    }


    /**
     * @Route("/products", name="productsList", methods={"GET"})
     */
    public function showProducts(): Response
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        $output = array();

        foreach($products as $product)
        {
            $output[] = array(
                    'id' => $product->getId(),
                    'name' => $product->getName(),
                    'description' => $product->getDescription(),
                    'photo' => $product->getPhoto(),
                    'price' => $product->getPrice(),
            );
        }

        return $this->json($output, 200);
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
     * @Route("/cart/{productId}", name="addProductToShoppingCart", methods={"PUT"})
     */
    public function addProductToCart(Request $request, int $productId): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $token = $request->headers->get('authorization');

        if(!$token){
            return $this->json(['error' => 'You need to login to add a product to your shopping cart!', 
        ], 401);
        }

        $user = $this->getUserFromToken($token);
        if(!$user){
            return $this->json(['error' => 'Could not find a user with such token!', 
        ], 401);
        }

        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['id' => $productId]);
        if(!$product){
            return $this->json(['error' => 'Could not find such a product to add to your shopping cart!', 
        ], 401);
        }

        $user->addToShoppingCart($product);
        $entityManager->flush();

        return $this->json([
            'success' => 'Added to shopping cart product with following id: '.$product->getId(),
        ], 201);
        
    }

    /**
     * @Route("/cart/{productId}", name="removeProductFromShoppingCart", methods={"DELETE"})
     */
    public function removeProductFromCart(Request $request, int $productId): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $token = $request->headers->get('authorization');

        if(!$token){
            return $this->json(['error' => 'You need to login to add a product to your shopping cart!', 
        ], 401);
        }

        $user = $this->getUserFromToken($token);
        if(!$user){
            return $this->json(['error' => 'Could not find a user with such token!', 
        ], 401);
        }

        $product = $this->getDoctrine()->getRepository(Product::class)->findOneBy(['id' => $productId]);
        if(!$product){
            return $this->json(['error' => 'Could not find such a product to remove to your shopping cart!', 
        ], 401);
        }

        $user->removeFromShoppingCart($product);
        $entityManager->flush();

        return $this->json([
            'success' => 'Remove from shopping cart product with following id: '.$product->getId(),
        ], 201);
    }

    /**
     * @Route("/cart", name="listProductsFromShoppingCart", methods={"GET"})
     */
    public function displayShoppingCart(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $token = $request->headers->get('authorization');

        if(!$token){
            return $this->json(['error' => 'You need to login to add a product to your shopping cart!', 
        ], 401);
        }

        $user = $this->getUserFromToken($token);
        if(!$user){
            return $this->json(['error' => 'Could not find a user with such token!', 
        ], 401);
        }

        if(!$user->getShoppingCart()){
            return $this->json(['error' => 'There are no items in your shopping cart!']);
        }

        $products = $user->getShoppingCart();
        foreach($products as $product)
        {
            $output[] = array(
                    'id' => $product->getId(),
                    'name' => $product->getName(),
                    'description' => $product->getDescription(),
                    'photo' => $product->getPhoto(),
                    'price' => $product->getPrice(),
            );
        }

        return $this->json($output, 200);

    }

        /**
     * @Route("/cart/validate", name="convertCartToOrder", methods={"POST"})
     */
    public function validateShoppingCart(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $token = $request->headers->get('authorization');

        if(!$token){
            return $this->json(['error' => 'You need to login to add a product to your shopping cart!', 
        ], 401);
        }

        $user = $this->getUserFromToken($token);
        if(!$user){
            return $this->json(['error' => 'Could not find a user with such token!', 
        ], 401);
        }

        if(!$user->getShoppingCart()){
            return $this->json(['error' => 'There are no items in your shopping cart!']);
        }

        $order = new Order();
        $totalPrice = 0.0;
        $products = $user->getShoppingCart();

        foreach($products as $product)
        {
            $totalPrice = $product->getPrice() + $totalPrice;
        }

        $order->setTotalPrice($totalPrice);
        $date = new \DateTime();
        $order->setCreationDate($date->format('Y-m-d H:i:s'));
        $order->setUser($user);
        $order->setProducts($products);

        $user->setShoppingCart(null)
             ->addOrder($order);

        $entityManager->persist($order);
        $entityManager->flush();

        return $this->json([
            'success' => 'Saved new order with id '.$order->getId(),
        ], 201);
    }


}
