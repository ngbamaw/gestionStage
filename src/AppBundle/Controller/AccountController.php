<?php


namespace AppBundle\Controller;


use AppBundle\DAO\DAOEtudiant;
use AppBundle\DAO\DAOProfesseur;
use AppBundle\Form\ModifyProfessorType;
use AppBundle\Form\ModifyStudiantType;
use AppBundle\Form\SignupProfessorType;
use AppBundle\Form\SignupStudiantType;
use AppBundle\Model\Etudiant;
use AppBundle\Model\Professor;
use AppBundle\Service\CaptchaHandler;
use AppBundle\Service\EtudiantHandler;
use AppBundle\Service\ProfessorHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends Controller
{
    /**
     *
     * @Route("/inscription", name="register")
     * @param Request $request
     * @param CaptchaHandler $captchaHandler
     * @param EtudiantHandler $etudiantHandler
     * @param AuthorizationCheckerInterface $checker
     * @return RedirectResponse|ResponseAlias
     * @Security("!has_role('ROLE_USER')")
     */
    public function registerAction(Request $request, CaptchaHandler $captchaHandler, EtudiantHandler $etudiantHandler, AuthorizationCheckerInterface $checker)
    {
        $etudiant = new Etudiant();

        $form = $this->createForm(SignupStudiantType::class, $etudiant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($captchaHandler->check($request)) {
                $etudiantHandler->createEtudiant($etudiant);
                return $this->redirectToRoute('connexion');
            } else {
                $this->addFlash(
                    'error',
                    'Captacha érroné'
                );
            }
        }


        return $this->render('index/inscription.html.twig', [
            'form' => $form->createView(),
            'errorCaptcha' => ''
        ]);
    }

    /**
     * @Route("/inscription/professeur", name="registerProfessor")
     * @param Request $request
     * @param CaptchaHandler $captchaHandler
     * @param ProfessorHandler $professorHandler
     * @param AuthorizationCheckerInterface $checker
     * @return RedirectResponse|ResponseAlias
     * @Security("!has_role('ROLE_USER')")
     */
    public function inscriptionProfesseurAction(Request $request, CaptchaHandler $captchaHandler, ProfessorHandler $professorHandler,  AuthorizationCheckerInterface $checker)
    {
        $professor = new Professor();

        $form = $this->createForm(SignupProfessorType::class, $professor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($captchaHandler->check($request)) {
                $professorHandler->createProfessor($professor);
                return $this->redirectToRoute('connexion');
            } else {
                $this->addFlash(
                    'error',
                    'Captacha érroné'
                );
            }
        }

        return $this->render(
            'index/inscription_professeur.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     *
     * @Route("/connexion", name="connexion")
     * @param AuthenticationUtils $authenticationUtils
     * @param AuthorizationCheckerInterface $checker
     * @return RedirectResponse|ResponseAlias|null
     * @Security("!has_role('ROLE_USER')")
     */
    public function connecAction(AuthenticationUtils $authenticationUtils, AuthorizationCheckerInterface $checker)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        //dump($error);die;
        // replace this example code with whatever you need
        return $this->render('index/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout()
    {
    }

    /**
     *
     * @Route("/modification/professeur/{id}", name="modification-professeur")
     * @param Request $request
     * @param ProfessorHandler $professorHandler
     * @param AuthorizationCheckerInterface $checker
     * @param $id
     * @return ResponseAlias
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function modifProfAction(Request $request, ProfessorHandler $professorHandler, AuthorizationCheckerInterface $checker, $id)
    {
        $dao = new DAOProfesseur();
        $professor = $dao->read($id);

        $form = $this->createForm(ModifyProfessorType::class, $professor);
        $form->handleRequest($request);
        if (
            $form->isSubmitted() &&
            $professorHandler->isValidForUpdate($form->getErrors()) &&
            $professorHandler->isValidPasswordAdmin()
        ) {
            $professorHandler->updateProfessor($professor);
            return $this->redirectToRoute('homepage');
        }else if (!$professorHandler->isValidPasswordAdmin()){
            $this->addFlash(
                'error',
                'Mot de passe admin incorrect'
            );
        }
        // replace this example code with whatever you need
        return $this->render('content/modif_professeur.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/modification/etudiant/{id}", name="modification-etudiant")
     * @param Request $request
     * @param EtudiantHandler $etudiantHandler
     * @param AuthorizationCheckerInterface $checker
     * @param $id
     * @return ResponseAlias
     * @Security("has_role('ROLE_USER') && user.getId() == id || has_role('ROLE_ADMIN')")
     */
    public function modifEtudiantAction(Request $request, EtudiantHandler $etudiantHandler, AuthorizationCheckerInterface $checker, $id)
    {
        $dao = new DAOEtudiant();
        $etudiant = $dao->read($id);

        $form = $this->createForm(ModifyStudiantType::class, $etudiant);
        $form->handleRequest($request);
        if (
            $form->isSubmitted() &&
            $etudiantHandler->isValidForUpdate($form->getErrors()) &&
            $etudiantHandler->isValidPasswordAdmin()
        ) {
            $etudiantHandler->updateEtudiant($etudiant);
            return $this->redirectToRoute('homepage');
        }else if (!$etudiantHandler->isValidPasswordAdmin()){
            $this->addFlash(
                'error',
                'Mot de pass admin incorrect'
            );
        }
        // replace this example code with whatever you need
        return $this->render('content/modif_etudiant.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
      /**
     * @Route("/validation/etudiant/{id}", name="validation-etudiant")
     * @param Request $request
     * @param EtudiantHandler $etudiantHandler
     * @param AuthorizationCheckerInterface $checker
     * @param $id
     * @return ResponseAlias
     * @Security("has_role('ROLE_USER') && user.getId() == id || has_role('ROLE_ADMIN')")
     */
    public function validEtudiantAction(Request $request, EtudiantHandler $etudiantHandler, AuthorizationCheckerInterface $checker, $id)
    {
        $dao = new DAOEtudiant();
        $etudiant = $dao->read($id);

        $form = $this->createForm(ModifyStudiantType::class, $etudiant);
        $form->handleRequest($request);
        if (
            $form->isSubmitted() &&
            $etudiantHandler->isValidForUpdate($form->getErrors())
        ) {
            $etudiantHandler->valideEtudiant($etudiant);
            return $this->redirectToRoute('homepage');
        }
        // replace this example code with whatever you need
        return $this->render('content/validation_etudiant.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    
}
