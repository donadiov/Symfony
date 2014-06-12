<?php
// src/LineasTelefonicas/Policia/ERBundle/DataFixtures/ORM/EmpresasFixtures.php

namespace LineasTelefonicas\Policia\ERBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LineasTelefonicas\Policia\ERBundle\Entity\Empresas;

class EmpresasFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $empresa1 = new Empresas();
		$empresa1->setEmpresaNombre("Personal");
	
		$empresa2 = new Empresas();
		$empresa2->setEmpresaNombre("Claro");
		
		$empresa3 = new Empresas();
		$empresa3->setEmpresaNombre("Movistar");
		
		$empresa4 = new Empresas();
		$empresa4->setEmpresaNombre("Nextel");
		
		
		$manager->persist($empresa1);
		$manager->persist($empresa2);
		$manager->persist($empresa3);
		$manager->persist($empresa4);
        $manager->flush();
    }

}