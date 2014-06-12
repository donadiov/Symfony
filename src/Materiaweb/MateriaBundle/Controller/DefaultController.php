<?php

namespace Materiaweb\MateriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Materiaweb\MateriaBundle\Entity\Users;
use Materiaweb\MateriaBundle\Entity\Company;
use Materiaweb\MateriaBundle\Entity\Roles;
use Materiaweb\MateriaBundle\Modals\Login;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();
		$repositoryUsers = $em->getRepository('MateriawebMateriaBundle:Users');
		$companies = $em->getRepository('MateriawebMateriaBundle:Company')->findAll();

		if ($request->getMethod() == 'POST') {
            $session->clear();
			$companyId = $request->get('companyId');
			$username = $request->get('username');
			$password = sha1($request->get('password'));
			$remember = $request->get('remember');
			$user = $repositoryUsers->findOneBy(array('userName' => $username, 'password' => $password, 'userCompanyId' => $companyId));
			if ($user) {

				$companies = $em->getRepository('MateriawebMateriaBundle:Company');
				$company = $companies->findOneBy(array('companyId' => $user->getUserCompanyId()));										
				$isActive = $company->getCompanyActive();
				if ($isActive == 1){
					$rol = $user->getUserRol();
					$userId = $user->getUserId();
					$login = new Login();
					$login->setLoginCompanyId($companyId);
					$login->setLoginUserId($userId);
					$login->setUsername($username);
					$login->setPassword($password);
					$login->setRol($rol);
					$session->set('login', $login);
					return $this->render('MateriawebMateriaBundle:Default:welcome.html.twig', array('name' => $user->getFirstName(), 'login' => $login));
				} else {
					$mensaje = "Su empresa no ha sido activada aun";
					$companies = $em->getRepository('MateriawebMateriaBundle:Company')->findAll();
					return $this->render('MateriawebMateriaBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
				}
			} else {
                return $this->render('MateriawebMateriaBundle:Default:login.html.twig', array('name' => 'Login Error', 'companies' => $companies));
			}
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
				$user = $repositoryUsers->findOneBy(array('userName' => $login->getUsername(), 'password' => $login->getPassword(), 'userCompanyId' => $login->getLoginCompanyId()));
				return $this->render('MateriawebMateriaBundle:Default:welcome.html.twig', array('name' => $user->getFirstName(), 'login' => $login));
				}
            }
            return $this->render('MateriawebMateriaBundle:Default:login.html.twig', array('companies' => $companies));
        }
		 

	
	public function newCompanyAction(Request $request) {
        if ($request->getMethod() == 'POST') {
			$company = new Company();
			$company->setCompanyClave($request->get('companyClave'));
			$company->setCompanyRazonSocial($request->get('companyRazonSocial'));
			$company->setCompanyNombreFantasia($request->get('companyNombreFantasia'));
			$company->setCompanyMail($request->get('companyMail'));
			$company->setCompanyCalle($request->get('companyCalle'));
			$company->setCompanyCalleNro($request->get('companyCalleNro'));
			$company->setCompanyCp($request->get('companyCp'));
			$company->setCompanyLocalidad($request->get('companyLocalidad'));
			$company->setCompanyProvincia($request->get('companyProvincia'));
			$company->setCompanyPais($request->get('companyPais'));
			$company->setCompanyCuit($request->get('companyCuit'));
			$company->setCompanyPerFiscal($request->get('companyPerFiscal'));
			$company->setCompanyNiibb($request->get('companyNiibb'));
			$company->setCompanyCondiibb($request->get('companyCondiibb'));
			$company->setCompanyActividad($request->get('companyActividad'));
			$company->setCompanyObservaciones($request->get('companyObservaciones'));
			$company->setCompanyNombreTitular($request->get('companyNombretitular'));
			$company->setCompanyApellidoTitular($request->get('companyApellidoTitular'));
			$company->setCompanyUsuarioTitular($request->get('companyUsuarioTitular'));
			$company->setCompanyPasswordTitular(sha1($request->get('companyPasswordTitular')));
			$company->setCompanyActive(0);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($company);
			$em->flush();
			
			$companyId = $company->getCompanyId();
			
			$user = new Users();
			$user->setUserName($request->get('companyUsuarioTitular'));
			$user->setPassword(sha1($request->get('companyPasswordTitular')));
			$user->setUserMail($request->get('companyMail'));
			$user->setFirstName($request->get('companyNombretitular'));
			$user->setLastName($request->get('companyApellidoTitular'));
			$user->setUserCompanyId($companyId);
			$user->setUserRol('TITULAR');
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			
			$mensaje = "La empresa ha sido creada - Revise la cuenta de correo que ingreso para activar la cuenta";
			
			$companies = $em->getRepository('MateriawebMateriaBundle:Company')->findAll();		
			return $this->render('MateriawebMateriaBundle:Default:login.html.twig', array('companies' => $companies, 'mensaje' => $mensaje));	
		}
		
		return $this->render('MateriawebMateriaBundle:Default:form-company.html.twig');
	}

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
		$session->clear();
		
		$em = $this->getDoctrine()->getManager();
		$companies = $em->getRepository('MateriawebMateriaBundle:Company')->findAll();
		return $this->render('MateriawebMateriaBundle:Default:login.html.twig', array('companies' => $companies));
	}

	public function pruebaAction(Request $request) {
		$session = $this->getRequest()->getSession();
		if ($session->has('login')) {
				$login = $session->get('login');
				return $this->render('MateriawebMateriaBundle:Default:prueba.html.twig', array('login' => $login));
		}
		return $this->redirect($this->generateUrl('materiaweb_materia_homepage'));
	}
}
