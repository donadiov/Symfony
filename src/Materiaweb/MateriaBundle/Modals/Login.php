<?php
namespace Materiaweb\MateriaBundle\Modals;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Manoj
 */
class Login {
    private $loginCompanyId;
	private $loginUserId;	
    private $username;
    private $password;
	private $rol;
	
    public function getLoginCompanyId() {
        return $this->loginCompanyId;
    }

    public function setLoginCompanyId($loginCompanyId) {
        $this->loginCompanyId = $loginCompanyId;
    }

    public function getLoginUserId() {
        return $this->loginUserId;
    }

    public function setLoginUserId($loginUserId) {
        $this->loginUserId = $loginUserId;
    }
	
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
	
	public function getRol() {
        return $this->rol;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }
}

?>
