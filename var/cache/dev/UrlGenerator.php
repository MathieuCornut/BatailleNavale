<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin']], [], []],
    'admin_users' => [[], ['_controller' => 'App\\Controller\\AdminController::admin_users'], [], [['text', '/admin/users']], [], []],
    'edit_role' => [['id'], ['_controller' => 'App\\Controller\\AdminController::admin_editRole'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\GameController::index'], [], [['text', '/game']], [], []],
    'start' => [[], ['_controller' => 'App\\Controller\\GameController::start'], [], [['text', '/game/start']], [], []],
    'fight' => [['id'], ['_controller' => 'App\\Controller\\GameController::fight'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/game']], [], []],
    'attack' => [['id', 'target'], ['_controller' => 'App\\Controller\\GameController::attaque'], [], [['variable', '/', '[^/]++', 'target', true], ['text', '/attaque'], ['variable', '/', '[^/]++', 'id', true], ['text', '/game']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'rules' => [[], ['_controller' => 'App\\Controller\\HomeController::rules'], [], [['text', '/rules']], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\ProfilController::users'], [], [['text', '/users']], [], []],
    'self_profile' => [[], ['_controller' => 'App\\Controller\\ProfilController::self_profile'], [], [['text', '/profile']], [], []],
    'profile' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::profile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile']], [], []],
    'ranking' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\RankingController::pagi'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/ranking']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
