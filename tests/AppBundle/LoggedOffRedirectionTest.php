<?php

namespace Tests\AppBundle;

use AppBundle\DAO\DAOProfesseur;
use AppBundle\Model\Professor;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class LoggedOffRedirectionTest extends WebTestCase
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
    public function testPageIsRediction($url)
    {
        $crawler = $this->client->request('GET', $url);
        $message = '';
        if ($this->client->getResponse()->getStatusCode() >= 400) {
            $message = "url: " . $url;
            $message .= "\ncode: " . $this->client->getResponse()->getStatusCode();
            $message .= "\nmessage:" . $crawler->filter("title")->text();
        }
        $this->assertTrue($this->client->getResponse()->isRedirection(), $message);
    }

    public function urlProvider()
    {
        return [
            ['/modification/professeur/10'],
            ['/modification/etudiant/37'],
            ['/liste-entreprise'],
            ['/liste-utilisateur'],
            ['/'],
            ['/professeur/contact'],
            ['/professeur/contact/test/2'],
            ['/professeur/validation'],
            ['/professeur/info_stage_conv'],
            ['/professeur/liste_entreprises'],
            ['/professeur/contact'],
            ['/eleve/contact/test/1'],
            ['/eleve/creer_tuteur'],
            ['/eleve/creer_entreprise'],
            ['/eleve/creer_stage'],
            ['/eleve/info_stage'],
            ['/eleve/info_entreprise']
        ];
    }


}
