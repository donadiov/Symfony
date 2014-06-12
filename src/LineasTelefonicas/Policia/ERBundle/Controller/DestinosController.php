<?php

namespace LineasTelefonicas\Policia\ERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use LineasTelefonicas\Policia\ERBundle\Modals\Login;
use LineasTelefonicas\Policia\ERBundle\Entity\Usuarios;
use LineasTelefonicas\Policia\ERBundle\Entity\Rol;
use LineasTelefonicas\Policia\ERBundle\Entity\Destino;



class DestinosController extends Controller
{
    public function listDestinosAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoDestino = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
					
					$destino = new Destino();
					$destino->setDestinoNombre($request->get('destinoNombre'));
					$em->persist($destino);
					$em->flush();
					$mensaje ="el destino " . $request->get('destinoNombre') . " fue agregado";
				}
				
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				if(isset($mensaje)){
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig', array('destinos' => $destinos, 'login' => $login, 'mensaje' => $mensaje));
				}else{
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig', array('destinos' => $destinos, 'login' => $login));
				}
        	}
		}	
	}

    public function deleteDestinosAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoDestino = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
					
					$destino = $repoDestino->findOneBy(array('destinoId' => $request->get('destinoId')));;
					$destNombre = $destino->getDestinoNombre();
					$em->remove($destino);
					$em->flush();
					$mensaje ="el destino " . $destNombre . " fue eliminado";
				}
				
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				if(isset($mensaje)){
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig', array('destinos' => $destinos, 'login' => $login, 'mensaje' => $mensaje));
				}else{
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig', array('destinos' => $destinos, 'login' => $login));
				}
        	}
		}	
	}    

    public function saveDestinosAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoDestino = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
					
					$destino = $repoDestino->findOneBy(array('destinoId' => $request->get('destinoId')));
					$destino->setDestinoNombre($request->get('destinoNombre'));

					$em->flush();
					$mensaje ="el destino " . $request->get('destinoNombre') . " ha sido modificado";
				}
				
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				if(isset($mensaje)){
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig', array('destinos' => $destinos, 'login' => $login, 'mensaje' => $mensaje));
				}else{
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig', array('destinos' => $destinos, 'login' => $login));
				}
        	}
		}	
	}    

}
