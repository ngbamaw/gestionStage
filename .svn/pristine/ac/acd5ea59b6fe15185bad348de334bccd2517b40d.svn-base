<?php

namespace Tests\AppBundle;

use AppBundle\DAO\DAOEtudiant;
use AppBundle\DAO\DAOProfesseur;
use AppBundle\Model\Professor;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class LoggedOnStudiantSuccessfulTest extends WebTestCase
{
    /**
     * @var Client $client
     *
     */
    private $client = null;
    private $user = null;

    public function setUp()
    {
        $this->client = static::createClient();
    }

    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful($url)
    {
        $this->logIn();
        $crawler = $this->client->request('GET', $url);
        $message = '';
        if ($this->client->getResponse()->getStatusCode() >= 400) {
            $message = "url: " . $url;
            $message .= "\ncode: " . $this->client->getResponse()->getStatusCode();
            $message .= "\nmessage:" . $crawler->filter("title")->text();
        }
        $this->assertTrue($this->client->getResponse()->isSuccessful(), $message);
    }

    public function urlProvider()
    {
        return [
            ['/modification/etudiant/38'],
            ['/liste-entreprise'],
            //['/eleve/contact/test/1'],
            ['/eleve/creer_tuteur'],
            ['/eleve/creer_entreprise'],
            ['/eleve/creer_stage'],
            ['/eleve/info_stage'],
            ['/eleve/info_entreprise?id=15']
        ];
    }

    protected function logIn()
    {
        $dao = new DAOEtudiant();
        $session = $this->client->getContainer()->get('session');
        $firewallName = 'main';
        // if you don't define multiple connected firewalls, the context defaults to the firewall name
        // See https://symfony.com/doc/current/reference/configuration/security.html#firewall-context
        $firewallContext = 'main';

        // you may need to use a different token class depending on your application.
        // for example, when using Guard authentication you must instantiate PostAuthenticationGuardToken
        $user = $dao->readByMail('testEleve@test.com');
        $token = new UsernamePasswordToken($user, null, $firewallName, $user->getRoles());
        $session->set('_security_'.$firewallContext, serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(), $session->getId());
        $this->client->getCookieJar()->set($cookie);
    }

}
