<?php

namespace LineasTelefonicas\Policia\ERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use LineasTelefonicas\Policia\ERBundle\Modals\Login;
use LineasTelefonicas\Policia\ERBundle\Entity\Usuarios;
use LineasTelefonicas\Policia\ERBundle\Entity\Rol;



class UserController extends Controller
{
    public function listUserAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoUsuarios = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
						
					$usuarioId = $request->get('usuarioId');
					$usuario = $repoUsuarios->findOneBy(array('usuarioId' => $usuarioId));

					$usuario->setUsuarioApellido($request->get('usuarioApellido'));
					$usuario->setUsuarioMail($request->get('usuarioMail'));
					$usuario->setUsuarioNombre($request->get('usuarioNombre'));
					$usuario->setUsuarioRol($request->get('usuarioRol'));
					$usuario->setUsuarioUsername($request->get('usuarioUsername'));
					if ($request->get('usuarioPass')){
						$usuario->setUsuarioPass(sha1($request->get('usuarioPass')));
					}					
					$em->flush('lineastelpolicia');
					$mensaje = "Usuario Modificado correctamente";
					$usuarios  = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listUser.html.twig', array('usuarios' => $usuarios, 'login' => $login, 'mensaje' => $mensaje));
					}
				$usuarios  = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios')->findAll();
				return $this->render('LineasTelefonicasPoliciaERBundle:Default:listUser.html.twig', array('usuarios' => $usuarios, 'login' => $login));
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

public function addUserAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoUsuarios = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios');
	
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
						
					$usuario = new Usuarios();
					$usuario->setUsuarioApellido($request->get('usuarioApellido'));
					$usuario->setUsuarioMail($request->get('usuarioMail'));
					$usuario->setUsuarioNombre($request->get('usuarioNombre'));
					$usuario->setUsuarioRol($request->get('usuarioRol'));
					$usuario->setUsuarioUsername($request->get('usuarioUsername'));
					$usuario->setUsuarioPass(sha1($request->get('usuarioPass')));
					$em->persist($usuario);
					$em->flush();
					$mensaje = "El usuario " . $request->get('usuarioApellido') . " " . $request->get('usuarioNombre') . " ha sido agregado";
					// return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_listUser'));
					$roles = $em->getRepository('LineasTelefonicasPoliciaERBundle:Rol')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:addUser.html.twig', array('roles' => $roles, 'login' => $login, 'mensaje' => $mensaje));		
					}					
				$roles = $em->getRepository('LineasTelefonicasPoliciaERBundle:Rol')->findAll();
				return $this->render('LineasTelefonicasPoliciaERBundle:Default:addUser.html.twig', array('roles' => $roles, 'login' => $login));
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

public function editUserAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoUsuarios = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios');
	
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				$usuarioId = $request->get('usuarioId');
				$usuarios  = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios');
				$usuario = $usuarios->findOneBy(array('usuarioId' => $usuarioId));
				$roles = $em->getRepository('LineasTelefonicasPoliciaERBundle:Rol')->findAll();
				return $this->render('LineasTelefonicasPoliciaERBundle:Default:editUser.html.twig', array('roles' => $roles, 'usuario' => $usuario, 'login' => $login));
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

    public function deleteUserAction(Request $request) 
	{
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoUsuarios = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios');
	
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($request->getMethod() == 'POST') {
				$usuarioId = $request->get('usuarioId');
				$usuarios  = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios');
				$usuario = $usuarios->findOneBy(array('usuarioId' => $usuarioId));
				$userName = $usuario->getUsuarioNombre() . " " . $usuario->getUsuarioApellido();
				$em->remove($usuario);
				$em->flush();
			}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_listUser'));
		}
			return $this->render('LineasTelefonicasPoliciaERBundle:Default:login.html.twig');
     }

}
