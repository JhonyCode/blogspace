<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/categoria' => [[['_route' => 'app_admin_categoria_index', '_controller' => 'App\\Controller\\Admin\\CategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categoria/new' => [[['_route' => 'app_admin_categoria_new', '_controller' => 'App\\Controller\\Admin\\CategoriaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comentario' => [[['_route' => 'app_admin_comentario_index', '_controller' => 'App\\Controller\\Admin\\ComentarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comentario/new' => [[['_route' => 'app_admin_comentario_new', '_controller' => 'App\\Controller\\Admin\\ComentarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/entrada' => [[['_route' => 'app_admin_entrada_index', '_controller' => 'App\\Controller\\Admin\\EntradaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/entrada/new' => [[['_route' => 'app_admin_entrada_new', '_controller' => 'App\\Controller\\Admin\\EntradaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/espacio' => [[['_route' => 'app_admin_espacio_index', '_controller' => 'App\\Controller\\Admin\\EspacioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/espacio/new' => [[['_route' => 'app_admin_espacio_new', '_controller' => 'App\\Controller\\Admin\\EspacioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/etiqueta' => [[['_route' => 'app_admin_etiqueta_index', '_controller' => 'App\\Controller\\Admin\\EtiquetaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/etiqueta/new' => [[['_route' => 'app_admin_etiqueta_new', '_controller' => 'App\\Controller\\Admin\\EtiquetaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Admin\\LoginController::index'], null, null, null, false, false, null]],
        '/admin/usuario' => [[['_route' => 'app_admin_usuario_index', '_controller' => 'App\\Controller\\Admin\\UsuarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/usuario/new' => [[['_route' => 'app_admin_usuario_new', '_controller' => 'App\\Controller\\Admin\\UsuarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/entrada' => [[['_route' => 'app_api_entrada_index', '_controller' => 'App\\Controller\\Api\\EntradaController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/espacio' => [
            [['_route' => 'app_api_espacio_index', '_controller' => 'App\\Controller\\Api\\EspacioController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_espacio_new', '_controller' => 'App\\Controller\\Api\\EspacioController::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/token/refresh' => [[['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|c(?'
                            .'|ategoria/([^/]++)(?'
                                .'|(*:44)'
                                .'|/edit(*:56)'
                                .'|(*:63)'
                            .')'
                            .'|omentario/([^/]++)(?'
                                .'|(*:92)'
                                .'|/edit(*:104)'
                                .'|(*:112)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|ntrada/([^/]++)(?'
                                .'|(*:144)'
                                .'|/edit(*:157)'
                                .'|(*:165)'
                            .')'
                            .'|spacio/([^/]++)(?'
                                .'|(*:192)'
                                .'|/edit(*:205)'
                                .'|(*:213)'
                            .')'
                            .'|tiqueta/([^/]++)(?'
                                .'|(*:241)'
                                .'|/edit(*:254)'
                                .'|(*:262)'
                            .')'
                        .')'
                        .'|usuario/([^/]++)(?'
                            .'|(*:291)'
                            .'|/edit(*:304)'
                            .'|(*:312)'
                        .')'
                    .')'
                    .'|pi/espacio/([^/]++)(?'
                        .'|(*:344)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:385)'
                    .'|wdt/([^/]++)(*:405)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:451)'
                            .'|router(*:465)'
                            .'|exception(?'
                                .'|(*:485)'
                                .'|\\.css(*:498)'
                            .')'
                        .')'
                        .'|(*:508)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'app_admin_categoria_show', '_controller' => 'App\\Controller\\Admin\\CategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        56 => [[['_route' => 'app_admin_categoria_edit', '_controller' => 'App\\Controller\\Admin\\CategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        63 => [[['_route' => 'app_admin_categoria_delete', '_controller' => 'App\\Controller\\Admin\\CategoriaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_admin_comentario_show', '_controller' => 'App\\Controller\\Admin\\ComentarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        104 => [[['_route' => 'app_admin_comentario_edit', '_controller' => 'App\\Controller\\Admin\\ComentarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        112 => [[['_route' => 'app_admin_comentario_delete', '_controller' => 'App\\Controller\\Admin\\ComentarioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        144 => [[['_route' => 'app_admin_entrada_show', '_controller' => 'App\\Controller\\Admin\\EntradaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        157 => [[['_route' => 'app_admin_entrada_edit', '_controller' => 'App\\Controller\\Admin\\EntradaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        165 => [[['_route' => 'app_admin_entrada_delete', '_controller' => 'App\\Controller\\Admin\\EntradaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        192 => [[['_route' => 'app_admin_espacio_show', '_controller' => 'App\\Controller\\Admin\\EspacioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_admin_espacio_edit', '_controller' => 'App\\Controller\\Admin\\EspacioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'app_admin_espacio_delete', '_controller' => 'App\\Controller\\Admin\\EspacioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_admin_etiqueta_show', '_controller' => 'App\\Controller\\Admin\\EtiquetaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_admin_etiqueta_edit', '_controller' => 'App\\Controller\\Admin\\EtiquetaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'app_admin_etiqueta_delete', '_controller' => 'App\\Controller\\Admin\\EtiquetaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_admin_usuario_show', '_controller' => 'App\\Controller\\Admin\\UsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_admin_usuario_edit', '_controller' => 'App\\Controller\\Admin\\UsuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'app_admin_usuario_delete', '_controller' => 'App\\Controller\\Admin\\UsuarioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        344 => [
            [['_route' => 'app_api_espacio_show', '_controller' => 'App\\Controller\\Api\\EspacioController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_espacio_edit', '_controller' => 'App\\Controller\\Api\\EspacioController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_espacio_delete', '_controller' => 'App\\Controller\\Api\\EspacioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        385 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        405 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        451 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        465 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        485 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        498 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        508 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
