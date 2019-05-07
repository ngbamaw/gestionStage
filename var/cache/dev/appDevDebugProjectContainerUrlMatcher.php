<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/inscription')) {
            // register
            if ('/inscription' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountController::registerAction',  '_route' => 'register',);
            }

            // registerProfessor
            if ('/inscription/professeur' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountController::inscriptionProfesseurAction',  '_route' => 'registerProfessor',);
            }

        }

        // connexion
        if ('/connexion' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\AccountController::connecAction',  '_route' => 'connexion',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // app_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\AccountController::logout',  '_route' => 'app_logout',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_app_logout;
                }

                return $ret;
            }
            not_app_logout:

            // liste_entreprise_page
            if ('/liste-entreprise' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::liste_entreprise',  '_route' => 'liste_entreprise_page',);
            }

            // liste-utilisateur
            if ('/liste-utilisateur' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::liste_utilisateur',  '_route' => 'liste-utilisateur',);
            }

        }

        // modification-professeur
        if (0 === strpos($pathinfo, '/modification/professeur') && preg_match('#^/modification/professeur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'modification-professeur']), array (  '_controller' => 'AppBundle\\Controller\\AccountController::modifProfAction',));
        }

        // modification-etudiant
        if (0 === strpos($pathinfo, '/modification/etudiant') && preg_match('#^/modification/etudiant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'modification-etudiant']), array (  '_controller' => 'AppBundle\\Controller\\AccountController::modifEtudiantAction',));
        }

        // validation-etudiant
        if (0 === strpos($pathinfo, '/validation/etudiant') && preg_match('#^/validation/etudiant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'validation-etudiant']), array (  '_controller' => 'AppBundle\\Controller\\AccountController::validEtudiantAction',));
        }

        if (0 === strpos($pathinfo, '/eleve')) {
            if (0 === strpos($pathinfo, '/eleve/contact')) {
                // contact_eleve
                if ('/eleve/contact' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EleveController::acces_contact',  '_route' => 'contact_eleve',);
                }

                // fiche_contact_eleve
                if (preg_match('#^/eleve/contact/(?P<type>[^/]++)/(?P<id_contact>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'fiche_contact_eleve']), array (  '_controller' => 'AppBundle\\Controller\\EleveController::ActionContact',));
                }

            }

            elseif (0 === strpos($pathinfo, '/eleve/creer_')) {
                if (0 === strpos($pathinfo, '/eleve/creer_tuteur')) {
                    // creation_tuteur_traitement
                    if ('/eleve/creer_tuteur/traitement' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EleveController::creer_tuteur_traitement',  '_route' => 'creation_tuteur_traitement',);
                    }

                    // creation_tuteur
                    if ('/eleve/creer_tuteur' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EleveController::creer_tuteur',  '_route' => 'creation_tuteur',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/eleve/creer_entreprise')) {
                    // creation_entreprise
                    if ('/eleve/creer_entreprise' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EleveController::creer_entreprise',  '_route' => 'creation_entreprise',);
                    }

                    // creation_entreprise_traitement
                    if ('/eleve/creer_entreprise/traitement' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EleveController::creer_entreprise_traitement',  '_route' => 'creation_entreprise_traitement',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/eleve/creer_stage')) {
                    // creation_stage
                    if ('/eleve/creer_stage' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EleveController::creer_stage',  '_route' => 'creation_stage',);
                    }

                    // creation_stage_traitement
                    if ('/eleve/creer_stage/traitement' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EleveController::creer_stage_traitement',  '_route' => 'creation_stage_traitement',);
                    }

                }

            }

            // information_stage
            if ('/eleve/info_stage' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::info_stage',  '_route' => 'information_stage',);
            }

            // information_etp_eleve
            if ('/eleve/info_entreprise' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::info_entreprise',  '_route' => 'information_etp_eleve',);
            }

            // homepage_eleve
            if ('/eleve' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::indexEleve',  '_route' => 'homepage_eleve',);
            }

            // getTuteurs
            if (0 === strpos($pathinfo, '/eleve/getTuteurs') && preg_match('#^/eleve/getTuteurs/(?P<company>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'getTuteurs']), array (  '_controller' => 'AppBundle\\Controller\\IndexController::getTuteurs',));
            }

        }

        // homepage_prof
        if ('/professeur' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::indexProf',  '_route' => 'homepage_prof',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\IndexController::homeAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // 404
        if (preg_match('#^/(?P<err>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => '404']), array (  '_controller' => 'AppBundle\\Controller\\IndexController::error404_general',));
        }

        if (0 === strpos($pathinfo, '/professeur')) {
            if (0 === strpos($pathinfo, '/professeur/contact')) {
                // contact_prof
                if ('/professeur/contact' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProfController::contact_prof',  '_route' => 'contact_prof',);
                }

                // fiche_contact_profs
                if (preg_match('#^/professeur/contact/(?P<type>[^/]++)/(?P<id_contact>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'fiche_contact_profs']), array (  '_controller' => 'AppBundle\\Controller\\ProfController::ActionContact',));
                }

            }

            // convention
            if ('/professeur/convention' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::convention',  '_route' => 'convention',);
            }

            // validation_eleves
            if ('/professeur/validation' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::valid_inscr',  '_route' => 'validation_eleves',);
            }

            // information_stage_convention
            if ('/professeur/info_stage_conv' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::info_stage_conv',  '_route' => 'information_stage_convention',);
            }

            // information_etp
            if ('/professeur/info_entreprise' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::info_entreprise',  '_route' => 'information_etp',);
            }

            // professeur_liste_entreprises
            if ('/professeur/liste_entreprises' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::ListeEntreprises',  '_route' => 'professeur_liste_entreprises',);
            }

            // traite_convention
            if ('/professeur/traite_convention' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::traiteconvention',  '_route' => 'traite_convention',);
            }

            // supr_etp
            if ('/professeur/supprim_entreprise' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::supprim_entreprise',  '_route' => 'supr_etp',);
            }

        }

        // remove_trailing_slash
        if (preg_match('#^/(?P<url>.*\\/)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'remove_trailing_slash']), array (  '_controller' => 'AppBundle\\Controller\\RedirectingController::removeTrailingSlashAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
