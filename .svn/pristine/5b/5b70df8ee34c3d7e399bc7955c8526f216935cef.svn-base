<?php


namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Request;

class CaptchaHandler
{
    private $_secret;

    public function __construct($secret)
    {
        $this->_secret = $secret;
    }

    public function check(Request $request){
        // Paramètre renvoyé par le recaptcha
        $response = $request->request->get('g-recaptcha-response');

        // On récupère l'IP de l'utilisateur
        $remoteip = $request->server->get('REMOTE_ADDR');

        $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
            . $this->_secret
            . "&response=" . $response
            . "&remoteip=" . $remoteip;

        $decode = json_decode(file_get_contents($api_url), true);

        return $decode['success'] ? true : false;
    }
}
