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

class EmpresasController extends Controller
{
    public function editMyCompanyAction(Request $request, $companyId) {
		$session = $this->getRequest()->getSession();
		$emp = new EmpresasModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$usr = new UsuariosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		if ($session->has('login')) {
			$login = $session->get('login');
			if ($request->getMethod() == 'POST') {
				$usuario = $emp->updateCompany($request);
				$idUsrTitular = $usuario['companyIdTitular'];
				$usr->updateUser($request, $idUsrTitular);
				$mensaje = "Tu empresa ha sido modificada con exito";
				return $this->render('MateriaSqlBundle:Default:welcome.html.twig', array('login' => $login, 'mensaje' => $mensaje));
			}
			$company = $emp-> dameUnaEmpresas($companyId);
			return $this->render('MateriaSqlBundle:Default:editCompany.html.twig', array('login' => $login, 'company' => $company));	
		}
		$mensaje = "Debe iniciar sesion como TITLAR de su empresa para acceder a esta pagina";
		$companies = $emp->dameEmpresas();
		return $this->render('MateriaSqlBundle:Default:login.html.twig', array('mensaje' => $mensaje, 'companies' => $companies));
	}
}
