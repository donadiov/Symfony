<?php

namespace Materiaweb\MateriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Materiaweb\MateriaBundle\Entity\Users;
use Materiaweb\MateriaBundle\Entity\Company;
use Materiaweb\MateriaBundle\Entity\Roles;
use Materiaweb\MateriaBundle\Modals\Login;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller {

    public function listCompanyAction(Request $request) {
		$session = $this->getRequest()->getSession();
		if ($session->has('login')) {
			$login = $session->get('login');
			$mensaje = "";
			$em = $this->getDoctrine()->getManager();
				
			if ($request->getMethod() == 'POST') {
				$companyId = $request->get('companyId');
				$company = $em->getRepository('MateriawebMateriaBundle:Company')->findOneBy(array('companyId' => $companyId));
				$user = $em->getRepository('MateriawebMateriaBundle:Users')->findOneBy(array('userCompanyId' => $companyId));

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
				$company->setCompanyNombreTitular($request->get('companyNombreTitular'));
				$company->setCompanyApellidoTitular($request->get('companyApellidoTitular'));
				$company->setCompanyUsuarioTitular($request->get('companyUsuarioTitular'));
				if ($request->get('companyPasswordTitular')){
					$company->setCompanyPasswordTitular(sha1($request->get('companyPasswordTitular')));
				}
				$company->setCompanyActive($request->get('companyActive'));
				$em->flush();

				$user->setFirstName($request->get('companyNombreTitular'));
				$user->setLastName($request->get('companyApellidoTitular'));
				$user->setUserName($request->get('companyUsuarioTitular'));
				if ($request->get('companyPasswordTitular')){
					$user->setPassword(sha1($request->get('companyPasswordTitular')));
				}
				$em->flush();
				
				$mensaje = "La empresa con ID " . $companyId . " - " . $request->get('companyRazonSocial') . " ha sido modificada";

				}

			$companies = $em->getRepository('MateriawebMateriaBundle:Company')->findAll();

			return $this->render('MateriawebMateriaBundle:Default:listCompany.html.twig', array('mensaje' => $mensaje, 'companies' => $companies, 'login' => $login));			
		}
	}

	 public function editCompanyAction($companyId) {
		$session = $this->getRequest()->getSession();
		if ($session->has('login')) {
			$login = $session->get('login');
			$em = $this->getDoctrine()->getManager();
			$company = $em->getRepository('MateriawebMateriaBundle:Company')->findOneBy(array('companyId' => $companyId));
			return $this->render('MateriawebMateriaBundle:Default:editCompany.html.twig', array('company' => $company, 'login' => $login));			
		}
	}

	public function listUserAction(Request $request) {
		$session = $this->getRequest()->getSession();
		if ($session->has('login')) {
			$login = $session->get('login');
			$mensaje = "";
			if ($request->getMethod() == 'POST') {
				$em = $this->getDoctrine()->getManager();
				$userId = $request->get('userId');
				$user = $em->getRepository('MateriawebMateriaBundle:Users')->find($userId);

				$user->setFirstName($request->get('firstName'));
				$user->setLastName($request->get('lastName'));
				$user->setUserName($request->get('userName'));
				$user->setuserMail($request->get('userMail'));
				if ($request->get('password')){
					$user->setPassword(sha1($request->get('password')));
				}
				if ($request->get('userRol') != $user->getUserRol()){
					$user->setUserRol($request->get('userRol'));
				}
				if ($request->get('userRol') == 'TITULAR'){
					$company = $em->getRepository('MateriawebMateriaBundle:Company')->findOneby(array('companyId' => $user->getUserCompanyId()));
					$company->setCompanyMail($request->get('userMail'));
					$company->setCompanyNombreTitular($request->get('fisrtName'));
					$company->setCompanyApellidoTitular($request->get('lastName'));
					$company->setCompanyUsuarioTitular($request->get('userName'));
					if ($request->get('password')){
						$company->setCompanyPasswordTitular(sha1($request->get('password')));
					}
					$em->flush();	
				}
				$em->flush();
				$mensaje = "El Usuario con ID " . $userId . " - " . $request->get('firstName') . " " . $request->get('lastName') . " ha sido modificada";
			}
			$em = $this->getDoctrine()->getManager();
			$users = $em->getRepository('MateriawebMateriaBundle:Users')->findAll();
			$companies = $em->getRepository('MateriawebMateriaBundle:Company')->findAll();

			return $this->render('MateriawebMateriaBundle:Default:listUser.html.twig', array('mensaje' => $mensaje, 'users' => $users,'companies' => $companies, 'login' => $login));			
		}
	}

	 public function editUserAction($userId) {
		$session = $this->getRequest()->getSession();
		if ($session->has('login')) {
			$login = $session->get('login');
			$em = $this->getDoctrine()->getManager();
			$users = $em->getRepository('MateriawebMateriaBundle:Users');
			$roles = $em->getRepository('MateriawebMateriaBundle:Roles')->findAll();
			$user = $users->findOneBy(array('userId' => $userId));
			

			return $this->render('MateriawebMateriaBundle:Default:signup.html.twig', array('user' => $user, 'login' => $login, 'roles' => $roles));			
		}
	}

	public function deleteUserAction(Request $request) {
		$session = $this->getRequest()->getSession();
		$mensaje = "";
		if ($session->has('login')) {
			$login = $session->get('login');
			$em = $this->getDoctrine()->getManager();
			if ($request->getMethod() == 'POST') {
				$users = $em->getRepository('MateriawebMateriaBundle:Users');
				$userId = $request->get('userId');
				$user = $users->findOneBy(array('userId' => $userId));
				$userName = $user->getFirstName() . " " . $user->getLastName();
				$em->remove($user);
				$em->flush();
				
				$mensaje = "El usuario " . $userId . " - " . $userName . " ha sido eliminado correctamente";
			}
			$users = $em->getRepository('MateriawebMateriaBundle:Users')->findAll();
			$companies = $em->getRepository('MateriawebMateriaBundle:Company')->findAll();
			return $this->render('MateriawebMateriaBundle:Default:listUser.html.twig', array('mensaje' => $mensaje, 'users' => $users,'companies' => $companies, 'login' => $login));			
		}
	}
}
