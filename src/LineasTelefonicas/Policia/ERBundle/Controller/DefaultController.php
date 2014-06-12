<?php

namespace LineasTelefonicas\Policia\ERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use LineasTelefonicas\Policia\ERBundle\Modals\Login;
use LineasTelefonicas\Policia\ERBundle\Entity\Usuarios;
use LineasTelefonicas\Policia\ERBundle\Entity\Rol;



class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoUsuarios = $em->getRepository('LineasTelefonicasPoliciaERBundle:Usuarios');
		
		if ($request->getMethod() == 'POST') {
            $session->clear();
			$username = $request->get('username');
			$password = sha1($request->get('password'));
			$remember = $request->get('remember');
			
			$user = $repoUsuarios->findOneBy(array('usuarioUsername' => $username, 'usuarioPass' => $password));
			if ($user) {
					$userId = $user->getUsuarioId();
					$login = new Login();
					$login->setLoginUserId($userId);
					$login->setUsername($username);
					$login->setLoginNombre($user->getUsuarioNombre());
					$login->setLoginApellido($user->getUsuarioApellido());
					$login->setPassword($password);
					$login->setRol($user->getUsuarioRol());
					$session->set('login', $login);
					
					$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
					$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
					$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:welcome.html.twig', array('opciones' => $opciones, 'empresas' => $empresas, 'destinos' => $destinos, 'login' => $login));
				} else {
					$mensaje = "Error en Login - Verifique su usuario y su contraseña";
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:login.html.twig', array('mensaje' => $mensaje));
				}
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
				$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
				$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				return $this->render('LineasTelefonicasPoliciaERBundle:Default:welcome.html.twig', array('opciones' => $opciones, 'empresas' => $empresas, 'destinos' => $destinos, 'login' => $login));

				}
            }
			return $this->render('LineasTelefonicasPoliciaERBundle:Default:login.html.twig');
        }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('LineasTelefonicasPoliciaERBundle:Default:login.html.twig');
	}

}
