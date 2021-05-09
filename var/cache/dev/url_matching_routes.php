<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/orders' => [[['_route' => 'api_endpointlistOrders', '_controller' => 'App\\Controller\\OrderController::displayAllOrders'], null, ['GET' => 0], null, false, false, null]],
        '/api/product' => [[['_route' => 'api_endpointaddProduct', '_controller' => 'App\\Controller\\ProductController::addProduct'], null, ['POST' => 0], null, false, false, null]],
        '/api/products' => [[['_route' => 'api_endpointproductsList', '_controller' => 'App\\Controller\\ProductController::showProducts'], null, ['GET' => 0], null, false, false, null]],
        '/api/cart' => [[['_route' => 'api_endpointlistProductsFromShoppingCart', '_controller' => 'App\\Controller\\ProductController::displayShoppingCart'], null, ['GET' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'api_endpointcreateUser', '_controller' => 'App\\Controller\\UserController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_endpointloginUser', '_controller' => 'App\\Controller\\UserController::login'], null, ['GET' => 0], null, false, false, null]],
        '/api/user' => [
            [['_route' => 'api_endpointshowUser', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_endpointupdateUser', '_controller' => 'App\\Controller\\UserController::update'], null, ['PUT' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|order/([^/]++)(*:64)'
                    .'|product/([^/]++)(?'
                        .'|(*:90)'
                    .')'
                    .'|cart/(?'
                        .'|([^/]++)(?'
                            .'|(*:117)'
                        .')'
                        .'|validate(*:134)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'api_endpointgetOrder', '_controller' => 'App\\Controller\\OrderController::displayOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        90 => [
            [['_route' => 'api_endpointshowProduct', '_controller' => 'App\\Controller\\ProductController::showProduct'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_endpointeditProduct', '_controller' => 'App\\Controller\\ProductController::editProduct'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_endpointdeleteProduct', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        117 => [
            [['_route' => 'api_endpointaddProductToShoppingCart', '_controller' => 'App\\Controller\\ProductController::addProductToCart'], ['productId'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_endpointremoveProductFromShoppingCart', '_controller' => 'App\\Controller\\ProductController::removeProductFromCart'], ['productId'], ['DELETE' => 0], null, false, true, null],
        ],
        134 => [
            [['_route' => 'api_endpointconvertCartToOrder', '_controller' => 'App\\Controller\\ProductController::validateShoppingCart'], [], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
