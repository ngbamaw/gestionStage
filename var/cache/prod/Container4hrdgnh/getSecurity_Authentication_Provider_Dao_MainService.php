<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/UserAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/DaoAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserChecker.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Security/User/UserProvider.php';

return $this->services['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['AppBundle\\Security\\User\\UserProvider']) ? $this->services['AppBundle\\Security\\User\\UserProvider'] : ($this->services['AppBundle\\Security\\User\\UserProvider'] = new \AppBundle\Security\User\UserProvider())) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load('getSecurity_EncoderFactoryService.php')) && false ?: '_'}, true);
