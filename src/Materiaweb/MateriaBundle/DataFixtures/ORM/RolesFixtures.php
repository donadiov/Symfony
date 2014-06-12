<?php
// src/Materiaweb/MateriaBundle.php/DataFixtures/ORM/RolesFixtures.php

namespace Materiaeeb\MateriaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Materiaweb\MateriaBundle\Entity\Roles;

class RolesFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $rol1 = new Roles();
		$rol1->setRolId(1);
		$rol1->setRolName('SUPER_ADMIN');
		
		$rol2 = new Roles();
		$rol2->setRolId(2);
		$rol2->setRolName('TITULAR');
		
		$rol3 = new Roles();
		$rol3->setRolId(3);
		$rol3->setRolName('ADMIN');
		
		$rol4 = new Roles();
		$rol4->setRolId(4);
		$rol4->setRolName('USUARIO');
		
		$rol5 = new Roles();
		$rol5->setRolId(5);
		$rol5->setRolName('VENDEDOR');
		
		$manager->persist($rol1);
		$manager->persist($rol2);
		$manager->persist($rol3);
		$manager->persist($rol4);
		$manager->persist($rol5);

        $manager->flush();
    }

}