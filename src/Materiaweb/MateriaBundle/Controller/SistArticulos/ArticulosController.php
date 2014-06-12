<?php

namespace Materiaweb\MateriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Materiaweb\MateriaBundle\Entity\Users;
use Materiaweb\MateriaBundle\Entity\Company;
use Materiaweb\MateriaBundle\Entity\Roles;
use Materiaweb\MateriaBundle\Modals\Login;
use Symfony\Component\HttpFoundation\Session\Session;

class ArticulosController extends Controller {

    public function listArticulosAction(Request $request) {
		$session = $this->getRequest()->getSession();
		if ($session->has('login')) {
			$login = $session->get('login');
			
			$em = $this->getDoctrine()->getManager();
			$articulos = $em->getRepository('MateriawebMateriaBundle:Articulos')->findAll();
			
			return $this->render('MateriawebMateriaBundle:Default:login.html.twig', array('articulos' => $articulos));
		}
	}
}
