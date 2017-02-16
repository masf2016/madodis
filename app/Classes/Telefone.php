<?php
namespace \application\entities;

/**
 *
 */
 class Telefone{

 private $id;
 private $ddd;
 private $tipotelef;
 private $numero;

 public function __construct($id = 0,
                             $ddd= "" ,
                             $tipotelef= "" ,
                             $numero = 0){
         $this->id = $id;
         $this->ddd = $ddd;
         $this->tipotelef = $tipotelef;
         $this->numero = $numero;
 }

 public static function construct($array){
         $obj = new Telefone();

         $obj->setId( $array['id']);
         $obj->setDdd( $array['ddd']);
         $obj->setTipotelef( $array['tipotelef']);
         $obj->setNumero( $array['numero']);
         return $obj;
 }

 public function getId(){
 return $this->id;
 }

 public function setId($id){
  $this->id=$id;
 }

 public function getDdd(){
 return $this->ddd;
 }

 public function setDdd($ddd){
  $this->ddd=$ddd;
 }

 public function getTipotelef(){
 return $this->tipotelef;
 }

 public function setTipotelef($tipotelef){
  $this->tipotelef=$tipotelef;
 }

 public function getNumero(){
 return $this->numero;
 }

 public function setNumero($numero){
  $this->numero=$numero;
 }

 public function equals($object){

   if($object instanceof Telefone){

     if($this->id!=$object->id){
     return false;
     }

     if($this->ddd!=$object->ddd){
     return false;
     }

     if($this->tipotelef!=$object->tipotelef){
     return false;
     }

     if($this->numero!=$object->numero){
     return false;
     }
     return true;
                 }
                 else{
                 return false;
   }

 }
 public function toString(){

  return "  [id:" .$this->id. "]
            [ddd:" .$this->ddd. "]
            [tipotelef:" .$this->tipotelef. "]
            [numero:" .$this->numero. "]  " ;
    }

 }


?>
