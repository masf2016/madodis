<?php
namespace application\entities;

/**
 *
 */
 class Coordenador extends Pessoa{

 private $id;
 private $cod;
 private $ctpsnumero;//carteira de trabalho - numero
 private $ctpsdataexped;//carteira de trabalho - data de expedicao


 public function __construct($id = 0,$cod = 0,$ctpsnumero= "" ,$ctpsdataexped= "" ){
         $this->id = $id;
         $this->cod = $cod;
         $this->ctpsnumero = $ctpsnumero;
         $this->ctpsdataexped = $ctpsdataexped;
 }

 public static function construct($array){
         $obj = new Coordenador();

         $obj->setId( $array['id']);
         $obj->setCod( $array['cod']);
         $obj->setCtpsnumero( $array['ctpsnumero']);
         $obj->setCtpsdataexped( $array['ctpsdataexped']);
         return $obj;
 }


 /**
  *  getters e setters
  */
 public function getId(){
 return $this->id;
 }

 public function setId($id){
  $this->id=$id;
 }

 public function getCod(){
 return $this->cod;
 }

 public function setCod($cod){
  $this->cod=$cod;
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
 if($object instanceof Coordenador){

 if($this->id!=$object->id){
 return false;
 }

 if($this->cod!=$object->cod){
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
            [cod:" .$this->cod. "]
            [ctpsnumero:" .$this->ctpsnumero. "]  
            [ctpsdataexped:" .$this->ctpsdataexped. "]  " ;
          }

 }

?>
