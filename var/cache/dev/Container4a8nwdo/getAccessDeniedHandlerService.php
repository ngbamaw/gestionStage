<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'AppBundle\Security\AccessDeniedHandler' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authorization/AccessDeniedHandlerInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Security/AccessDeniedHandler.php';

return $this->services['AppBundle\\Security\\AccessDeniedHandler'] = new \AppBundle\Security\AccessDeniedHandler();