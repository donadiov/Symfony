<?php
// src/LineasTelefonicas/Policia/ERBundle/DataFixtures/ORM/RolFixtures.php

namespace LineasTelefonicas\Policia\ERBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LineasTelefonicas\Policia\ERBundle\Entity\Rol;

class RolFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $rol1 = new Rol();
		$rol1->setRolNombre("SUPER_ADMIN");
	
		$rol2 = new Rol();
		$rol2->setRolNombre("ADMIN");
		
		$rol3 = new Rol();
		$rol3->setRolNombre("USUARIO");
		
		
		$manager->persist($rol1);
		$manager->persist($rol2);
		$manager->persist($rol3);
		$manager->flush();
    }

}