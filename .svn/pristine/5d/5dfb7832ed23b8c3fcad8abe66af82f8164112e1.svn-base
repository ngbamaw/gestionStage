<?php

namespace Tests\AppBundle;

use AppBundle\DAO\DAOProfesseur;
use AppBundle\Model\Professor;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class LoggedOffSuccessfulTest extends WebTestCase
{

    /**
     * @var Client $client
     *
     */
    protected $client = null;

    public function setUp()
    {
        $this->client = static::createClient();
    }

    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful($url)
    {
        $crawler = $this->client->request('GET', $url);
        $message = "";
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
            ['/inscription'],
            ['/inscription/professeur'],
            ['/connexion'],
        ];
    }

}
