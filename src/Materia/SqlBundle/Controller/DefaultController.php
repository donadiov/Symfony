<?php

namespace Materia\SqlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Materia\SqlBundle\Model\UsuariosModel;
use Materia\SqlBundle\Model\EmpresasModel;
use Materia\SqlBundle\Model\SesionModel;
use Materia\SqlBundle\Model\ConectionModel;
use Materia\SqlBundle\Config\Config;
use Materia\SqlBundle\Modals\Login;
use Materia\SqlBundle\Entity\Users;
use Materia\SqlBundle\Entity\Company;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
    	$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$ses = new SesionModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$companies = $emp->dameEmpresas();
		$users = $usr->dameUsuarios();

		if ($request->getMethod() == 'POST') {
			$session->clear();
			$companyId = $request->get('companyId');
			$username = $request->get('username');
			$password = sha1($request->get('password'));
			$remember = $request->get('remember');
			
			$user = $ses->usuarioLogin($username, $password, $companyId);
			
			 if ($user) {
				$active = $emp->empresaActiva($companyId);
				$isActive = $active['companyActive'];
				 if ($isActive == 1){
						
					$userId = $user->getUserId();
					$login = $ses->generaLogin($userId);
					$session->set('login', $login);
					
					return $this->render('MateriaSqlBundle:Default:welcome.html.twig', array('login' => $login));
				} elseif ($isActive == 0) {
					$mensaje = "Su empresa no ha sido activada aun";
					$companies = $emp->dameEmpresas();
					return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
				}
			} else {
				$mensaje = "Combinacion de empresa, usuario y contraseña no valido. Intentelo nuevamente" ;
				return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
			}
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
				$user = $ses->usuarioLogin($login->getUsername(), $login->getPassword(), $login->getLoginCompanyId());
				return $this->render('MateriaSqlBundle:Default:welcome.html.twig', array('login' => $login));
				}
        }
			return $this->render('MateriaSqlBundle:Default:login.html.twig', array('companies' => $companies));
	}

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        $emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        $companies = $emp->dameEmpresas();
        return $this->render('MateriaSqlBundle:Default:login.html.twig', array('companies' => $companies));
	}

	public function newCompanyAction(Request $request) {
		$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($request->getMethod() == 'POST') {
			$company = $emp->newCompany($request);
			$companyId = $company->getCompanyId();
			$userId = $usr->newUser($request, $companyId);
			$emp->idUsuarioTitular($userId, $companyId);
			$notificacion = "Su empresa y usuario titular han sido creados. Solo falta activar su empresa. Para ello dirijase a su cuenta de correo e ingrese a la aplicacion desde el link proporcionado";
			$companies = $emp->dameEmpresas();
			return $this->render('MateriaSqlBundle:Default:login.html.twig', array('notificacion' => $notificacion, 'companies' => $companies));	
		}
		if ($session->has('login')) {
			$login = $session->get('login');
				if($login->getRol() == "SUPER_ADMIN"){
					return $this->render('MateriaSqlBundle:Default:form-company.html.twig', array('login' => $login, 'roles' => $roles));
				}
			return $this->render('MateriaSqlBundle:Default:welcome.html.twig', array('login' => $login));
		}
		return $this->render('MateriaSqlBundle:Default:form-company.html.twig');
		}
}
