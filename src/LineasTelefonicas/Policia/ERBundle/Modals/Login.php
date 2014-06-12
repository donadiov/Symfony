<?php
namespace LineasTelefonicas\Policia\ERBundle\Modals;


class Login {
	public $loginUserId;	
    public $loginNombre;
	public $loginApellido;
    public $username;
    public $password;
	public $rol;
	
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

    public function getLoginNombre() {
        return $this->loginNombre;
    }

    public function setLoginNombre($loginNombre) {
        $this->loginNombre = $loginNombre;
    }
	
	public function getLoginApellido() {
        return $this->loginApellido;
    }

    public function setLoginApellido($loginApellido) {
        $this->loginApellido = $loginApellido;
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

