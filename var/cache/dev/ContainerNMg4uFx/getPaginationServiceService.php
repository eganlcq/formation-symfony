<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\PaginationService' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Service\\PaginationService.php';

return $this->privates['App\Service\PaginationService'] = new \App\Service\PaginationService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'admin/common/pagination.html.twig');
