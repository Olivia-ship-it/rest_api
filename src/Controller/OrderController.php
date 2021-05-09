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
class OrderController extends AbstractController
{

    function getUserFromToken($token): ?object {
        if(!$token || $token == ""){
            return null;
        }
        return $this->getDoctrine()->getRepository(User::class)->findOneBy(['token' => $token]);
    }


    /**
     * @Route("/orders", name="listOrders", methods={"GET"})
     */
    public function displayAllOrders(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $token = $request->headers->get('authorization');

        if(!$token){
            return $this->json(['error' => 'You need to login to see your oders!', 
        ], 401);
        }

        $user = $this->getUserFromToken($token);
        if(!$user){
            return $this->json(['error' => 'Could not find a user with such token!', 
        ], 401);
        }

        if(!$user->getOrders()){
            return $this->json(['error' => 'You have no orders to be displayed!']);
        }

        $orders = $user->getOrders();
        $output = array();
        
        foreach($orders as $order)
        {
            $products = array();
            $products = $order->getProducts();
            $productsOutput = array();

            foreach($products as $product) {
                $productsOutput[] = array(
                    'name' => $product->getName(),
                    'description' => $product->getDescription(),
                    'photo' => $product->getPhoto(),
                    'price' => $product->getPrice(),
            );
            }
            $output[] = array(
                    'totalPrice' => $order->getTotalPrice(),
                    'creationDate' => $order->getCreationDate(),
                    'products' => $productsOutput,
            );


        }
        return $this->json($output, 200);
    }

    /**
     * @Route("/order/{orderId}", name="getOrder", methods={"GET"})
     */
    public function displayOrder(Request $request, int $orderId): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $token = $request->headers->get('authorization');

        if(!$token){
            return $this->json(['error' => 'You need to login to see this order!', 
        ], 401);
        }

        $user = $this->getUserFromToken($token);
        if(!$user){
            return $this->json(['error' => 'Could not find a user with such token!', 
        ], 401);
        }

        $order = $this->getDoctrine()->getRepository(Order::class)->findOneBy(['id' => $orderId]);

        if(!$order){
            return $this->json(['error' => 'Could not find such an order!', 
        ], 401);
        }

        if($order->getUser() != $user){
            return $this->json(['error' => 'You cannot see information about an order which is not yours!', 
        ], 401);
        }

        $products = $order->getProducts();

        foreach($products as $product) {
            $productsOutput[] = array(
                'name' => $product->getName(),
                'description' => $product->getDescription(),
                'photo' => $product->getPhoto(),
                'price' => $product->getPrice(),
        );
        }

        return $this->json([
            'totalPrice' => $order->getTotalPrice(),
            'creationDate' => $order->getCreationDate(),
            'products' => $productsOutput,
        ], 201);  

    }
}
