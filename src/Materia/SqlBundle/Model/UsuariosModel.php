<?php

namespace Materia\SqlBundle\Model;

use Materia\SqlBundle\Entity\Users;

class UsuariosModel
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

#DEVULEVO TODOS LOS ROLES
public function dameRoles()
     {
		 $sql = "select * from roles";
         $result = mysql_query($sql, $this->conexion);
         $roles = array();
         while ($row = mysql_fetch_assoc($result))
         {
             $roles[] = $row;
         }
         return $roles;
     }

#DEVUELVO TODOS LOS USUARIOS
public function dameUsuarios()
     {
         $sql = "select * from users";
         $result = mysql_query($sql, $this->conexion);
         $users = array();
         while ($row = mysql_fetch_assoc($result))
         {
             $users[] = $row;
         }
         return $users;
     }

#DEVUELVO TODOS LOS USUARIOS DE UNA EMPRESA
public function dameUsuariosDeUnaEmpresa($companyId)
     {
         $sql = "select * from users where userCompanyId = $companyId";
         $result = mysql_query($sql, $this->conexion);
         $users = array();
         while ($row = mysql_fetch_assoc($result))
         {
             $users[] = $row;
         }
         return $users;
     }

#SELECCIONO UN USUARIO SEGUN ID
public function dameUnUsuario($userid)
     {
         $sql = "SELECT * FROM USERS WHERE userid = '$userid'";
         $result = mysql_query($sql, $this->conexion);
         $user = mysql_fetch_assoc($result);
         return $user;
     }

#SELECCIONO ULTIMO USUARIO SEGUN MAX ID
public function dameUltimoUsuario()
     {
         $sql = "SELECT * FROM users WHERE userid=(SELECT max(userid) FROM users)";
         $result = mysql_query($sql, $this->conexion);
         $user = mysql_fetch_assoc($result);
         return $user;
     }

#INSERTO NUEVO USUARIO
public function newUser($request, $companyId)
     {
			$PasswordTitular = sha1($request->get('companyPasswordTitular'));
			if($request->get('companyUsuarioTitular')){
				$UsuarioTitular = $request->get('companyUsuarioTitular');
			}
			$NombreTitular = $request->get('companyNombretitular');
			$ApellidoTitular = $request->get('companyApellidotitular');
			$Mail = $request->get('companyMail');
			
			if(!$request->get('userRol')){
				$rol = "TITULAR";
			}else{
				$rol = $request->get('userRol');
			}
			$sql = "INSERT INTO USERS (		 
				password, userName, firstName, lastName, userCompanyId, userMail, userRol
				) values (
			'".$PasswordTitular."','".$UsuarioTitular."','".$NombreTitular."','".$ApellidoTitular."',
			'".$companyId."',
			'".$Mail."','".$rol."'
			)";
				
			mysql_query($sql, $this->conexion);
			
			$user = new Users();
			$user->setFirstName($NombreTitular);
			$user->setLastName($ApellidoTitular);
			$user->setPassword($PasswordTitular);
			$user->setUserCompanyId($companyId);
			$user->setUserMail($Mail);
			$user->setUserName($UsuarioTitular);
			$user->setUserRol($rol);
			
			$sql = "select MAX(userId) 'max' from users";
         	$result = mysql_query($sql, $this->conexion);
        	while ($row = mysql_fetch_assoc($result))
	         {
	             $userId = $row['max'];
	         }
			 
        return $userId;
     }

#UPDATE USUARIO
public function updateUser($request, $userid)
     {
     	$user =$this->dameUnUsuario($userid);
		$companyId = $user['userCompanyId'];
		
		$rol = $request->get('userRol');
		$UsuarioTitular = $request->get('userName');
		$NombreTitular = $request->get('firstName');
		$ApellidoTitular = $request->get('lastName');
		$PasswordTitular = sha1($request->get('password'));
		$Mail = $request->get('userMail');
			if (!$PasswordTitular){
				$sql = "UPDATE USERS SET userName = '".$UsuarioTitular."', firstName='".$NombreTitular."', lastname='".$ApellidoTitular."', userMail='".$Mail."' 
				WHERE userId = $userid";
				mysql_query($sql, $this->conexion);
				
				if ($rol == "TITULAR"){
					$sql2 = "UPDATE COMPANY SET companyUsuarioTitular = '".$UsuarioTitular."', companyNombreTitular='".$NombreTitular."', companyApellidoTitular='".$ApellidoTitular."', companyMail='".$Mail."'
					WHERE companyId = $companyId";
					mysql_query($sql2, $this->conexion);
				}
			}else{
				$sql = "UPDATE USERS SET password='".$PasswordTitular."', userName ='".$UsuarioTitular."', firstName='".$NombreTitular."', lastname='".$ApellidoTitular."', userMail='".$Mail."'
				WHERE userId = $userid";
				mysql_query($sql, $this->conexion);
				
				if ($rol == "TITULAR"){
					$sql2 = "UPDATE COMPANY SET companyUsuarioTitular = '".$UsuarioTitular."', companyNombreTitular='".$NombreTitular."', companyApellidoTitular='".$ApellidoTitular."', companyMail='".$Mail."', companyPasswordTitular ='".$PasswordTitular."' 
					WHERE companyId = $companyId";
					mysql_query($sql2, $this->conexion);
				}
			}
        return $rol;
     }

#ELIMINA UN USUARIO
public function deleteUser($userid)
     {
		$sql = "DELETE FROM USERS 
				WHERE userid = $userid";
				mysql_query($sql, $this->conexion);
				
        return FALSE;
     }
}