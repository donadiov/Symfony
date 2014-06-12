<?php

namespace LineasTelefonicas\Policia\ERBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 */
class Empresas
{
	private $empresaId;
	private $empresaNombre;

    /**
     * Get empresaId
     *
     * @return integer 
     */
    public function getEmpresaId()
    {
        return $this->empresaId;
    }

    /**
     * Set empresaNombre
     *
     * @param string $empresaNombre
     * @return Empresas
     */
    public function setEmpresaNombre($empresaNombre)
    {
        $this->empresaNombre = $empresaNombre;
    
        return $this;
    }

    /**
     * Get empresaNombre
     *
     * @return string 
     */
    public function getEmpresaNombre()
    {
        return $this->empresaNombre;
    }
}
