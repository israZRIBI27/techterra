<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backend/threads' => [[['_route' => 'app_backend_threads_index', '_controller' => 'App\\Controller\\BackendThreadsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/threads/new' => [[['_route' => 'app_backend_threads_new', '_controller' => 'App\\Controller\\BackendThreadsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/replies' => [[['_route' => 'app_replies_index', '_controller' => 'App\\Controller\\RepliesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/replies/new' => [[['_route' => 'app_replies_new', '_controller' => 'App\\Controller\\RepliesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/threads' => [[['_route' => 'app_threads_index', '_controller' => 'App\\Controller\\ThreadsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/threads/new' => [[['_route' => 'app_threads_new', '_controller' => 'App\\Controller\\ThreadsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/backend/threads/([^/]++)(?'
                    .'|(*:35)'
                    .'|/edit(*:47)'
                    .'|(*:54)'
                .')'
                .'|/replies/([^/]++)(?'
                    .'|(*:82)'
                    .'|/edit(*:94)'
                    .'|(*:101)'
                .')'
                .'|/threads/([^/]++)(?'
                    .'|(*:130)'
                    .'|/(?'
                        .'|edit(*:146)'
                        .'|([^/]++)(*:162)'
                    .')'
                    .'|(*:171)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:211)'
                    .'|wdt/([^/]++)(*:231)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:277)'
                            .'|router(*:291)'
                            .'|exception(?'
                                .'|(*:311)'
                                .'|\\.css(*:324)'
                            .')'
                        .')'
                        .'|(*:334)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_backend_threads_show', '_controller' => 'App\\Controller\\BackendThreadsController::show'], ['threadId'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_backend_threads_edit', '_controller' => 'App\\Controller\\BackendThreadsController::edit'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_backend_threads_delete', '_controller' => 'App\\Controller\\BackendThreadsController::delete'], ['threadId'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_replies_show', '_controller' => 'App\\Controller\\RepliesController::show'], ['replyId'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'app_replies_edit', '_controller' => 'App\\Controller\\RepliesController::edit'], ['replyId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        101 => [[['_route' => 'app_replies_delete', '_controller' => 'App\\Controller\\RepliesController::delete'], ['replyId'], ['POST' => 0], null, false, true, null]],
        130 => [[['_route' => 'threads_show', '_controller' => 'App\\Controller\\ThreadsController::showThreads'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        146 => [[['_route' => 'app_threads_edit', '_controller' => 'App\\Controller\\ThreadsController::edit'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        162 => [[['_route' => 'front_reply_delete', '_controller' => 'App\\Controller\\ThreadsController::deleteR'], ['threadId', 'replyId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        171 => [[['_route' => 'app_threads_delete', '_controller' => 'App\\Controller\\ThreadsController::delete'], ['threadId'], ['POST' => 0], null, false, true, null]],
        211 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        231 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        277 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        291 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        311 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        324 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        334 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
