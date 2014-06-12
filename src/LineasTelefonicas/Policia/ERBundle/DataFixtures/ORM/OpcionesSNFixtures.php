<?php
// src/LineasTelefonicas/Policia/ERBundle/DataFixtures/ORM/OpcionesSNFixtures.php

namespace LineasTelefonicas\Policia\ERBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LineasTelefonicas\Policia\ERBundle\Entity\OpcionesSN;

class OpcionesSNFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $opcion1 = new OpcionesSN();
		$opcion1->setOpcionesSNValue("SI");
	
		$opcion2 = new OpcionesSN();
		$opcion2->setOpcionesSNValue("NO");
		

		$manager->persist($opcion1);
		$manager->persist($opcion2);
		$manager->flush();
    }

}