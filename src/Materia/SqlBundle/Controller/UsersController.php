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

class UsersController extends Controller
{
	public function editUserAction(Request $request, $userid) {
	$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			if($request->getMethod() == 'POST'){
				$usr->updateUser($request, $userid);
			}
			$user = $usr->dameUnUsuario($userid);
			$companyId = $user['userCompanyId'];
			$comp = $emp->dameUnaEmpresas($companyId);
			$company = $comp['companyRazonSocial'];
			$roles = $usr->dameRoles();
			return $this->render('MateriaSqlBundle:Default:editUser.html.twig', array('login' => $login, 'user' => $user, 'company' => $company, 'roles' => $roles));
		}
	}
	
	public function ListCompanyUserAction(Request $request) {
	$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$ses = new SesionModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			if($request->getMethod() == 'POST'){
				$userid = $request->get('userid');
				$usr->updateUser($request, $userid);
			}
			$companyId = $login->getLoginCompanyId();
			$users = $usr->dameUsuariosDeUnaEmpresa($companyId);
			$company = $emp->dameUnaEmpresas($companyId);
			return $this->render('MateriaSqlBundle:Default:listUser.html.twig', array('login' => $login, 'users' => $users, 'company' => $company));
		}
	}

    public function deleteCompanyUserAction(Request $request, $userid) {
		$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$ses = new SesionModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			if ($request->getMethod() == 'POST') {
				$userDeleted = $usr->dameUnUsuario($userid);
				$usr->deleteUser($userid);
				$mensaje = "El usuario ". $userDeleted['firstName'] ." ". $userDeleted['lastName'] ." ha sido eliminado correctamente";
			}
			$rol = $ses->checkRol($login);
			if ($rol == "SUPER_ADMIN"){
				$users = $usr->dameUsuarios();
				$companies = $emp->dameEmpresas();
				return $this->redirect($this->generateUrl('materia_sql_admin_listUser'));
				
			}elseif ($rol == "TITULAR" or $rol == "ADMIN"){
				$companyId = $login->getLoginCompanyId();
				$users = $usr->dameUsuariosDeUnaEmpresa($companyId);
				$company = $emp->dameUnaEmpresas($companyId);
				return $this->render('MateriaSqlBundle:Default:listUser.html.twig', array('login' => $login, 'users' => $users, 'company' => $company));
				
			}
		}
		$session->clear();
		$mensaje = "Debe iniciar sesion para acceder a esta pagina";
		$companies = $emp->dameEmpresas();
		return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
	}

public function newUserAction(Request $request) {
		$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$ses = new SesionModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			$rol = $ses->checkRol($login);
			$roles = $usr->dameRoles();
			$companies = $emp->dameEmpresas();
			return $this->render('MateriaSqlBundle:Default:newUser.html.twig', array('login' => $login, 'roles' => $roles, 'companies' => $companies));
		}
		$session->clear();
		$mensaje = "Debe iniciar sesion para acceder a esta pagina";
		$companies = $emp->dameEmpresas();
		return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
	}

    public function saveUserAction(Request $request) {
		$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$ses = new SesionModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			if ($request->getMethod() == 'POST') {
				
				if ($ses->checkRol($login) == "SUPER_ADMIN" ){
					$companyId = $request->get('companyId');
				}else{
					$companyId = $login->getLoginCompanyID();
				}
				$usr->newUser($request, $companyId);
				$user = $usr->dameUltimoUsuario();
				$mensaje = "El usuario ". $user['firstName'] ." ". $user['lastName'] ." ha sido agregado correctamente";
			}
			$rol = $ses->checkRol($login);
			if ($rol == "SUPER_ADMIN"){
				$users = $usr->dameUsuarios();
				$companies = $emp->dameEmpresas();
				return $this->redirect($this->generateUrl('materia_sql_admin_listUser'));
				
			}elseif ($rol == "TITULAR" or $rol == "ADMIN"){
				$companyId = $login->getLoginCompanyId();
				$users = $usr->dameUsuariosDeUnaEmpresa($companyId);
				$company = $emp->dameUnaEmpresas($companyId);
				return $this->render('MateriaSqlBundle:Default:listUser.html.twig', array('login' => $login, 'users' => $users, 'company' => $company));
				
			}
		}
		$session->clear();
		$mensaje = "Debe iniciar sesion para acceder a esta pagina";
		$companies = $emp->dameEmpresas();
		return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
	}
}
