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
        '/backend/topics' => [[['_route' => 'app_backend_topics_index', '_controller' => 'App\\Controller\\BackendTopicsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/topics/new' => [[['_route' => 'app_backend_topics_new', '_controller' => 'App\\Controller\\BackendTopicsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/backend/t(?'
                    .'|hreads/(?'
                        .'|([^/]++)(?'
                            .'|(*:41)'
                            .'|/edit(*:53)'
                            .'|(*:60)'
                        .')'
                        .'|delete/([^/]++)(*:83)'
                    .')'
                    .'|opics/(?'
                        .'|([^/]++)(?'
                            .'|(*:111)'
                            .'|/edit(*:124)'
                            .'|(*:132)'
                        .')'
                        .'|backend/topics/delete/([^/]++)(*:171)'
                    .')'
                .')'
                .'|/replies/([^/]++)(?'
                    .'|(*:201)'
                    .'|/edit(*:214)'
                    .'|(*:222)'
                .')'
                .'|/threads/([^/]++)(?'
                    .'|(*:251)'
                    .'|/(?'
                        .'|edit(*:267)'
                        .'|([^/]++)(*:283)'
                    .')'
                    .'|(*:292)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:332)'
                    .'|wdt/([^/]++)(*:352)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:398)'
                            .'|router(*:412)'
                            .'|exception(?'
                                .'|(*:432)'
                                .'|\\.css(*:445)'
                            .')'
                        .')'
                        .'|(*:455)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_backend_threads_show', '_controller' => 'App\\Controller\\BackendThreadsController::show'], ['threadId'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'app_backend_threads_edit', '_controller' => 'App\\Controller\\BackendThreadsController::edit'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        60 => [[['_route' => 'app_backend_threads_delete', '_controller' => 'App\\Controller\\BackendThreadsController::delete'], ['threadId'], ['POST' => 0], null, false, true, null]],
        83 => [[['_route' => 'thread_delete', '_controller' => 'App\\Controller\\BackendThreadsController::deleteAuthor'], ['id'], null, null, false, true, null]],
        111 => [[['_route' => 'app_backend_topics_show', '_controller' => 'App\\Controller\\BackendTopicsController::show'], ['categoryId'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => 'app_backend_topics_edit', '_controller' => 'App\\Controller\\BackendTopicsController::edit'], ['categoryId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [[['_route' => 'app_backend_topics_delete', '_controller' => 'App\\Controller\\BackendTopicsController::delete'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        171 => [[['_route' => 'topic_delete', '_controller' => 'App\\Controller\\BackendTopicsController::deleteTopic'], ['id'], null, null, false, true, null]],
        201 => [[['_route' => 'app_replies_show', '_controller' => 'App\\Controller\\RepliesController::show'], ['replyId'], ['GET' => 0], null, false, true, null]],
        214 => [[['_route' => 'app_replies_edit', '_controller' => 'App\\Controller\\RepliesController::edit'], ['replyId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        222 => [[['_route' => 'app_replies_delete', '_controller' => 'App\\Controller\\RepliesController::delete'], ['replyId'], ['POST' => 0], null, false, true, null]],
        251 => [[['_route' => 'threads_show', '_controller' => 'App\\Controller\\ThreadsController::showThreads'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        267 => [[['_route' => 'app_threads_edit', '_controller' => 'App\\Controller\\ThreadsController::edit'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        283 => [[['_route' => 'front_reply_delete', '_controller' => 'App\\Controller\\ThreadsController::deleteR'], ['threadId', 'replyId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        292 => [[['_route' => 'app_threads_delete', '_controller' => 'App\\Controller\\ThreadsController::delete'], ['threadId'], ['POST' => 0], null, false, true, null]],
        332 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        352 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        398 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        412 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        432 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        445 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        455 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
