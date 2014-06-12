<?php

namespace LineasTelefonicas\Policia\ERBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpcionesSN
 */
class OpcionesSN
{
	private $opcionesSNId;
	private $opcionesSNValue;

    /**
     * Get opcionesSNId
     *
     * @return integer 
     */
    public function getOpcionesSNId()
    {
        return $this->opcionesSNId;
    }

    /**
     * Set opcionesSNValue
     *
     * @param string $opcionesSNValue
     * @return OpcionesSN
     */
    public function setOpcionesSNValue($opcionesSNValue)
    {
        $this->opcionesSNValue = $opcionesSNValue;
    
        return $this;
    }

    /**
     * Get opcionesSNValue
     *
     * @return string 
     */
    public function getOpcionesSNValue()
    {
        return $this->opcionesSNValue;
    }
}
