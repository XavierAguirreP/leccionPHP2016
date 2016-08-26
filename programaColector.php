<?php

require_once("colector.php");
class programaColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarPROGRAMA()
	{
		try
		{
		    $result= $this->modelo->Listar("programa");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertPROGRAMA($varNombre, $varPais)
 {
 try
		{
			$sql = "insert into programa (id, nombre, pais) values (default, '$varNombre', '$varPais')";
		    	$result= $this->modelo->operacion($sql);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdatePROGRAMA($varNombre, $varId)
 {
 try
		{
			$sql = "update programa set nombre = '" .$varNombre. "' where id =".$varId ;
			$result= $this->modelo->operacion($sql);
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeletePROGRAMA($varID)
 {
 try
		{
			$sql = "delete from programa where id = $varID";
		     $result= $this->modelo->operacion($sql);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
