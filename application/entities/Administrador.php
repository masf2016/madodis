<?php

/**
 *
 */
 class Administrador extends Pessoa{

 private $id;
 private $matricula;
 private $ctpsnumero; //carteira de trabalho - numero
 private $ctpsdataexped; //carteira de trabalho - data de expedicao

 public function __construct($id = 0,$matricula = 0,$ctpsnumero= "" ,$ctpsdataexped= "" ){

   $this->id = $id;
   $this->matricula = $matricula;
   $this->ctpsnumero = $ctpsnumero;
   $this->ctpsdataexped = $ctpsdataexped;
  }

 public static function construct($array){
   $obj = new Administrador();

   $obj->setId( $array['id']);
   $obj->setMatricula( $array['matricula']);
   $obj->setCtpsnumero( $array['ctpsnumero']);
   $obj->setCtpsdataexped( $array['ctpsdataexped']);
 return $obj;
 }

 /**
  *getters and setters da classe
  */
 public function getId(){
 return $this->id;
 }

 public function setId($id){
  $this->id=$id;
 }

 public function getMatricula(){
 return $this->matricula;
 }

 public function setMatricula($matricula){
  $this->matricula=$matricula;
 }

 public function getCtpsnumero(){
 return $this->ctpsnumero;
 }

 public function setCtpsnumero($ctpsnumero){
  $this->ctpsnumero=$ctpsnumero;
 }

 public function getCtpsdataexped(){
 return $this->ctpsdataexped;
 }

 public function setCtpsdataexped($ctpsdataexped){
  $this->ctpsdataexped=$ctpsdataexped;
 }

 /**
  *
  */
 public function equals($object){
 if($object instanceof Administrador){

 if($this->id!=$object->id){
 return false;
 }

 if($this->matricula!=$object->matricula){
 return false;
 }

 if($this->ctpsnumero!=$object->ctpsnumero){
 return false;
 }

 if($this->ctpsdataexped!=$object->ctpsdataexped){
 return false;
 }

     return true;

               }
               else{
               return false;
               }

 }

 /**
  *
  */
 public function toString(){

  return "  [id:" .$this->id. "]
            [matricula:" .$this->matricula. "]
            [ctpsnumero:" .$this->ctpsnumero. "]
            [ctpsdataexped:" .$this->ctpsdataexped. "]  " ;
          }

 }



?>
