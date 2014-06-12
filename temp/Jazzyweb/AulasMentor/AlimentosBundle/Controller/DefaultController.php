<?php

 namespace Jazzyweb\AulasMentor\AlimentosBundle\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Jazzyweb\AulasMentor\AlimentosBundle\Model\Model;
 use Jazzyweb\AulasMentor\AlimentosBundle\Config\Config;

 class DefaultController extends Controller
 {

     public function indexAction()
     {
         $params = array(
         'mensaje' => 'Bienvenido al curso de Symfony2',
         'fecha' => date('d-m-Y'),
         );

         return
          $this->render('JazzywebAulasMentorAlimentosBundle:Default:index.html.twig',
          $params);
     }

     public function listarAction()
     {
         $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

         $params = array(
         'alimentos' => $m->dameAlimentos(),
         );

         return
          $this->render('JazzywebAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig',
          $params);

     }

     public function insertarAction()
     {

         $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
          Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		
		$lastId = $m->dameLastId();
		
		$params = array(
         'id' => $lastId,
         'nombre' => '', 'energia' => '', 'proteina' => '', 'hc' => '', 'fibra' => '',
         'grasa' => '', 'color' => '', 'peso' => '', 'familia' => '', 'foto' => '',
         );
		 
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {


		$lastId = $m->dameLastId() + 1;
		
		$params = array(
         'id' => $lastId,
         'nombre' => '', 'energia' => '', 'proteina' => '', 'hc' => '', 'fibra' => '',
         'grasa' => '', 'color' => '', 'peso' => '', 'familia' => '', 'foto' => '',
         );


         // comprobar campos formulario
         if ($m->insertarAlimento(
          $_POST['nombre'], $_POST['energia'], $_POST['proteina'], $_POST['hc'], $_POST['fibra'], $_POST['grasa'], $_POST['color'], $_POST['peso'], 
          $_POST['familia'],  $_POST['foto'])) { $params['mensaje'] = 'Alimento insertado correctamente';
         } else {
             $params = array(
             'nombre' => $_POST['nombre'], 'energia' => $_POST['energia'], 'proteina' => $_POST['proteina'], 'hc' => $_POST['hc'],
             'fibra' => $_POST['fibra'], 'grasa' => $_POST['grasa'], 'color' => $_POST['color'], 'peso' => $_POST['peso'], 'familia' => $_POST['familia'],
			 'foto' => $_POST['foto'],); $params['mensaje'] = 'No se ha podido insertar el alimento. Revisa el formulario';
         }}

         return
          $this->render('JazzywebAulasMentorAlimentosBundle:Default:formInsertar.html.twig',
          $params);

     }

     public function buscarPorNombreAction()
     {
         $params = array(
         'nombre' => '',
         'resultado' => array(),
         );

         $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $params['nombre'] = $_POST['nombre'];
         $params['resultado'] = $m->buscarAlimentosPorNombre($_POST['nombre']);
         }

         return
          $this->render('JazzywebAulasMentorAlimentosBundle:Default:buscarPorNombre.html.twig',
          $params);

     }

     public function verAction($id)
		{
        $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        $alimento = $m->dameAlimento($id);

        if(!$alimento)
        {
          throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
        }

        $params = $alimento;

        return $this->render('JazzywebAulasMentorAlimentosBundle:Default:verAlimento.html.twig', $params);

 		}
		



		public function modificarAction($id)
		{
        
		$m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        $alimento = $m->dameAlimento($id);

        if(!$alimento)
        {
          throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
        }

        $params = $alimento;

		  
        return $this->render('JazzywebAulasMentorAlimentosBundle:Default:modificarAlimentos.html.twig', $params);

 		}


		public function modificadoAction()
     {
         $params = array(
         'id' => '',
         'nombre' => '',
         'energia' => '',
         'proteina' => '',
         'hidratocarbono' => '',
         'fibra' => '',
         'grasatotal' => '',
         'color' => '',
         'peso' => '',
         'familia' => '',
         'foto' => '',
         );

         $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
          Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         // comprobar campos formulario
         if ($m->modificadoAlimento(
           $_POST['id'], 
           $_POST['nombre'], 
           $_POST['energia'],
           $_POST['proteina'],
           $_POST['hidratocarbono'],
           $_POST['fibra'], 
           $_POST['grasatotal'],
		   $_POST['color'],
		   $_POST['peso'],
		   $_POST['familia'],
		   $_POST['foto'])) {
             $params = array(
             'id' => $_POST['id'],
             'nombre' => $_POST['nombre'],
             'energia' => $_POST['energia'],
             'proteina' => $_POST['proteina'],
             'hidratocarbono' => $_POST['hidratocarbono'],
             'fibra' => $_POST['fibra'],
             'grasatotal' => $_POST['grasatotal'],
             'color' => $_POST['color'],
             'peso' => $_POST['peso'],
             'familia' => $_POST['familia'],
             'foto' => $_POST['foto'],
             );
             $params['mensaje'] = 'Alimento MODIFICADO correctamente';
         } else {
             $params = array(
             'id' => $_POST['id'],
             'nombre' => $_POST['nombre'],
             'energia' => $_POST['energia'],
             'proteina' => $_POST['proteina'],
             'hidratocarbono' => $_POST['hidratocarbono'],
             'fibra' => $_POST['fibra'],
             'grasatotal' => $_POST['grasatotal'],
             'color' => $_POST['color'],
             'peso' => $_POST['peso'],
             'familia' => $_POST['familia'],
             'foto' => $_POST['foto'],
             );
             $params['mensaje'] = 'No se ha podido MODIFICAR el alimento. Revisa el formulario';
         }
         }

         return
          $this->render('JazzywebAulasMentorAlimentosBundle:Default:modificarAlimentos.html.twig',
          $params);

     }


		public function eliminarAction($id)
		{
        
		$m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

        $alimento = $m->dameAlimento($id);

        if(!$alimento)
        {
          throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
        }

        $params = $alimento;

		  
        return $this->render('JazzywebAulasMentorAlimentosBundle:Default:eliminarAlimentos.html.twig', $params);

 		}
	

	public function eliminaAction()
	     {
	         $params = array(
	         'mensaje' => '',
	         'alimentos' => '',
	         );
	
	         $m = new Model(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	          Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
	
	         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	         // comprobar campos formulario
	         if ($m->eliminaAlimento($_POST['id'])) {
	             $params['mensaje'] = 'Alimento Eliminado correctamente';
				 $params['alimentos'] = $m->dameAlimentos();
				 
	         } else {
	             $params['mensaje'] = 'No se ha podido ELIMINAR el alimento.';
				 $params['alimentos'] = $m->dameAlimentos();
	         }}
	
	         return
	          $this->render('JazzywebAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig',
	          $params);
	
	     }



 }