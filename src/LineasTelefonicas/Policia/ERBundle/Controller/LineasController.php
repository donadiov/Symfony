<?php

namespace LineasTelefonicas\Policia\ERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use LineasTelefonicas\Policia\ERBundle\Modals\Login;
use LineasTelefonicas\Policia\ERBundle\Entity\Usuarios;
use LineasTelefonicas\Policia\ERBundle\Entity\Rol;
use LineasTelefonicas\Policia\ERBundle\Entity\Lineas;
use LineasTelefonicas\Policia\ERBundle\Entity\Empresas;
use LineasTelefonicas\Policia\ERBundle\Entity\OpcionesSN;
use LineasTelefonicas\Policia\ERBundle\Entity\Destino;
use LineasTelefonicas\Policia\ERBundle\Entity\Historico;


class LineasController extends Controller
{
    public function listLineasAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
					
					$lineasRepo = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas');
					$linea = $lineasRepo->findOneBy(array('lineaId' => $request->get('lineaId')));
					
					$linea->setLineaBlackberry($request->get('lineaBlackberry'));
					$linea->setLineaCargo($request->get('lineaCargo'));
					$linea->setLineaDatos($request->get('lineaDatos'));
					$linea->setLineaDestino($request->get('lineaDestino'));
					$linea->setLineaEmpresa($request->get('lineaEmpresa'));
					$linea->setLineaGprs($request->get('lineaGprs'));
					$linea->setLineaIMEI($request->get('lineaIMEI'));
					$linea->setLineaMarca($request->get('lineaMarca'));
					$linea->setLineaModelo($request->get('lineaModelo'));
					$linea->setLineaNumero($request->get('lineaNumero'));
					$linea->setLineaObservaciones($request->get('lineaObservaciones'));
					$linea->setLineaPlan($request->get('lineaPlan'));
					$linea->setLineaRoaming($request->get('lineaRoaming'));
					$linea->setLineaSms($request->get('lineaSms'));
					$linea->setLineaUltimoCambio(new \DateTime(($request->get('lineaUltimoCambio'))));
					$linea->setLineaVoz($request->get('lineaVoz'));

					
					$historico = new Historico();
					$historico->setLineaHistoricoBlackberry($request->get('lineaBlackberry'));
					$historico->setLineaHistoricoCargo($request->get('lineaCargo'));
					$historico->setLineaHistoricoDatos($request->get('lineaDatos'));
					$historico->setLineaHistoricoDestino($request->get('lineaDestino'));
					$historico->setLineaHistoricoEmpresa($request->get('lineaEmpresa'));
					$historico->setLineaHistoricoGprs($request->get('lineaGprs'));
					$historico->setLineaHistoricoIMEI($request->get('lineaIMEI'));
					$historico->setLineaHistoricoMarca($request->get('lineaMarca'));
					$historico->setLineaHistoricoModelo($request->get('lineaModelo'));
					$historico->setLineaHistoricoNumero($request->get('lineaNumero'));
					$historico->setLineaHistoricoObservaciones($request->get('lineaObservaciones'));
					$historico->setLineaHistoricoPlan($request->get('lineaPlan'));
					$historico->setLineaHistoricoRoaming($request->get('lineaRoaming'));
					$historico->setLineaHistoricoSms($request->get('lineaSms'));
					$historico->setLineaHistoricoUltimoCambio(new \DateTime(($request->get('lineaUltimoCambio'))));
					$historico->setLineaHistoricoVoz($request->get('lineaVoz'));
					$historico->setLineaHistoricoAccion("MODIFICACION");
					$historico->setLineaHistoricoUsuario($login->getUsername());
					$em->persist($historico);
					
					$em->flush();
					$mensaje ="La linea con numero " . $request->get('lineaNumero') . " se ha modificado exitosamente";
				}
				$lineas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas')->findAll();
				$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
				$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				if(isset($mensaje)){
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig', array('destinos' => $destinos, 'lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login, 'mensaje' => $mensaje));
				}else{
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig', array('destinos' => $destinos, 'lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login));
				}
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

    public function listLineasHistoricoAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				$historicos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Historico')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listLineasHistorico.html.twig', array('historicos' => $historicos, 'login' => $login));
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }
     
          
    public function addLineasAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
					
					$linea = new Lineas();
					$linea->setLineaBlackberry($request->get('lineaBlackberry'));
					$linea->setLineaCargo($request->get('lineaCargo'));
					$linea->setLineaDatos($request->get('lineaDatos'));
					$linea->setLineaDestino($request->get('lineaDestino'));
					$linea->setLineaEmpresa($request->get('lineaEmpresa'));
					$linea->setLineaGprs($request->get('lineaGprs'));
					$linea->setLineaIMEI($request->get('lineaIMEI'));
					$linea->setLineaMarca($request->get('lineaMarca'));
					$linea->setLineaModelo($request->get('lineaModelo'));
					$linea->setLineaNumero($request->get('lineaNumero'));
					$linea->setLineaObservaciones($request->get('lineaObservaciones'));
					$linea->setLineaPlan($request->get('lineaPlan'));
					$linea->setLineaRoaming($request->get('lineaRoaming'));
					$linea->setLineaSms($request->get('lineaSms'));
					$linea->setLineaUltimoCambio(new \DateTime(($request->get('lineaUltimoCambio'))));
					$linea->setLineaVoz($request->get('lineaVoz'));
					$em->persist($linea);
					
					$historico = new Historico();
					$historico->setLineaHistoricoBlackberry($request->get('lineaBlackberry'));
					$historico->setLineaHistoricoCargo($request->get('lineaCargo'));
					$historico->setLineaHistoricoDatos($request->get('lineaDatos'));
					$historico->setLineaHistoricoDestino($request->get('lineaDestino'));
					$historico->setLineaHistoricoEmpresa($request->get('lineaEmpresa'));
					$historico->setLineaHistoricoGprs($request->get('lineaGprs'));
					$historico->setLineaHistoricoIMEI($request->get('lineaIMEI'));
					$historico->setLineaHistoricoMarca($request->get('lineaMarca'));
					$historico->setLineaHistoricoModelo($request->get('lineaModelo'));
					$historico->setLineaHistoricoNumero($request->get('lineaNumero'));
					$historico->setLineaHistoricoObservaciones($request->get('lineaObservaciones'));
					$historico->setLineaHistoricoPlan($request->get('lineaPlan'));
					$historico->setLineaHistoricoRoaming($request->get('lineaRoaming'));
					$historico->setLineaHistoricoSms($request->get('lineaSms'));
					$historico->setLineaHistoricoUltimoCambio(new \DateTime(($request->get('lineaUltimoCambio'))));
					$historico->setLineaHistoricoVoz($request->get('lineaVoz'));
					$historico->setLineaHistoricoAccion("ALTA");
					$historico->setLineaHistoricoUsuario($login->getUsername());
					$em->persist($historico);
					
					$em->flush();
					$mensaje ="La linea con numero " . $request->get('lineaNumero') . " se ha agregado al listado de lineas";
				}
				$lineas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas')->findAll();
				$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
				$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				if(isset($mensaje)){
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig', array('destinos' => $destinos, 'mensaje' => $mensaje, 'lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login));
				}else{
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig', array('destinos' => $destinos, 'lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login));
				}
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

    public function deleteLineasAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoLineas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
					$lineaId = $request->get('lineaId');
					$linea = $repoLineas->findOneBy(array('lineaId' => $lineaId));
					$lineaNro = $linea->getLineaNumero();

					$historico = new Historico();
					$historico->setLineaHistoricoBlackberry($linea->getLineaBlackberry());
					$historico->setLineaHistoricoCargo($linea->getLineaCargo());
					$historico->setLineaHistoricoDatos($linea->getLineaDatos());
					$historico->setLineaHistoricoDestino($linea->getLineaDestino());
					$historico->setLineaHistoricoEmpresa($linea->getLineaEmpresa());
					$historico->setLineaHistoricoGprs($linea->getLineaGprs());
					$historico->setLineaHistoricoIMEI($linea->getLineaIMEI());
					$historico->setLineaHistoricoMarca($linea->getLineaMarca());
					$historico->setLineaHistoricoModelo($linea->getLineaModelo());
					$historico->setLineaHistoricoNumero($linea->getLineaNumero());
					$historico->setLineaHistoricoObservaciones($linea->getLineaObservaciones());
					$historico->setLineaHistoricoPlan($linea->getLineaPlan());
					$historico->setLineaHistoricoRoaming($linea->getLineaRoaming());
					$historico->setLineaHistoricoSms($linea->getLineaSms());
					$historico->setLineaHistoricoUltimoCambio(($linea->getLineaUltimoCambio()));
					$historico->setLineaHistoricoVoz($linea->getLineaVoz());
					$historico->setLineaHistoricoAccion("BAJA");
					$historico->setLineaHistoricoUsuario($login->getUsername());
					$em->persist($historico);
					
					 
					$em->remove($linea);
					$em->flush();
					$mensaje = "La linea " . $lineaNro . " fue eliminada con exito";
				}
				$lineas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas')->findAll();
				$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
				$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				if(isset($mensaje)){
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig', array('destinos' => $destinos, 'lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login, 'mensaje' => $mensaje));
				}else{
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig', array('destinos' => $destinos, 'lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login));
				}
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

    public function editLineasAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				
				$lineasRepo = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas');
				$linea = $lineasRepo->findOneBy(array('lineaId' => $request->get('lineaId')));

				
				$fecha = $linea->getLineaUltimoCambio();
				$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
				$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
				$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
				
				return $this->render('LineasTelefonicasPoliciaERBundle:Default:editLinea.html.twig', array('destinos' => $destinos, 'linea' => $linea, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login, 'fecha' => $fecha));
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

    public function buscaLineaNroAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				
				$lineasRepo = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas');
				$nroBuscado = $request->get('lineaNumero');
				
				$lineas = $lineasRepo->createQueryBuilder('l')
				   ->where('l.lineaNumero LIKE :lineaNumero')
				   ->setParameter('lineaNumero', ''.$nroBuscado.'%')
				   ->getQuery()
				   ->getResult();
   
				if(!empty($lineas)){
				
					$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
					$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:resultadoBusqueda.html.twig', array('lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login));
				}else{
					$mensaje = "La busqueda de  " . $request->get('lineaNumero') . " no ha encontrado lineas relacionadas - Revise los datos ingresados";
					$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:welcome.html.twig', array('destinos' => $destinos, 'mensaje' => $mensaje, 'login' => $login));
				}
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

    public function buscaLineaDestinoAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				
				$lineasRepo = $em->getRepository('LineasTelefonicasPoliciaERBundle:Lineas');
				$destinoBuscado = $request->get('lineaDestino');
				
				$lineas = $lineasRepo->createQueryBuilder('l')
				   ->where('l.lineaDestino = :lineaDestino')
				   ->setParameter('lineaDestino', ''.$destinoBuscado.'')
				   ->getQuery()
				   ->getResult();
   
				if(!empty($lineas)){
				
					$empresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
					$opciones = $em->getRepository('LineasTelefonicasPoliciaERBundle:OpcionesSN')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:resultadoBusqueda.html.twig', array('lineas' => $lineas, 'opciones' => $opciones, 'empresas' => $empresas, 'login' => $login));
				}else{
					$mensaje = "La busqueda de  " . $request->get('lineaDestino') . " no ha encontrado lineas relacionadas - Revise los datos ingresados";
					$destinos = $em->getRepository('LineasTelefonicasPoliciaERBundle:Destino')->findAll();
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:welcome.html.twig', array('destinos' => $destinos, 'mensaje' => $mensaje, 'login' => $login));
				}
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

}
