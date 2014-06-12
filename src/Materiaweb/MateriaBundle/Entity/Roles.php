<?php

namespace Materiaweb\MateriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 */
class Roles
{
	private $rolId;
	private $rolName;


    /**
     * Set rolId
     *
     * @param string $rolId
     * @return Roles
     */
    public function setRolId($rolId)
    {
        $this->rolId = $rolId;
    
        return $this;
    }

    /**
     * Get rolId
     *
     * @return integer 
     */
    public function getRolId()
    {
        return $this->rolId;
    }

    /**
     * Set rolName
     *
     * @param string $rolName
     * @return Roles
     */
    public function setRolName($rolName)
    {
        $this->rolName = $rolName;
    
        return $this;
    }

    /**
     * Get rolName
     *
     * @return string 
     */
    public function getRolName()
    {
        return $this->rolName;
    }
}
