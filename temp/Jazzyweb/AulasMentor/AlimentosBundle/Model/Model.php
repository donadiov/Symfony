<?php

 namespace Jazzyweb\AulasMentor\AlimentosBundle\Model;

 class Model
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

     public function dameAlimentos()
     {
         $sql = "select * from alimentos order by energia desc";

         $result = mysql_query($sql, $this->conexion);

         $alimentos = array();
         while ($row = mysql_fetch_assoc($result))
         {
             $alimentos[] = $row;
         }

         return $alimentos;
     }

     public function buscarAlimentosPorNombre($nombre)
     {
         $nombre = htmlspecialchars($nombre);

         $sql = "select * from alimentos where nombre like '" . $nombre . "' order
 by energia desc";

         $result = mysql_query($sql, $this->conexion);

         $alimentos = array();
         while ($row = mysql_fetch_assoc($result))
         {
             $alimentos[] = $row;
         }

         return $alimentos;
     }

     public function dameAlimento($id)
     {
         $id = htmlspecialchars($id);

         $sql = "select * from alimentos, alimentos_propiedades where alimentos.id=" . $id ." and alimentos_propiedades.id = " . $id;

         $result = mysql_query($sql, $this->conexion);

         $alimentos = array();
         $row = mysql_fetch_assoc($result);

         return $row;

     }
	 
	 public function dameLastId()
     {
     	$sql = "SHOW TABLE STATUS LIKE 'alimentos'";
        $result = mysql_query($sql, $this->conexion);
		$row = mysql_fetch_array($result);
		$nextId = $row['Auto_increment']; 

        return $nextId;

     }

     public function insertarAlimento($n, $e, $p, $hc, $f, $g, $color, $peso, $familia, $foto)
     {

		$sql = "SHOW TABLE STATUS LIKE 'alimentos'";
        $result = mysql_query($sql, $this->conexion);
		$row = mysql_fetch_array($result);
		$id = $row['Auto_increment'];

         $id = htmlspecialchars($id);
		 $n = htmlspecialchars($n);
         $e = htmlspecialchars($e);
         $p = htmlspecialchars($p);
         $hc = htmlspecialchars($hc);
         $f = htmlspecialchars($f);
         $g = htmlspecialchars($g);
		 $color = htmlspecialchars($color);
		 $peso = htmlspecialchars($peso);
		 $familia = htmlspecialchars($familia);
		 $foto = htmlspecialchars($foto);

         $sql = "insert into alimentos (nombre, energia, proteina, hidratocarbono, fibra, grasatotal) values ('" . $n . "'," . $e . "," . $p . "," . $hc . "," . $f . "," . $g . ");";
         $sql1 = "insert into alimentos_propiedades (id, color, peso, familia, foto) values (" . $id . ",'" . $color . "', " . $peso . ", '" . $familia . "', '" . $foto . "');";

         
         $result = mysql_query($sql, $this->conexion);
		 $result1 = mysql_query($sql1, $this->conexion);

         return $result && $result1;
     }

	
	public function modificadoAlimento($id, $n, $e, $p, $hc, $f, $g, $color, $peso, $familia, $foto)
     {
     	 $id = htmlspecialchars($id);
         $n = htmlspecialchars($n);
         $e = htmlspecialchars($e);
         $p = htmlspecialchars($p);
         $hc = htmlspecialchars($hc);
         $f = htmlspecialchars($f);
         $g = htmlspecialchars($g);
		 $color = htmlspecialchars($color);
		 $peso = htmlspecialchars($peso);
		 $familia = htmlspecialchars($familia);
		 $foto = htmlspecialchars($foto);

		$sql = "update alimentos, alimentos_propiedades 
		set 
		alimentos.nombre = '" . $n . "',
		alimentos.energia = " . $e . ",
		alimentos.proteina = " . $p . ",	
		alimentos.hidratocarbono = " . $hc . ",
		alimentos.fibra = " . $f . ",
		alimentos.grasatotal = " . $g . ",
		alimentos_propiedades.color = '" . $color . "',
		alimentos_propiedades.peso = " . $peso . ",
		alimentos_propiedades.familia = '" . $familia . "',
		alimentos_propiedades.foto = '" . $foto . "'
		where alimentos.id = " . $id ." and alimentos_propiedades.id = " . $id;
		
		
        $result = mysql_query($sql, $this->conexion);

        return $result;
     }
	 
	 public function eliminaAlimento($id)
     {
     	 $id = htmlspecialchars($id);

		$sql = "delete alimentos, alimentos_propiedades from 
		alimentos inner join alimentos_propiedades
		where alimentos.id = " . $id . " and alimentos_propiedades.id = " . $id;
		
        $result = mysql_query($sql, $this->conexion);

        return $result;
     }



 }