<?php

namespace LineasTelefonicas\Policia\ERBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 */
class Usuarios
{
	private $usuarioId;
    private $usuarioUsername;
    private $usuarioNombre;
	private $usuarioApellido;
    private $usuarioPass;
	private $usuarioMail;    
	private $usuarioRol;


    /**
     * Get usuarioId
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set usuarioUsername
     *
     * @param string $usuarioUsername
     * @return Usuarios
     */
    public function setUsuarioUsername($usuarioUsername)
    {
        $this->usuarioUsername = $usuarioUsername;
    
        return $this;
    }

    /**
     * Get usuarioUsername
     *
     * @return string 
     */
    public function getUsuarioUsername()
    {
        return $this->usuarioUsername;
    }

    /**
     * Set usuarioNombre
     *
     * @param string $usuarioNombre
     * @return Usuarios
     */
    public function setUsuarioNombre($usuarioNombre)
    {
        $this->usuarioNombre = $usuarioNombre;
    
        return $this;
    }

    /**
     * Get usuarioNombre
     *
     * @return string 
     */
    public function getUsuarioNombre()
    {
        return $this->usuarioNombre;
    }

    /**
     * Set usuarioApellido
     *
     * @param string $usuarioApellido
     * @return Usuarios
     */
    public function setUsuarioApellido($usuarioApellido)
    {
        $this->usuarioApellido = $usuarioApellido;
    
        return $this;
    }

    /**
     * Get usuarioApellido
     *
     * @return string 
     */
    public function getUsuarioApellido()
    {
        return $this->usuarioApellido;
    }

    /**
     * Set usuarioPass
     *
     * @param string $usuarioPass
     * @return Usuarios
     */
    public function setUsuarioPass($usuarioPass)
    {
        $this->usuarioPass = $usuarioPass;
    
        return $this;
    }

    /**
     * Get usuarioPass
     *
     * @return string 
     */
    public function getUsuarioPass()
    {
        return $this->usuarioPass;
    }

    /**
     * Set usuarioMail
     *
     * @param string $usuarioMail
     * @return Usuarios
     */
    public function setUsuarioMail($usuarioMail)
    {
        $this->usuarioMail = $usuarioMail;
    
        return $this;
    }

    /**
     * Get usuarioMail
     *
     * @return string 
     */
    public function getUsuarioMail()
    {
        return $this->usuarioMail;
    }

    /**
     * Set usuarioRol
     *
     * @param string $usuarioRol
     * @return Usuarios
     */
    public function setUsuarioRol($usuarioRol)
    {
        $this->usuarioRol = $usuarioRol;
    
        return $this;
    }

    /**
     * Get usuarioRol
     *
     * @return string 
     */
    public function getUsuarioRol()
    {
        return $this->usuarioRol;
    }
}
