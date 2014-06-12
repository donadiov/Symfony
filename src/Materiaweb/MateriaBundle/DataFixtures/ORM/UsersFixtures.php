<?php
// src/Materiaweb/MateriaBundle.php/DataFixtures/ORM/UsersFixtures.php

namespace Materiaeeb\MateriaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Materiaweb\MateriaBundle\Entity\Users;

class UsersFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new Users();
		$user1->setUserCompanyId(1);
		$user1->setFirstName('Supervisor');
		$user1->setLastName('Sistemas');
		$user1->setUserMail('victor@materiasistemas.com.ar');
		$user1->setUserName('supervisor');
		$user1->setPassword(sha1('GU716'));
		$user1->setUserRol('SUPER_ADMIN');

		$user2 = new Users();
		$user2->setUserCompanyId(2);
		$user2->setFirstName('Victor');
		$user2->setLastName('Donadio');
		$user2->setUserMail('donadiovictor@gmail.com');
		$user2->setUserName('vdonadio');
		$user2->setPassword(sha1('shadshad'));
		$user2->setUserRol('TITULAR');
		
		$user3 = new Users();
		$user3->setUserCompanyId(2);
		$user3->setFirstName('Luis');
		$user3->setLastName('Donadio');
		$user3->setUserMail('victor@materiasistemas.com.ar');
		$user3->setUserName('ldonadio');
		$user3->setPassword(sha1('ldv605ms'));
		$user3->setUserRol('ADMIN');

		$user4 = new Users();
		$user4->setUserCompanyId(2);
		$user4->setFirstName('Daniela');
		$user4->setLastName('Donadio');
		$user4->setUserMail('donadiodanielav@gmail.com');
		$user4->setUserName('ddonadio');
		$user4->setPassword(sha1('chiquis'));
		$user4->setUserRol('USUARIO');

		$user5 = new Users();
		$user5->setUserCompanyId(2);
		$user5->setFirstName('Daniel');
		$user5->setLastName('Della Schiava');
		$user5->setUserMail('info@agropalmafuerte.com.ar');
		$user5->setUserName('ddellaschiava');
		$user5->setPassword(sha1('agropalma'));
		$user5->setUserRol('ADMIN');

		$manager->persist($user1);
		$manager->persist($user2);
		$manager->persist($user3);
		$manager->persist($user4);
		$manager->persist($user5);
        $manager->flush();
    }

}