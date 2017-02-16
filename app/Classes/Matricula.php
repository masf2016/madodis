<?php
namespace \application\entities;
/**
 *
 */
 class Matricula{

 private $id;
 private $anoletivo;
 private $turno;
 private $tipoensino;
 private $Curso; //FK
 private $periodo;
 private $turma;
 private $matricvalor;
 private $matricmensalid;

 public function __construct($id = 0,
                             $anoletivo = 0 ,
                             $turno= "" ,
                             $tipoensino= "" ,
                             $Curso = 0 ,
                             $periodo = 0 ,
                             $turma= "" ,
                             $matricvalor= 0.0 ,
                             $matricmensalid= 0.0){
         $this->id = $id;
         $this->anoletivo = $anoletivo;
         $this->turno = $turno;
         $this->tipoensino = $tipoensino;
         $this->Curso = $Curso;
         $this->periodo = $periodo;
         $this->turma = $turma;
         $this->matricvalor = $matricvalor;
         $this->matricmensalid = $matricmensalid;
 }

 public static function construct($array){
         $obj = new Matricula();

         $obj->setId( $array['id']);
         $obj->setAnoletivo( $array['anoletivo']);
         $obj->setTurno( $array['turno']);
         $obj->setTipoensino( $array['tipoensino']);
         $obj->setCurso( $array['Curso']);
         $obj->setPeriodo( $array['periodo']);
         $obj->setTurma( $array['turma']);
         $obj->setMatricvalor( $array['matricvalor']);
         $obj->setMatricmensalid( $array['matricmensalid']);
         return $obj;
 }

 /**
  * getters and setters da classe
  */
 public function getId(){
 return $this->id;
 }

 public function setId($id){
  $this->id=$id;
 }

 public function getAnoletivo(){
 return $this->anoletivo;
 }

 public function setAnoletivo($anoletivo){
  $this->anoletivo=$anoletivo;
 }

 public function getTurno(){
 return $this->turno;
 }

 public function setTurno($turno){
  $this->turno=$turno;
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

 public function getPeriodo(){
 return $this->periodo;
 }

 public function setPeriodo($periodo){
  $this->periodo=$periodo;
 }

 public function getTurma(){
 return $this->turma;
 }

 public function setTurma($turma){
  $this->turma=$turma;
 }

 public function getMatricvalor(){
 return $this->matricvalor;
 }

 public function setMatricvalor($matricvalor){
  $this->matricvalor=$matricvalor;
 }

 public function getMatricmensalid(){
 return $this->matricmensalid;
 }

 public function setMatricmensalid($matricmensalid){
  $this->matricmensalid=$matricmensalid;
 }

 /**
  *
  */
 public function equals($object){
 if($object instanceof Matricula){

 if($this->id!=$object->id){
 return false;
 }

 if($this->anoletivo!=$object->anoletivo){
 return false;
 }

 if($this->turno!=$object->turno){
 return false;
 }

 if($this->tipoensino!=$object->tipoensino){
 return false;
 }

 if($this->Curso!=$object->Curso){
 return false;
 }

 if($this->periodo!=$object->periodo){
 return false;
 }

 if($this->turma!=$object->turma){
 return false;
 }

 if($this->matricvalor!=$object->matricvalor){
 return false;
 }

 if($this->matricmensalid!=$object->matricmensalid){
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
            [anoletivo:" .$this->anoletivo. "]
            [turno:" .$this->turno. "]
            [tipoensino:" .$this->tipoensino. "]
            [Curso:" .$this->Curso. "]
            [periodo:" .$this->periodo. "]
            [turma:" .$this->turma. "]
            [matricvalor:" .$this->matricvalor. "]
            [matricmensalid:" .$this->matricmensalid. "]  " ;
          }

 }




?>
