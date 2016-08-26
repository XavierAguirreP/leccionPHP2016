<?php
class programa {  
   private $id;  
   private $nombre;
   private $pais;
  
   function __construct() {  
    
   }  
   
   function __clone() {  
     $this->id = ++$this->id;   
   }
  
   public function getId() {  
     return $this->id;  
   }
  
   public function setId($id) {  
     $this->id = $id;  
   }
  
   public function getNombre() {  
     return $this->nombre;  
   }
  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  

   public function getPais() {  
     return $this->pais;  
   }
  
   public function setPais($pais) {  
     $this->pais = $pais;  
   }  

 }
?>
