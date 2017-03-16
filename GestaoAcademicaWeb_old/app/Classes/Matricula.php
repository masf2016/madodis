<?php
namespace \app\Classes;
/**
 *
 */
 class Matricula{

 private $id_matricula;
 private $anoletivo;
 private $id_aluno;
 private $id_turma;
 private $id_curso;
 public function __construct($id_matricula = 0,$anoletivo = 0,$id_aluno = 0,$id_turma = 0,
                             $id_curso = 0){
 $this->id_matricula = $id_matricula;
 $this->anoletivo = $anoletivo;
 $this->id_aluno = $id_aluno;
 $this->id_turma = $id_turma;
 $this->id_curso = $id_curso;

 }

 public static function construct($array){
 $obj = new Matricula();
 $obj->setId_matricula( $array['id_matricula']);
 $obj->setAnoletivo( $array['anoletivo']);
 $obj->setId_aluno( $array['id_aluno']);
 $obj->setId_turma( $array['id_turma']);
 $obj->setId_curso( $array['id_curso']);
 return $obj;

 }

 public function getId_matricula(){
 return $this->id_matricula;
 }

 public function setId_matricula($id_matricula){
  $this->id_matricula=$id_matricula;
 }

 public function getAnoletivo(){
 return $this->anoletivo;
 }

 public function setAnoletivo($anoletivo){
  $this->anoletivo=$anoletivo;
 }

 public function getId_aluno(){
 return $this->id_aluno;
 }

 public function setId_aluno($id_aluno){
  $this->id_aluno=$id_aluno;
 }

 public function getId_turma(){
 return $this->id_turma;
 }

 public function setId_turma($id_turma){
  $this->id_turma=$id_turma;
 }

 public function getId_curso(){
 return $this->id_curso;
 }

 public function setId_curso($id_curso){
  $this->id_curso=$id_curso;
 }
 public function equals($object){
 if($object instanceof Matricula){

 if($this->id_matricula!=$object->id_matricula){
 return false;

 }

 if($this->anoletivo!=$object->anoletivo){
 return false;

 }

 if($this->id_aluno!=$object->id_aluno){
 return false;

 }

 if($this->id_turma!=$object->id_turma){
 return false;

 }

 if($this->id_curso!=$object->id_curso){
 return false;

 }

 return true;

 }
 else{
 return false;
 }

 }
 public function toString(){

  return "  [id_matricula:" .$this->id_matricula. "]  [anoletivo:" .$this->anoletivo. "]
            [id_aluno:" .$this->id_aluno. "]  [id_turma:" .$this->id_turma. "]
            [id_curso:" .$this->id_curso. "]  " ;
 }

 }




?>
