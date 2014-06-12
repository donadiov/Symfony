<?php

 namespace Materia\SqlBundle\Model;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Materia\SqlBundle\Entity\Users;
use Materia\SqlBundle\Modals\Login;

class SesionModel
 {
protected $conexion;

public function __construct($dbname,$dbuser,$dbpass,$dbhost)
  {
      $mvc_bd_conexion = mysql_connect($dbhost, $dbuser, $dbpass);

      if (!$mvc_bd_conexion) {
          die('No ha sido posible realizar la conexión con la base de datos: '
          . mysql_error());
      }
      mysql_select_db($dbname, $mvc_bd_conexion);

      mysql_set_charset('utf8');

      $this->conexion = $mvc_bd_conexion;
  }

public function bd_conexion()
     {

     }

#FUNCINOES

#CHEQUEO DE LOGIN
public function usuarioLogin($username, $password, $companyId)
     {
         $sql = "select * from users where userName = '$username' and password = '$password' and userCompanyId = '$companyId'" ;
         $result = mysql_query($sql, $this->conexion);
         $usuario = mysql_fetch_array($result);
		 
		 if ($usuario){
		 $user = new Users();
		 $user->setUserid($usuario['userid']);
		 $user->setFirstName($usuario['firstName']);
		 $user->setLastName($usuario['lastName']);
		 $user->setUserCompanyId($usuario['userCompanyId']);
		 $user->setUserMail($usuario['userMail']);
		 $user->setPassword($usuario['password']);
		 $user->setUserName($usuario['userName']);
		 $user->setUserRol($usuario['userRol']);
		 
         return $user;
		 
		 }else{
		 return FALSE;	
		 }
     }

#GENERO OBJETO LOGIN
public function generaLogin($userId)
     {
         $sql = "select * from users where userid = '$userId'";
         $result = mysql_query($sql, $this->conexion);
         $usuario = mysql_fetch_array($result);
		 
		 if ($usuario){
			$login = new Login();
			$login->setLoginCompanyId($usuario['userCompanyId']);
			$login->setLoginUserId($usuario['userid']);
			$login->setUsername($usuario['userName']);
			$login->setPassword($usuario['password']);
			$login->setRol($usuario['userRol']);
			
         return $login;
		 
		 }else{
		 return FALSE;	
		 }
     }

#CHEQUEO ROL SUPER_ADMIN
public function checkRol($login)
     {
        $temp = new Login($login);
		
		$rol = $login->getRol(); 	
		
        return $rol;
		 
		 
     }	 

}