<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/product/Productlist' => [[['_route' => 'Product_show_admin', '_controller' => 'App\\Controller\\AdminController::show'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/Panier/show' => [[['_route' => 'Panier_show', '_controller' => 'App\\Controller\\PanierController::show'], null, null, null, false, false, null]],
        '/paniers' => [[['_route' => 'paniers', '_controller' => 'App\\Controller\\PanierController::paniers'], null, null, null, false, false, null]],
        '/panier/pdf' => [[['_route' => 'panier_pdf', '_controller' => 'App\\Controller\\PanierController::generatePanierPdf'], null, null, null, true, false, null]],
        '/payement' => [[['_route' => 'app_payement', '_controller' => 'App\\Controller\\PayementController::index'], null, null, null, false, false, null]],
        '/pay' => [[['_route' => 'app_pay', '_controller' => 'App\\Controller\\PayementController::pay'], null, null, null, false, false, null]],
        '/paymentConfirmation' => [[['_route' => 'app_paymentConfirmation', '_controller' => 'App\\Controller\\PayementController::paymentConfirmation'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/Product/form' => [[['_route' => 'Product_add', '_controller' => 'App\\Controller\\ProductController::AddProduct'], null, null, null, false, false, null]],
        '/Product/show' => [[['_route' => 'Product_show', '_controller' => 'App\\Controller\\ProductController::show'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/sendSms' => [[['_route' => 'send_sms', '_controller' => 'App\\Controller\\PanierController::sendSms'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/add_to_cart/([^/]++)(*:28)'
                .'|/P(?'
                    .'|anier/delete/([^/]++)(*:61)'
                    .'|roduct/(?'
                        .'|delete/([^/]++)(*:93)'
                        .'|update/([^/]++)(*:115)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:153)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:192)'
                    .'|wdt/([^/]++)(*:212)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:258)'
                            .'|router(*:272)'
                            .'|exception(?'
                                .'|(*:292)'
                                .'|\\.css(*:305)'
                            .')'
                        .')'
                        .'|(*:315)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\PanierController::addToCart'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'Panier_delete', '_controller' => 'App\\Controller\\PanierController::deletePanier'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'Product_delete', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], null, null, false, true, null]],
        115 => [[['_route' => 'Product_update', '_controller' => 'App\\Controller\\ProductController::UpdateProduct'], ['id'], null, null, false, true, null]],
        153 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        192 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        212 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        258 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        272 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        292 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        305 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        315 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
