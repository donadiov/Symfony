<?php

namespace Materia\Web\MateriawebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MateriaWebMateriawebBundle:Default:index.html.twig', array('name' => $name));
    }
}
