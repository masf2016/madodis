<?php
namespace \app\Classes;
/**
 *
 */

 class Conteud_program{

 private $id_conteud_program;
 private $conteudo;
 private $data;
 private $cargahoraria;
 public function __construct($id_conteud_program = 0,$conteudo= "" ,$data= "" ,
                             $cargahoraria = 0){
 $this->id_conteud_program = $id_conteud_program;
 $this->conteudo = $conteudo;
 $this->data = $data;
 $this->cargahoraria = $cargahoraria;

 }

 public static function construct($array){
 $obj = new Conteud_program();
 $obj->setId_conteud_program( $array['id_conteud_program']);
 $obj->setConteudo( $array['conteudo']);
 $obj->setData( $array['data']);
 $obj->setCargahoraria( $array['cargahoraria']);
 return $obj;

 }

 public function getId_conteud_program(){
 return $this->id_conteud_program;
 }

 public function setId_conteud_program($id_conteud_program){
  $this->id_conteud_program=$id_conteud_program;
 }

 public function getConteudo(){
 return $this->conteudo;
 }

 public function setConteudo($conteudo){
  $this->conteudo=$conteudo;
 }

 public function getData(){
 return $this->data;
 }

 public function setData($data){
  $this->data=$data;
 }

 public function getCargahoraria(){
 return $this->cargahoraria;
 }

 public function setCargahoraria($cargahoraria){
  $this->cargahoraria=$cargahoraria;
 }
 public function equals($object){
 if($object instanceof Conteud_program){

 if($this->id_conteud_program!=$object->id_conteud_program){
 return false;

 }

 if($this->conteudo!=$object->conteudo){
 return false;

 }

 if($this->data!=$object->data){
 return false;

 }

 if($this->cargahoraria!=$object->cargahoraria){
 return false;

 }

 return true;

 }
 else{
 return false;
 }

 }
 public function toString(){

  return "  [id_conteud_program:" .$this->id_conteud_program. "]
            [conteudo:" .$this->conteudo. "]  [data:" .$this->data. "]
            [cargahoraria:" .$this->cargahoraria. "]  " ;
 }

 }

 ?>
