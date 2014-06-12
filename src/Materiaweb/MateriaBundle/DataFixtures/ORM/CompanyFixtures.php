<?php
// src/Materiaweb/MateriaBundle.php/DataFixtures/ORM/CompanyFixtures.php

namespace Materiaeeb\MateriaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Materiaweb\MateriaBundle\Entity\Company;

class CompanyFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Company1 = new Company();
		$Company1->setCompanyActividad('Desarrollo web');
		$Company1->setCompanyApellidoTitular('Donadio');
		$Company1->setCompanyCalle('Echague');
		$Company1->setCompanyCalleNro(605);
		$Company1->setCompanyClave('M4t3R14W3b');
		$Company1->setCompanyCondiibb('Inscripto');
		$Company1->setCompanyCp(3100);
		$Company1->setCompanyCuit('23-34299632-9');
		$Company1->setCompanyLocalidad('Parana');
		$Company1->setCompanyMail('victor@materiasistemas.com.ar');
		$Company1->setCompanyNiibb('23-34299632-9');
		$Company1->setCompanyNombreFantasia('Materia Web');
		$Company1->setCompanyNombreTitular('Victor');
		$Company1->setCompanyObservaciones('Creadores del proyecto');
		$Company1->setCompanyPais('Argentina');
		$Company1->setCompanyPasswordTitular(sha1('GU716+'));
		$Company1->setCompanyPerFiscal('Monotributista');
		$Company1->setCompanyProvincia('Entre rios');
		$Company1->setCompanyRazonSocial('Victor Damian Donadio');
		$Company1->setCompanyUsuarioTitular('SUPERVISOR');
		$Company1->setCompanyActive(1);
		
		$Company2 = new Company();
		$Company2->setCompanyActividad('Venta de insumos agropecuarios');
		$Company2->setCompanyApellidoTitular('Dellaschiava');
		$Company2->setCompanyCalle('Almafuerte');
		$Company2->setCompanyCalleNro(430);
		$Company2->setCompanyClave('4gR0p4lMa');
		$Company2->setCompanyCondiibb('Inscripto');
		$Company2->setCompanyCp(3100);
		$Company2->setCompanyCuit('20-13508760-3');
		$Company2->setCompanyLocalidad('Parana');
		$Company2->setCompanyMail('info@agropalmafuerte.com.ar');
		$Company2->setCompanyNiibb('20-13508760-3');
		$Company2->setCompanyNombreFantasia('Agropecuara Almafuerte');
		$Company2->setCompanyNombreTitular('Daniel');
		$Company2->setCompanyObservaciones('');
		$Company2->setCompanyPais('Argentina');
		$Company2->setCompanyPasswordTitular(sha1('agropalma'));
		$Company2->setCompanyPerFiscal('Monotributista');
		$Company2->setCompanyProvincia('Entre rios');
		$Company2->setCompanyRazonSocial('Daniel Delea Schiava');
		$Company2->setCompanyUsuarioTitular('vdonadio');
		$Company2->setCompanyActive(1);
		
		
		$manager->persist($Company1);
		$manager->persist($Company2);


        $manager->flush();
    }

}