<?php

namespace LineasTelefonicas\Policia\ERBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destino
 */
class Destino
{
	private $destinoId;
	private $destinoNombre;

    /**
     * Get destinoId
     *
     * @return integer 
     */
    public function getDestinoId()
    {
        return $this->destinoId;
    }

    /**
     * Set destinoNombre
     *
     * @param string $destinoNombre
     * @return Destino
     */
    public function setDestinoNombre($destinoNombre)
    {
        $this->destinoNombre = $destinoNombre;
    
        return $this;
    }

    /**
     * Get destinoNombre
     *
     * @return string 
     */
    public function getDestinoNombre()
    {
        return $this->destinoNombre;
    }
}
