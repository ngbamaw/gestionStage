<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.xbpz3gw' shared service.

return $this->services['service_locator.xbpz3gw'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['captchaHandler' => function () {
    return ${($_ = isset($this->services['app.captcha_handler']) ? $this->services['app.captcha_handler'] : ($this->services['app.captcha_handler'] = new \AppBundle\Service\CaptchaHandler('6LeL0poUAAAAAH7IYXJM-tTicTsmyIlAsHX6rWJe'))) && false ?: '_'};
}, 'checker' => function () {
    return ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'};
}, 'professorHandler' => function () {
    $f = function (\AppBundle\Service\ProfessorHandler $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\\Service\\ProfessorHandler']) ? $this->services['AppBundle\\Service\\ProfessorHandler'] : $this->load('getProfessorHandlerService.php')) && false ?: '_'});
}]);