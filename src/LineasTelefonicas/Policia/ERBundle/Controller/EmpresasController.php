<?php

namespace LineasTelefonicas\Policia\ERBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use LineasTelefonicas\Policia\ERBundle\Modals\Login;
use LineasTelefonicas\Policia\ERBundle\Entity\Empresas;
use LineasTelefonicas\Policia\ERBundle\Entity\Rol;



class EmpresasController extends Controller
{
    public function listCompanyAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoEmpresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas');
		if ($session->has('login')) {
            $login = $session->get('login');
			if ($login->getRol() == 'SUPER_ADMIN') {
				if ($request->getMethod() == 'POST') {
						
					$empresaNombre = $request->get('empresaNombre');	
					$empresa = new Empresas();
					$empresa->setEmpresaNombre($request->get('empresaNombre'));
					$em->persist($empresa);
					$em->flush();
					$mensaje= "La empresa " . $empresaNombre . " ha sido creada";
				}
				$empresas  = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
				if(isset($mensaje)){
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listCompany.html.twig', array('empresas' => $empresas, 'login' => $login, 'mensaje' => $mensaje));
				}else{
					return $this->render('LineasTelefonicasPoliciaERBundle:Default:listCompany.html.twig', array('empresas' => $empresas, 'login' => $login));
				}
			}
		}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }

    public function deleteCompanyAction(Request $request)
    {
   		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager('lineastelpolicia');
		$repoEmpresas = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas');
			if ($request->getMethod() == 'POST') {
				
				$empresasId = $request->get('empresaId');
				$empresa = $repoEmpresas->findOneBy(array('empresaId' => $empresasId));
				$empresaNombre = $empresa->getEmpresaNombre();
				$em->remove($empresa);
				$em->flush();

				$empresas  = $em->getRepository('LineasTelefonicasPoliciaERBundle:Empresas')->findAll();
				$mensaje = "La empresa " . $empresaNombre . " ha sido eliminada";
				$login = $session->get('login');
				return $this->render('LineasTelefonicasPoliciaERBundle:Default:listCompany.html.twig', array('empresas' => $empresas, 'login' => $login, 'mensaje' => $mensaje));
			}
			return $this->redirect($this->generateUrl('lineas_telefonicas_policia_er_homepage'));
     }
	
}
