<?php

require_once("colector.php");
class becarioColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarBECARIO()
	{
		try
		{
		    $result= $this->modelo->Listar("becario");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertBECARIO($varNombre)
 {
 try
		{
			$sql = "insert into becario (id, nombre, fk_programa) values (default, '$varNombre', null)";
		    	$result= $this->modelo->operacion($sql);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateBECARIO($varNombre, $varId)
 {
 try
		{
			$sql = "update becario set nombre = '" .$varNombre. "' where id =".$varId ;
			$result= $this->modelo->operacion($sql);
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteBECARIO($varID)
 {
 try
		{
			$sql = "delete from becario where id = $varID";
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
