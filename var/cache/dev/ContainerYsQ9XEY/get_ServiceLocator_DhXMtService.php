<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.dh_xMt_' shared service.

return $this->privates['.service_locator.dh_xMt_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.mkz8yKg', 'get_ServiceLocator_Mkz8yKgService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.mkz8yKg', 'get_ServiceLocator_Mkz8yKgService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
], [
    'App\\Controller\\RegistrationController::register' => '?',
    'App\\Controller\\SecurityController::login' => '?',
    'App\\Controller\\RegistrationController:register' => '?',
    'App\\Controller\\SecurityController:login' => '?',
]);
