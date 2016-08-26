<?php
class becario {  
   private $id;  
   private $nombre;
   private $programa;
  
   function __construct() {  
    
   }  
   
   function __clone() {  
     $this->id = ++$this->id;   
   }
  
   public function getId_becario() {  
     return $this->id;  
   }
  
   public function setId_becario($id) {  
     $this->id = $id;  
   }
  
   public function getNombre() {  
     return $this->nombre;  
   }
  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  

   public function getPrograma() {  
     return $this->fk_id_programa;  
   }
  
   public function setFoto($programa) {  
     $this->fk_id_programa = $programa;  
   }  

 }
?>
