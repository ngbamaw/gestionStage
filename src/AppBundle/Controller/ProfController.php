<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Security as SecuritySymfony;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\DAO\DAOCompany;
use AppBundle\DAO\DAOEtudiant;
use AppBundle\DAO\DAOOption;
use AppBundle\DAO\DAOStage;
use AppBundle\DAO\DAOTuteur;
use PDO;
use AppBundle\DAO\DAOProfesseur;
use AppBundle\DAO\DatabaseConnectionSingleton;
use DOMDocument;
use Symfony\Component\Security\Core\User\UserInterface;
use ZipArchive;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


class ProfController extends Controller
{


    /**
     * @Route("/professeur/contact", name="contact_prof")
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function contact_prof(Request $request)
    {
        $co = DatabaseConnectionSingleton::getInstance();

        $daoProf = new DAOProfesseur();
        $daoEtu = new DAOEtudiant();
        $daoTut = new DAOTuteur();

        $contacts = $daoProf->readAllDetailed();
        $contacts_el = $daoEtu->readAll();
        $contacts_tut = $daoTut->readAll();

        // replace this example code with whatever you need
        return $this->render('contact_prof.html.twig', [
            'profs' => $contacts,
            'eleves' => $contacts_el,
            'tuteurs' => $contacts_tut,
            'page' => 'contact'
        ]);
    }


    /**
     * Matches /professeur/contact/*
     *
     * @Route("/professeur/contact/{type}/{id_contact}", name="fiche_contact_profs")
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function ActionContact(Request $request, $type, $id_contact)
    {
        $contacts = array();
        switch ($type) {
            case "Internship_Tutor":
                $daoTut = new DAOTuteur();
                $contacts = $daoTut->read($id_contact);
                break;

            case "Professor":
                $daoProf = new DAOProfesseur();
                $contacts = $daoProf->read($id_contact);
                break;

            case "Student":
                $daoStu = new DAOEtudiant();
                $contacts = $daoStu->read($id_contact);
                break;

            default:
                break;
        }
        //vardump($contacts);

        // replace this example code with whatever you need
        return $this->render('fiche_contact.html.twig', [
            'contact' => $contacts
        ]);
    }


    /**
     * @Route("/professeur/convention", name="convention")
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function convention(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('convention.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/professeur/validation", name="validation_eleves")
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function valid_inscr(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('validation_inscription.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/professeur/info_stage_conv", name="information_stage_convention")
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function info_stage_conv(SecuritySymfony $security)
    {

        $id = $security->getUser()->getId();
        $id_internship = $_GET['id'];

        $daotuteur = new DAOTuteur();
        $daoetudiant = new DAOEtudiant();
        $daocompany = new DAOCompany();
        $daostage = new DAOStage();
        $stage = $daostage->read($id_internship);
        $etu = $daoetudiant->read($stage->getId_Student());
        $enterprise = $daocompany->read($stage->getId_Company());
        $tuteur = $daotuteur->readbyCompany(($enterprise->getId()));

        return $this->render('info_stage_conv.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'enterprise' => $enterprise,
            'tuteur' => $tuteur,
            'etu' => $etu
        ]);
    }

    /**
     * @Route("/professeur/info_entreprise", name="information_etp")
     * @Security("has_role('ROLE_ADMIN', 'ROLE_USER')")
     */
    public function info_entreprise(Request $request)
    {

        $id = $_GET['id'];
        $daotuteur = new DAOTuteur();
        $daocompany = new DAOCompany();

        $tuteur = $daotuteur->readbyCompany($id);
        $enterprise = $daocompany->read($id);

        /*-----------------------------------------------------------*/
        return $this->render('info_entreprise_prof.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'enterprise' => $enterprise, 'tuteur' => $tuteur
        ]);

    }

    /**
     * @Route("/professeur/liste_entreprises", name="professeur_liste_entreprises")
     * @Security("has_role('ROLE_USER')")
     */
    public function ListeEntreprises(Request $request)
    {

        $dao_opt = new DAOOption();
        $daoc = new DAOCompany();
        $rows_companies = $daoc->readAll();
        $rows_companies_all = $daoc->readAll();


        if (!empty($_GET['search'])) {
            $search = $_GET['search'];
            $rows_companies = array($daoc->readByName($search));
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

            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'companies' => $rows_companies,
            'options' => $rows_options,
            'villes' => $villes
        ]);
    }


    /**
     * @Route("/professeur/traite_convention", name="traite_convention")
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function traiteconvention(Request $request, AuthorizationCheckerInterface $checker)
    {
        //Le modèle en odt est transformé en archive
        $model = 'convention/model2015.odt'; // Changer cette variable pour choisir le modèle de convention
        $archive = 'convention/archive.zip';
        copy($model, $archive);

        //On extrait l'archive pour pouvoir travailler content.xml (il est peut etre possible d'extraire seulement content.xml)
        $zip = new ZipArchive;
        $zip->open($archive);
        $zip->extractTo('convention/traitement');
        $zip->close();

        //On charge le fichier content.xml
        $xml = 'convention/traitement/content.xml';
        $doc = simplexml_load_file($xml);

        //On récupère les informations sur le stage du formulaire
        //Etudiant
        $etu_lastname = $_POST['etu_lastname'];
        $etu_firstname = $_POST['etu_firstname'];
        $etu_adress = $_POST['etu_adress'];
        $etu_town = $_POST['etu_town'];
        $etu_postal = $_POST['etu_postal'];
        $etu_phone = $_POST['etu_phone'];
        $etu_mail = $_POST['etu_mail'];

        //Entreprise
        $ent_name = $_POST['ent_name'];
        $ent_adress = $_POST['ent_adress'];
        $ent_town = $_POST['ent_town'];
        $ent_postal = $_POST['ent_postal'];
        $ent_phone = $_POST['ent_phone'];

        //Tuteur
        $tut_lastname = $_POST['tut_lastname'];
        $tut_firstname = $_POST['tut_firstname'];
        $tut_phone = $_POST['tut_phone'];
        $tut_mail = $_POST['tut_mail'];


        // on remplace les variables du xml par les infos du formulaire

        $searches = ['ETU_LASTNAME', 'ETU_FIRSTNAME', 'ETU_ADRESS', 'ETU_TOWN', 'ETU_PHONE', 'ETU_MAIL',
            'ENT_NAME', 'ENT_ADRESS', 'ENT_TOWN', 'ENT_PHONE', 'ENT_POSTAL', 'ETU_POSTAL',
            'TUT_LASTNAME', 'TUT_FIRSTNAME', 'TUT_PHONE', 'TUT_MAIL'];

        $replacements = [$etu_lastname, $etu_firstname, $etu_adress, $etu_town, $etu_phone, $etu_mail,
            $ent_name, $ent_adress, $ent_town, $ent_phone, $ent_postal, $etu_postal,
            $tut_lastname, $tut_firstname, $tut_phone, $tut_mail];

        $newXml = simplexml_load_string(str_replace($searches, $replacements, $doc->asXml()));
        $newXml->asXml('convention/traitement/content.xml');

        //On renvoie content.xml dans l'archive
        $zip = new ZipArchive;
        $zip->open($archive);
        $zip->addFile('convention/traitement/content.xml', 'content.xml');
        $zip->close();

        //On crée la convention
        copy($archive, 'convention/archive/convention_' . $etu_firstname . '_' . $etu_lastname . '_' . $ent_name . '.odt');

        //On renvoie la convention
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"convention_" . $etu_lastname . ".odt");
        readfile('convention/archive/convention_' . $etu_firstname . '_' . $etu_lastname . '_' . $ent_name . '.odt');

        return $this->render("", [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/professeur/supprim_entreprise", name="supr_etp")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function supprim_entreprise(Request $request, AuthorizationCheckerInterface $checker)
    {
        //En Cours Marvin avec enfo_entreprise_prof.html.twig

        $dao = new DAOCompany();
        $id = $_GET['id'];
        $dao->delete($id);

        return $this->redirect("/professeur/liste_entreprises");

    }


}



