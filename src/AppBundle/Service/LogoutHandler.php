<?php


namespace AppBundle\Service;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

class LogoutHandler extends Controller implements LogoutSuccessHandlerInterface
{

    /**
     * Creates a Response object to send upon a successful logout.
     *
     * @return Response never null
     */
    public function onLogoutSuccess(Request $request)
    {
        return $this->redirect('/');
    }
}
