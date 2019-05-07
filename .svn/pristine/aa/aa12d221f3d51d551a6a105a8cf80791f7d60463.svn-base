<?php

namespace AppBundle\Controller;

use AppBundle\DAO\DatabaseConnectionSingleton;
use AppBundle\DAO\DAOCompany;
use AppBundle\DAO\DAOEtudiant;
use AppBundle\DAO\DAOProfesseur;
use AppBundle\DAO\DAOOption;
use AppBundle\DAO\DAOStage;
use AppBundle\DAO\DAOTuteur;
use AppBundle\Model\Company;
use AppBundle\Model\Stage;
use AppBundle\Model\Tuteur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Security as SecuritySymfony;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EleveController extends Controller
{
   
    
    /**
     * @Route("/eleve/contact", name="contact_eleve")
     * @Security("has_role('ROLE_USER')")
     */
    public function acces_contact(Request $request)
    {
        $co = DatabaseConnectionSingleton::getInstance();
        
        $daoProf = new DAOProfesseur();
        $daoEtu = new DAOEtudiant();
        $daoTut = new DAOTuteur();
        
        $contacts = $daoProf->readAllDetailed();
        $contacts_el = $daoEtu->readAll();
        $contacts_tut = $daoTut->readAll();
        
        // replace this example code with whatever you need
        return $this->render('contact_eleve.html.twig',[
            'profs' => $contacts,
            'eleves' => $contacts_el,
            'tuteurs' => $contacts_tut,
            'page' => 'contact'
        ]);
     
    }
    
    /**
     * Matches /eleve/contact/*
     *
     * @Route("/eleve/contact/{type}/{id_contact}", name="fiche_contact_eleve")
     * @Security("has_role('ROLE_USER')")
     */
    
    public function ActionContact(Request $request, $type, $id_contact)
    {
        $contacts = array();
        switch ($type){
            case "Internship_Tutor":
                $daoTut = new DAOTuteur();
                $contacts = $daoTut->read($id_contact);
                break;
                
            case "Professor":
                $daoProf = new DAOProfesseur();
                $contacts = $daoProf->read($id_contact);
                break;
                
            default:
                break;
        }
        // replace this example code with whatever you need
        return $this->render('fiche_contact.html.twig', [
            'contact'=>$contacts
        ]);
    }


    /**
     * @Route("/eleve/creer_tuteur/traitement", name="creation_tuteur_traitement")
     * @Security("has_role('ROLE_USER')")
     */
    public function creer_tuteur_traitement(Request $request)
    {

        $dao_tuteur = new DAOTuteur();
        $dao_company = new DAOCompany();

        $company = $dao_company->readByName($request->request->get('company'));

        $tuteur = new Tuteur(
            null,
            $request->request->get('last-name'), // $_POST['last-name']
            $request->request->get('first-name'),
            $request->request->get('mail'),
            $request->request->get('tel'),
            $company->getId(),
            $request->request->get('function')
        );

        var_dump($tuteur);
        $dao_tuteur->create($tuteur);

        return $this->redirect("/eleve/creer_stage");

    }

    /**
     * @Route("/eleve/creer_tuteur", name="creation_tuteur")
     * @Security("has_role('ROLE_USER')")
     */
    public function creer_tuteur(Request $request)
    {
        $dao_company = new DAOCompany();

        $liste_entreprise = $dao_company->readAll();

        return $this->render('content/creer_tuteur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'companies' =>$liste_entreprise
        ]);

    }
    /**
     * @Route("/eleve/creer_entreprise", name="creation_entreprise")
     * @Security("has_role('ROLE_USER')")
     */
    public function creer_entreprise(Request $request)
    {
        $dao_option = new DAOOption();
        
        $liste_option = $dao_option->readAll();
        
        return $this->render('content/creer_entreprise.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'options' =>$liste_option
        ]);
        
    }

    /**
     * @Route("/eleve/creer_entreprise/traitement", name="creation_entreprise_traitement")
     * @Security("has_role('ROLE_USER')")
     */
    public function creer_entreprise_traitement(Request $request)
    {
        $daoCompany = new DAOCompany();
        $daoOption = new DAOOption();
        $option = null;
        $company = null;
        
        
        $option_name = $request->request->get("option");
        $option = $daoOption->readByName($option_name);
        //dump($option);die;
        
        $company = new Company(
            null,
            $request->request->get('name'),
            $request->request->get('address'),
            $request->request->get('postal_code'),
            $request->request->get('tel'),
            $request->request->get('town'),
            $option->getId()
        );

        
        
        $daoCompany->create($company);

        return $this->redirect($this->generateUrl('creation_stage'));

    }

    /**
     * @Route("/eleve/creer_stage", name="creation_stage")
     * @Security("has_role('ROLE_USER')")
     */
    public function creer_stage(Request $request, SecuritySymfony $security)
    {
        $id = $security->getUser()->getId();
        $dao_etudiant = new DAOEtudiant();
        $dao_company = new DAOCompany();

        $liste_infos_eleve = $dao_etudiant->readWithOptionAndPromotion($id);
        $liste_entreprise = $dao_company->readAll();

        return $this->render('content/creation_de_stage.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'liste_eleve' => $liste_infos_eleve,
            'companies' =>$liste_entreprise
        ]);
        
    }
    /**
     * @Route("/eleve/creer_stage/traitement", name="creation_stage_traitement")
     * @Security("has_role('ROLE_USER')")
     */
    public function creer_stage_traitement(Request $request, SecuritySymfony $security)
    {


        $id_student = $security->getUser()->getId();
        $dao_stage = new DAOStage();
        $dao_company = new DAOCompany();

        $name_company = $request->request->get('company');
        $date_debut = $request->request->get('date_debut');
        $date_fin = $request->request->get('date_fin');



        $company = $dao_company->readByName($name_company);

        $stage = new Stage(
            null,
            $company->getId(),
            $id_student,
            $date_debut,
            $date_fin,
            null
        );


        $dao_stage->create($stage);
        return new Response("<html><body>$date_debut</body></html>");// a remplacer par une redirection

    }
    
    /**
     * @Route("/eleve/info_stage", name="information_stage")
     * @Security("has_role('ROLE_USER')")
     */
    public function info_stage(Request $request, SecuritySymfony $security)
    {
        $id=3;// a remplacer;
        $id_student =  $security->getUser()->getId();
        /*$id=$_GET['id'];*/
        $daotuteur = new DAOTuteur();
        $daoetudiant = new DAOEtudiant();
        $daocompany = new DAOCompany();
        
        $tuteur = $daotuteur->readbyCompany($id)[0];
        $etu = $daoetudiant->read($id_student);
        $enterprise = $daocompany->read($id);
        
        return $this->render('info_stage_conv.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'enterprise' => $enterprise ,
            'tuteur' => $tuteur ,
            'etu' => $etu
        ]);
    }
   
    /**
     * 
     * @Route("/eleve/info_entreprise", name="information_etp_eleve")
     * @Security("has_role('ROLE_USER')")
     */
    public function info_entreprise(Request $request)
    {
        if(empty($_GET['id'])){
            throw new HttpException(400);
        }
        $id=$_GET['id'];
       
        $daotuteur = new DAOTuteur();
        $daocompany = new DAOCompany();
        
        $tuteur = $daotuteur->readbyCompany($id);
        $enterprise = $daocompany->read($id);
        if(!$enterprise){
            throw new HttpException(404);
        }
        
        /*-----------------------------------------------------------*/
        return $this->render('info_entreprise.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'enterprise' => $enterprise , 'tuteur' => $tuteur
        ]);
    }

    /**
     *
     * @Route("/eleve", name="homepage_eleve")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexEleve(Request $request)
    {
        return $this->redirectToRoute('liste_entreprise_page');
    }

}

