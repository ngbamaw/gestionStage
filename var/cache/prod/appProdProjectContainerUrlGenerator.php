<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AccountController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registerProfessor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AccountController::inscriptionProfesseurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/professeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AccountController::connecAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AccountController::logout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-professeur' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AccountController::modifProfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modification/professeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-etudiant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AccountController::modifEtudiantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modification/etudiant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validation-etudiant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AccountController::validEtudiantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/validation/etudiant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_eleve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::acces_contact',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_contact_eleve' => array (  0 =>   array (    0 => 'type',    1 => 'id_contact',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::ActionContact',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_contact',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    2 =>     array (      0 => 'text',      1 => '/eleve/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_tuteur_traitement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::creer_tuteur_traitement',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/creer_tuteur/traitement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_tuteur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::creer_tuteur',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/creer_tuteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_entreprise' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::creer_entreprise',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/creer_entreprise',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_entreprise_traitement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::creer_entreprise_traitement',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/creer_entreprise/traitement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_stage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::creer_stage',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/creer_stage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_stage_traitement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::creer_stage_traitement',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/creer_stage/traitement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_stage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::info_stage',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/info_stage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_etp_eleve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::info_entreprise',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve/info_entreprise',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage_eleve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EleveController::indexEleve',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getTuteurs' => array (  0 =>   array (    0 => 'company',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::getTuteurs',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'company',    ),    1 =>     array (      0 => 'text',      1 => '/eleve/getTuteurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_entreprise_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::liste_entreprise',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste-entreprise',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste-utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::liste_utilisateur',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liste-utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage_prof' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::indexProf',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '404' => array (  0 =>   array (    0 => 'err',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\IndexController::error404_general',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'err',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_prof' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::contact_prof',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_contact_profs' => array (  0 =>   array (    0 => 'type',    1 => 'id_contact',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::ActionContact',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_contact',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    2 =>     array (      0 => 'text',      1 => '/professeur/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convention' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::convention',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/convention',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validation_eleves' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::valid_inscr',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_stage_convention' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::info_stage_conv',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/info_stage_conv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'information_etp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::info_entreprise',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/info_entreprise',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'professeur_liste_entreprises' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::ListeEntreprises',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/liste_entreprises',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'traite_convention' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::traiteconvention',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/traite_convention',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supr_etp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProfController::supprim_entreprise',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professeur/supprim_entreprise',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_trailing_slash' => array (  0 =>   array (    0 => 'url',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RedirectingController::removeTrailingSlashAction',  ),  2 =>   array (    'url' => '.*\\/',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*\\/',      3 => 'url',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
