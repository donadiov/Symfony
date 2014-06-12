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

class AdminController extends Controller
{
    public function listCompanyAction(Request $request) {
		$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$ses = new SesionModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			if ($request->getMethod() == 'POST') {
				$usuario = $emp->updateCompany($request);
				$idUsrTitular = $usuario['companyIdTitular'];
				$usr->updateUser($request, $idUsrTitular);
				$mensaje = "La empresa ha sido modificada satisfactoriamente";
				$companies = $emp->dameEmpresas();
				return $this->render('MateriaSqlBundle:Admin:listCompany.html.twig', array('login' => $login, 'companies' => $companies, 'mensaje' => $mensaje));
			}
			$rol = $ses->checkRol($login);
			if ($rol == "SUPER_ADMIN"){
				$companies = $emp->dameEmpresas();
				return $this->render('MateriaSqlBundle:Admin:listCompany.html.twig', array('login' => $login, 'companies' => $companies));
			}	
		}
        $session->clear();
		$mensaje = "Debe iniciar sesion como SUPER ADMIN para acceder a esta pagina";
		$companies = $emp->dameEmpresas();
		return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
	}

    public function listUserAction(Request $request) {
		$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$ses = new SesionModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			if ($request->getMethod() == 'POST') {
				$userid = $request->get('userid');
				$usr->updateUser($request, $userid);
				$modifiedUsername = $userid = $request->get('userName'); 
				$mensaje = "El usuario ". $modifiedUsername ." ha sido actualizado";
			}
			$rol = $ses->checkRol($login);
			if ($rol == "SUPER_ADMIN"){
				$users = $usr->dameUsuarios();
				$companies = $emp->dameEmpresas();
				return $this->render('MateriaSqlBundle:Admin:listUser.html.twig', array('login' => $login, 'users' => $users, 'companies' => $companies));
			}	
		}
		$session->clear();
		$mensaje = "Debe iniciar sesion como SUPER ADMIN para acceder a esta pagina";
		$companies = $emp->dameEmpresas();
		return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
	}	
}
