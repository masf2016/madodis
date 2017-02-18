<?php
namespace \application\entities;
/**
 *
 */
 class Disciplina{

 private $id;
 private $tipoensino;//se graduacao ou pos
 private $Curso;//FK
 private $descricao;
 private $cargahoraria;//horas aula totais da disciplina
 private $modulo; //O modulo ao qual a disciplina em questao pertence no curso
 private $ano;//ano vigente da disciplina


 public function __construct($id = 0 ,
                             $tipoensino= "" ,
                             $Curso = 0 ,
                             $descricao= "" ,
                             $cargahoraria = 0 ,
                             $modulo = 0 ,
                             $ano = 0 ){
         $this->id = $id;
         $this->tipoensino = $tipoensino;
         $this->Curso = $Curso;
         $this->descricao = $descricao;
         $this->cargahoraria = $cargahoraria;
         $this->modulo = $modulo;
         $this->ano = $ano;

 }

 public static function construct($array){
         $obj = new Disciplina();

         $obj->setId( $array['id']);
         $obj->setTipoensino( $array['tipoensino']);
         $obj->setCurso( $array['Curso']);
         $obj->setDescricao( $array['descricao']);
         $obj->setCargahoraria( $array['cargahoraria']);
         $obj->setModulo( $array['modulo']);
         $obj->setAno( $array['ano']);
         return $obj;
 }

 /**
  * getters e setters
  */
 public function getId(){
 return $this->id;
 }

 public function setId($id){
  $this->id=$id;
 }

 public function getTipoensino(){
 return $this->tipoensino;
 }

 public function setTipoensino($tipoensino){
  $this->tipoensino=$tipoensino;
 }

 public function getCurso(){
 return $this->Curso;
 }

 public function setCurso($Curso){
  $this->Curso=$Curso;
 }

 public function getDescricao(){
 return $this->descricao;
 }

 public function setDescricao($descricao){
  $this->descricao=$descricao;
 }

 public function getCargahoraria(){
 return $this->cargahoraria;
 }

 public function setCargahoraria($cargahoraria){
  $this->cargahoraria=$cargahoraria;
 }

 public function getModulo(){
 return $this->modulo;
 }

 public function setModulo($modulo){
  $this->modulo=$modulo;
 }

 public function getAno(){
 return $this->ano;
 }

 public function setAno($ano){
  $this->ano=$ano;
 }


 /**
  *
  */
 public function equals($object){
 if($object instanceof Disciplina){

 if($this->id!=$object->id){
 return false;
 }

 if($this->tipoensino!=$object->tipoensino){
 return false;
 }

 if($this->Curso!=$object->Curso){
 return false;
 }

 if($this->descricao!=$object->descricao){
 return false;
 }

 if($this->cargahoraria!=$object->cargahoraria){
 return false;
 }

 if($this->modulo!=$object->modulo){
 return false;
 }

 if($this->ano!=$object->ano){
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
            [tipoensino:" .$this->tipoensino. "]
            [Curso:" .$this->Curso. "]
            [descricao:" .$this->descricao. "]
            [cargahoraria:" .$this->cargahoraria. "]
            [modulo:" .$this->modulo. "]
            [ano:" .$this->ano. "]
            }

 }


 ?>
