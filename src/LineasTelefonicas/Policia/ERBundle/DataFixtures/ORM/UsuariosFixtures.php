<?php
// src/LineasTelefonicas/Policia/ERBundle/DataFixtures/ORM/UsuariosFixtures.php

namespace LineasTelefonicas\Policia\ERBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LineasTelefonicas\Policia\ERBundle\Entity\Usuarios;

class UsuariosFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $usuario1 = new Usuarios();
		$usuario1->setUsuarioUsername("wolf");
		$usuario1->setUsuarioNombre("Baltazar");
		$usuario1->setUsuarioApellido("Wolf");
		$usuario1->setUsuarioMail("all_main@hotmail.com");
		$usuario1->setUsuarioRol("SUPER_ADMIN");
		$usuario1->setUsuarioPass(sha1("wolf2014"));
		
		$usuario2 = new Usuarios();
		$usuario2->setUsuarioUsername("admin");
		$usuario2->setUsuarioNombre("Admin");
		$usuario2->setUsuarioApellido("Usuario");
		$usuario2->setUsuarioMail("all_main@hotmail.com");
		$usuario2->setUsuarioRol("ADMIN");
		$usuario2->setUsuarioPass(sha1("admin"));
		
		$usuario3 = new Usuarios();
		$usuario3->setUsuarioUsername("usuario");
		$usuario3->setUsuarioNombre("General");
		$usuario3->setUsuarioApellido("Usuario");
		$usuario3->setUsuarioMail("all_main@hotmail.com");
		$usuario3->setUsuarioRol("USUARIO");
		$usuario3->setUsuarioPass(sha1("usuario"));
	
		$manager->persist($usuario1);
		$manager->persist($usuario2);
		$manager->persist($usuario3);
        $manager->flush();
    }

}