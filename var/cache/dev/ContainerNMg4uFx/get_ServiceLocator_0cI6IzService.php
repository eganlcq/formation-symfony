<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.0c_I6Iz' shared service.

return $this->privates['.service_locator.0c_I6Iz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'ad' => array('privates', '.errored..service_locator.0c_I6Iz.App\\Entity\\Ad', NULL, 'Cannot autowire service ".service_locator.0c_I6Iz": it references class "App\\Entity\\Ad" but no such service exists.'),
    'manager' => array('services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true),
));
