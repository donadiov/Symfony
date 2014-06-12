<?php

namespace Acme\NewStoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Acme\NewStoreBundle\Entity\Product;

class NewStoreController extends Controller
{
    /**
     * @Route("/store")
     * @Template()
     */
//   public function indexAction()
//    {
//        //return array('storename' => $name);
//		//$response = $this->forward('MVCCrudBundle:NewStore:websiteDown');
//		$response = $this->forward('AcmeNewStoreBundle:NewStore:websiteDown');
//       return $response;
//    }
	


    /**
     * @Route("/store/{categoria}/{producto}", defaults = {"categoria" = "Libros", "producto" = "Libro de JavaScript"})
     * @Template()
     */
    public function indexAction($categoria, $producto)
    {
        if ($categoria !== 'Libros' && $producto == 'Libro de JavaScript'){
        	$producto = 'Libros de categoria ' . $categoria; 
        }
		return array('categoria' => $categoria, 'producto' => $producto);
		
    }

	
	 /**
     * @Route("/shop/{categoria}/{producto}", defaults = {"categoria" = "Libros", "producto" = "Libro de JavaScript"})
     * @Template()
     */
    public function shopAction($categoria, $producto)
    {
        if ($categoria !== 'Libros' && $producto == 'Libro de JavaScript'){
        	$producto = 'Libros de categoria ' . $categoria; 
        }
		return array('categoria' => $categoria, 'producto' => $producto);
		
    }
	
	
	 /**
     * @Route("/store/pruebaRedirect")
     * @Template()
     */
    public function storeNumberAction()
    {
        //return array('name' => $name);
        return $this->redirect($this->generateUrl('mvc_crud_homepage'), 301);
	}
	
	
	 
	 
	 /**
     * @Route("/badrequest", name="_badrequest")
     * @Template()
     */
    public function badrequestAction()
    {
        // busca devolver una variable de algun lado que no existe
        $product = false;
		if (!$product){
			throw $this->createNotFoundException('El producto no existe');
		}
	}
	 
	 //Sirve para hacer un foward-redireccionar
	 //no se necesitan annotations / se vale del nombre del controlador
	 //$response = $this->forward(AcmeNewStoreBundle);
     //return $response;
    public function websiteDownAction()
    {
        return new Response('<h1>Lo sentimos, el sitio esta caido temporalmente</h1>');
	}
}
