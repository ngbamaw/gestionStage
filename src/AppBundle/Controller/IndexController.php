<?php

namespace AppBundle\Controller;

use AppBundle\DAO\DAOCompany;
use AppBundle\DAO\DAOEtudiant;
use AppBundle\DAO\DAOProfesseur;
use AppBundle\DAO\DAOStage;
use AppBundle\DAO\DAOTuteur;
use AppBundle\DAO\DaoPromotion;
use AppBundle\DAO\DatabaseConnectionSingleton;
use AppBundle\Form\ModifyProfessorType;
use AppBundle\Form\SignupProfessorType;
use AppBundle\Model\Etudiant;
use AppBundle\Model\Professor;
use AppBundle\Service\CaptchaHandler;
use AppBundle\Service\PasswordEncoder;
use http\Env\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\DAO\DAOOption;
use Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class IndexController extends Controller
{

    /**
     *
     * @Route("/eleve/getTuteurs/{company}", name="getTuteurs")
     * @Security("has_role('ROLE_USER')")
     */
    public function getTuteurs($company)
    {
        $daoTuteurs = new DAOTuteur();
        $daoCompany = new DAOCompany();

        $company = $daoCompany->readByName($company);
        $tuteurs = $daoTuteurs->readbyCompany($company->getId());

        return new JsonResponse($tuteurs);
    }

    /**
     * @Route("/liste-entreprise", name="liste_entreprise_page")
     * @Security("has_role('ROLE_USER')")
     */
    public function liste_entreprise(){
        $dao_opt = new DAOOption();
        $daoc = new DAOCompany();
        $rows_companies = $daoc->readAll();
        $rows_companies_all = $daoc->readAll();


        if (!empty($_GET['search'])) {

            $search = $_GET['search'];

            $test_companies = array($daoc->readByName($search));

            if ($test_companies === NULL) {
                $rows_companies = null;

            } else {
                $rows_companies = $test_companies;
            }
        } elseif (!empty($_GET['ville']) && !empty($_GET['option'])) {

            $ville = $_GET['ville'];
            $option = $_GET['option'];

            $rows_companies = $daoc->readByOptionAndTown($option, $ville);
        }

        $villes = array();
        foreach ($rows_companies_all as $company) {
            $villes[] = $company->getTown();
        }

        $rows_options = $dao_opt->readAll();

        return $this->render('content/index_eleve.html.twig', [
            'companies' => $rows_companies,
            'options' => $rows_options,
            'villes' => $villes,
            'page' => 'liste_entreprise_page'
        ]);
    }

    /**
     *
     * @Route("/liste-utilisateur", name="liste-utilisateur")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function liste_utilisateur()
    {
        $dao_prof = new DAOProfesseur();
        $dao_eleve = new DAOEtudiant();

        $liste_id_profs = $dao_prof->readAll();

        $liste_profs = array();

        foreach ($liste_id_profs as $id_prof) {
            $liste_profs[] = $dao_prof->read($id_prof->id);
        }

        $liste_eleve = $dao_eleve->readAllByInscriptionValide();
        $liste_eleve_a_valider = $dao_eleve->readAllByInscriptionEnCours();

        return $this->render('content/liste_utilisateur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'profs' => $liste_profs,
            'eleves' => $liste_eleve,
            'eleves_a_valider'=> $liste_eleve_a_valider,
        ]);
    }

    /**
     *
     * @Route("/professeur", name="homepage_prof")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexProf(Request $request)
    {
        //initialisation
        $rows_students = array();
        $rows_prom = array();
        $rows_internships = array();
        $daoEtu = new DaoEtudiant();
        $daoProm = new DaoPromotion();
        $daoStage = new DAOStage();
        $date = date('Y-m-d');
        //récupération des promotions
        $rows_prom = $daoProm->readAll();

        //Si aucune recherche est faite -> récupère les listes
        if (empty($_GET['promo'])) {

            $rows_students = $daoEtu->readAll();
            $rows_internships = $daoStage->readAll();

        } elseif (!empty($_GET['promo'])) {
            $promo = substr($_GET['promo'], 0, 4);//garde la première année de la promo (2016 par exemple)
            $promo = $daoProm->readByYear($promo);//réalise une requete qui va chercher l'id de la promotion
            // echo $promo;
            // echo $id_promo[0];

            $rows_internships = $daoStage->readAll();
            $rows_students = $daoEtu->readAllByPromotion($promo->getId());
        }


        return $this->render('content/index_prof.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'students' => $rows_students,
            'promotions' => $rows_prom,
            'internships' => $rows_internships,
            'date' => $date
        ]);
    }

    /**
     * @Route("/", name="homepage")
     * @param AuthorizationCheckerInterface $checker
     * @return RedirectResponse
     */
    public function homeAction(AuthorizationCheckerInterface $checker){
        if ($checker->isGranted(['ROLE_ADMIN'])) {
            return $this->redirectToRoute('homepage_prof');
        }else if($checker->isGranted(['ROLE_USER'])) {
            return $this->redirectToRoute('homepage_eleve');
        }else{
            return $this->redirectToRoute('connexion');
        }
    }



    /**
     * Matches /eleve/*
     *
     * @Route("/eleve/{err}", name="404")
     */
    public function error404_eleve(Request $request, $err)
    {
        // replace this example code with whatever you need
        return $this->render('404.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR
        ]);
    }

    /**
     * Matches /professeur/*
     *
     * @Route("/professeur/{err}", name="404")
     */
    public function error404_professeur(Request $request, $err)
    {
        // replace this example code with whatever you need
        return $this->render('404.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR
        ]);
    }


    /**
     * Matches /*
     *
     * @Route("{err}", name="404")
     */
    public function error404_general(Request $request, $err)
    {
        // replace this example code with whatever you need
        return $this->render('404.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR
        ]);
    }
}
