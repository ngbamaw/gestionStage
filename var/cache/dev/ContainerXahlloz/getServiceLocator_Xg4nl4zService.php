<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.xg4nl4z' shared service.

return $this->services['service_locator.xg4nl4z'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['security' => function () {
    return ${($_ = isset($this->services['security.helper']) ? $this->services['security.helper'] : $this->load('getSecurity_HelperService.php')) && false ?: '_'};
}]);
