<?php
namespace \application\entities;
/**
 *
 */
 class Aluno extends Pessoa{

 private $id;
 private $matricula;

 public function __construct($id = 0,
                             $matricula = 0){
   $this->id = $id;
   $this->matricula = $matricula;
 }

 public static function construct($array){
   $obj = new Aluno();
   $obj->setId( $array['id']);
   $obj->setMatricula( $array['matricula']);
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


 public function equals($object){
       if($object instanceof Aluno){

       if($this->id!=$object->id){
       return false;
       }

       if($this->matricula!=$object->matricula){
       return false;
       }

       return true;

       }
       else{
         return false;
         }

 }


 public function toString(){

  return "  [id:" .$this->id. "]  [matricula:" .$this->matricula. "]  " ;
        }

 }



?>
