<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.RUUfoyn' shared service.

return $this->privates['.service_locator.RUUfoyn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'adRepo' => array('privates', 'App\\Repository\\AdRepository', 'getAdRepositoryService.php', true),
    'userRepo' => array('privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true),
));
