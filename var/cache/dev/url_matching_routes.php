<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backend/replies' => [[['_route' => 'app_backend_replies_index', '_controller' => 'App\\Controller\\BackendRepliesController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/backend/(?'
                    .'|replies/([^/]++)(?'
                        .'|(*:38)'
                        .'|/edit(*:50)'
                        .'|(*:57)'
                    .')'
                    .'|t(?'
                        .'|hreads/(?'
                            .'|([^/]++)(?'
                                .'|(*:90)'
                                .'|/edit(*:102)'
                                .'|(*:110)'
                            .')'
                            .'|delete/([^/]++)(*:134)'
                        .')'
                        .'|opics/(?'
                            .'|([^/]++)(?'
                                .'|(*:163)'
                                .'|/edit(*:176)'
                                .'|(*:184)'
                            .')'
                            .'|backend/topics/delete/([^/]++)(*:223)'
                        .')'
                    .')'
                .')'
                .'|/replies/([^/]++)(?'
                    .'|(*:254)'
                    .'|/edit(*:267)'
                    .'|(*:275)'
                .')'
                .'|/threads/(?'
                    .'|([^/]++)(?'
                        .'|(*:307)'
                        .'|/(?'
                            .'|edit(*:323)'
                            .'|([^/]++)(*:339)'
                        .')'
                        .'|(*:348)'
                    .')'
                    .'|generate\\-title\\-ajax(*:378)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:418)'
                    .'|wdt/([^/]++)(*:438)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:484)'
                            .'|router(*:498)'
                            .'|exception(?'
                                .'|(*:518)'
                                .'|\\.css(*:531)'
                            .')'
                        .')'
                        .'|(*:541)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_backend_replies_show', '_controller' => 'App\\Controller\\BackendRepliesController::show'], ['replyId'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'app_backend_replies_edit', '_controller' => 'App\\Controller\\BackendRepliesController::edit'], ['replyId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'app_backend_replies_delete', '_controller' => 'App\\Controller\\BackendRepliesController::delete'], ['replyId'], ['POST' => 0], null, false, true, null]],
        90 => [[['_route' => 'app_backend_threads_show', '_controller' => 'App\\Controller\\BackendThreadsController::show'], ['threadId'], ['GET' => 0], null, false, true, null]],
        102 => [[['_route' => 'app_backend_threads_edit', '_controller' => 'App\\Controller\\BackendThreadsController::edit'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        110 => [[['_route' => 'app_backend_threads_delete', '_controller' => 'App\\Controller\\BackendThreadsController::delete'], ['threadId'], ['POST' => 0], null, false, true, null]],
        134 => [[['_route' => 'thread_delete', '_controller' => 'App\\Controller\\BackendThreadsController::deleteAuthor'], ['id'], null, null, false, true, null]],
        163 => [[['_route' => 'app_backend_topics_show', '_controller' => 'App\\Controller\\BackendTopicsController::show'], ['categoryId'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'app_backend_topics_edit', '_controller' => 'App\\Controller\\BackendTopicsController::edit'], ['categoryId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        184 => [[['_route' => 'app_backend_topics_delete', '_controller' => 'App\\Controller\\BackendTopicsController::delete'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        223 => [[['_route' => 'topic_delete', '_controller' => 'App\\Controller\\BackendTopicsController::deleteTopic'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'app_replies_show', '_controller' => 'App\\Controller\\RepliesController::show'], ['replyId'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_replies_edit', '_controller' => 'App\\Controller\\RepliesController::edit'], ['replyId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [[['_route' => 'app_replies_delete', '_controller' => 'App\\Controller\\RepliesController::delete'], ['replyId'], ['POST' => 0], null, false, true, null]],
        307 => [[['_route' => 'threads_show', '_controller' => 'App\\Controller\\ThreadsController::showThreads'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        323 => [[['_route' => 'app_threads_edit', '_controller' => 'App\\Controller\\ThreadsController::edit'], ['threadId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'front_reply_delete', '_controller' => 'App\\Controller\\ThreadsController::deleteR'], ['threadId', 'replyId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        348 => [[['_route' => 'app_threads_delete', '_controller' => 'App\\Controller\\ThreadsController::delete'], ['threadId'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'generate_title_ajax', '_controller' => 'App\\Controller\\ThreadsController::generateTitleAjax'], [], ['POST' => 0], null, false, false, null]],
        418 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        438 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        484 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        498 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        518 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        531 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        541 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
