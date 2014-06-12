<?php

namespace Materia\SqlBundle\Model;

use Materia\SqlBundle\Entity\Company;


class EmpresasModel
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

#DEVUELVO TODAS LAS EMPRESAS
public function dameEmpresas()
     {
         $sql = "select * from company";
         $result = mysql_query($sql, $this->conexion);
         $companies = array();
         while ($row = mysql_fetch_assoc($result))
         {
             $companies[] = $row;
         }
         return $companies;
     }

#SELECCIONO UNA EMPRESA SEGUN ID
public function dameUnaEmpresas($companyId)
     {
         $sql = "SELECT * FROM COMPANY WHERE companyId = '$companyId'";
         $result = mysql_query($sql, $this->conexion);
         $company = mysql_fetch_assoc($result);
         return $company;
     }

#CHEQUEO SI LA EMPRESA ESTA ACTIVA
public function empresaActiva($companyId)
     {
         $sql = "select * from company where companyId = '$companyId' limit 1";
         $result = mysql_query($sql, $this->conexion);
         $isActive = mysql_fetch_assoc($result);
         return $isActive;
     }

#INSERTO NUEVA EMPRESA
public function newCompany($request)
     {
			$Clave = $request->get('companyClave');
			$RazonSocial = $request->get('companyRazonSocial');
			$NombreFantasia = $request->get('companyNombreFantasia');
			$Mail = $request->get('userMail');
			$Calle = $request->get('companyCalle');
			$CalleNro = $request->get('companyCalleNro');
			$Cp = $request->get('companyCp');
			$Localidad = $request->get('companyLocalidad');
			$Provincia = $request->get('companyProvincia');
			$Pais = $request->get('companyPais');
			$Cuit = $request->get('companyCuit');
			$PerFiscal = $request->get('companyPerFiscal');
			$Niibb = $request->get('companyNiibb');
			$Condiibb = $request->get('companyCondiibb');
			$Actividad = $request->get('companyActividad');
			$Observaciones = $request->get('companyObservaciones');
			$NombreTitular = $request->get('firstName');
			$ApellidoTitular = $request->get('lastName');
			$UsuarioTitular = $request->get('userName');
			$PasswordTitular = sha1($request->get('password'));
			$Active = 0;
			$companyHost = "localhost";
			$CompanyBase = $request->get('companyClave');;
			$CompanyBaseUser = $request->get('companyUsuarioTitular');
			$CompanyBaseClave = "efldvl2102";
			
         
			$sql = "INSERT INTO COMPANY (		 
				companyClave, companyRazonSocial, companyNombrefantasia, companyMail, companyCalle, companyCalleNro, companyCp, companyLocalidad, companyProvincia, companyPais, companyCuit, companyPerFiscal, companyNiibb, companyCondiibb, companyActividad, companyObservaciones, companyNombreTitular, companyApellidoTitular, companyUsuarioTitular, companyPasswordTitular, companyActive, companyHost, CompanyBase, CompanyBaseUser, CompanyBaseClave
				) values (
			'".$Clave."', '".$RazonSocial."','".$NombreFantasia."','".$Mail."', '".$Calle."','".$CalleNro."','".$Cp."','".$Localidad."','".$Provincia."','".$Pais."','".$Cuit."','".$PerFiscal."','".$Niibb."','".$Condiibb."','".$Actividad."','".$Observaciones."','".$NombreTitular."','".$ApellidoTitular."','".$UsuarioTitular."', '".$PasswordTitular."','".$Active."','".$companyHost."','".$CompanyBase."','".$CompanyBaseUser ."','".$CompanyBaseClave ."')";
			mysql_query($sql, $this->conexion);
			
			$sql = "select MAX(companyId) 'max' from company";
         	$result = mysql_query($sql, $this->conexion);
        	while ($row = mysql_fetch_assoc($result))
	         {
	             $companyId = $row['max'];
	         }
			
			$creaDB = "CREATE DATABASE $Clave";
			mysql_query($creaDB, $this->conexion);
			
			$company = new Company();
			$company->setCompanyId($companyId);
			$company->setCompanyActive($Active);
			$company->setCompanyActividad($Actividad);
			$company->setCompanyApellidoTitular($ApellidoTitular);
			$company->setCompanyCalle($Calle);
			$company->setCompanyCalleNro($CalleNro);
			$company->setCompanyClave($Clave);
			$company->setCompanyCondiibb($Condiibb);
			$company->setCompanyCp($Cp);
			$company->setCompanyCuit($Cuit);
			$company->setCompanyLocalidad($Localidad);
			$company->setCompanyMail($Mail);
			$company->setCompanyNiibb($Niibb);
			$company->setCompanyNombreFantasia($NombreFantasia);
			$company->setCompanyNombreTitular($NombreTitular);
			$company->setCompanyObservaciones($Observaciones);
			$company->setCompanyPais($Pais);
			$company->setCompanyPasswordTitular($PasswordTitular);
			$company->setCompanyPerFiscal($PerFiscal);
			$company->setCompanyProvincia($Provincia);
			$company->setCompanyRazonSocial($RazonSocial);
			$company->setCompanyUsuarioTitular($UsuarioTitular);
			
        return $company;
     }
#INSERTO ID DE USUARIO TITULAR EN EMPRESA
public function idUsuarioTitular($userId, $companyId)
     {
        $sql = "UPDATE company SET companyIdTitular='".$userId."' where companyId = '".$companyId."'";
        mysql_query($sql, $this->conexion);
		return FALSE;
     }
#UPDATE DE EMPRESA
public function updateCompany($request)
     {
     		$id = $request->get('companyId');
     		$Clave = $request->get('companyClave');
			$RazonSocial = $request->get('companyRazonSocial');
			$NombreFantasia = $request->get('companyNombrefantasia');
			$Mail = $request->get('userMail');
			$Calle = $request->get('companyCalle');
			$CalleNro = $request->get('companyCalleNro');
			$Cp = $request->get('companyCp');
			$Localidad = $request->get('companyLocalidad');
			$Provincia = $request->get('companyProvincia');
			$Pais = $request->get('companyPais');
			$Cuit = $request->get('companyCuit');
			$PerFiscal = $request->get('companyPerFiscal');
			$Niibb = $request->get('companyNiibb');
			$Condiibb = $request->get('companyCondiibb');
			$Actividad = $request->get('companyActividad');
			$Observaciones = $request->get('companyObservaciones');
			$NombreTitular = $request->get('firstName');
			$ApellidoTitular = $request->get('lastName');
			$UsuarioTitular = $request->get('userName');
			$Active = $request->get('companyActive');
			$companyHost = "localhost";
			$CompanyBase = $request->get('companyClave');;
			$CompanyBaseUser = $request->get('companyUsuarioTitular');
			$CompanyBaseClave = "efldvl2102";
			if ($request->get('password') == ""){
				$sql = "UPDATE COMPANY SET companyClave='".$Clave."', companyRazonSocial='".$RazonSocial."', companyNombrefantasia='".$NombreFantasia."', companyMail='".$Mail."', companyCalle='".$Calle."', companyCalleNro='".$CalleNro."', companyCp='".$Cp."', companyLocalidad='".$Localidad."',companyProvincia='".$Provincia."', companyPais='".$Pais."', companyCuit='".$Cuit."',  companyPerFiscal='".$PerFiscal."', companyNiibb='".$Niibb."', companyCondiibb='".$Condiibb."', companyActividad='".$Actividad."', companyObservaciones='".$Observaciones."', companyNombreTitular='".$NombreTitular."', companyApellidoTitular='".$ApellidoTitular."', companyUsuarioTitular='".$UsuarioTitular."', companyActive='".$Active."', companyHost='".$companyHost."', CompanyBase='".$CompanyBase."', CompanyBaseUser='".$CompanyBaseUser ."', CompanyBaseClave='".$CompanyBaseClave ."' WHERE companyId = '".$id."'";
			}else{
				$PasswordTitular = sha1($request->get('password'));
				$sql = "UPDATE COMPANY SET companyClave='".$Clave."', companyRazonSocial='".$RazonSocial."', companyNombrefantasia='".$NombreFantasia."', companyMail='".$Mail."', companyCalle='".$Calle."', companyCalleNro='".$CalleNro."', companyCp='".$Cp."', companyLocalidad='".$Localidad."',companyProvincia='".$Provincia."', companyPais='".$Pais."', companyCuit='".$Cuit."',  companyPerFiscal='".$PerFiscal."', companyNiibb='".$Niibb."', companyCondiibb='".$Condiibb."', companyActividad='".$Actividad."', companyObservaciones='".$Observaciones."', companyNombreTitular='".$NombreTitular."', companyApellidoTitular='".$ApellidoTitular."', companyUsuarioTitular='".$UsuarioTitular."', companyPasswordTitular='".$PasswordTitular."', companyActive='".$Active."', companyHost='".$companyHost."', CompanyBase='".$CompanyBase."', CompanyBaseUser='".$CompanyBaseUser ."', CompanyBaseClave='".$CompanyBaseClave ."' WHERE companyId = '".$id."'";
			}			
			
			mysql_query($sql, $this->conexion);
						
			$sql = "SELECT * from company where companyId = '$id'";
			$result = mysql_query($sql, $this->conexion);
			$idUsrTitular = mysql_fetch_assoc($result);         	
         	return $idUsrTitular;
     }
     
}

