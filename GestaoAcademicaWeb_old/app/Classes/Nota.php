<?php
namespace \app\Classes;
/**
 *
 */
 class Nota{

private $id_nota;
private $tiponota;
private $nota;
private $id_aluno;
private $id_turma;
public function __construct($id_nota = 0,$tiponota= "" ,$nota= "" ,$id_aluno = 0,$id_turma = 0){
$this->id_nota = $id_nota;
$this->tiponota = $tiponota;
$this->nota = $nota;
$this->id_aluno = $id_aluno;
$this->id_turma = $id_turma;

}

public static function construct($array){
$obj = new Nota();
$obj->setId_nota( $array['id_nota']);
$obj->setTiponota( $array['tiponota']);
$obj->setNota( $array['nota']);
$obj->setId_aluno( $array['id_aluno']);
$obj->setId_turma( $array['id_turma']);
return $obj;

}

public function getId_nota(){
return $this->id_nota;
}

public function setId_nota($id_nota){
 $this->id_nota=$id_nota;
}

public function getTiponota(){
return $this->tiponota;
}

public function setTiponota($tiponota){
 $this->tiponota=$tiponota;
}

public function getNota(){
return $this->nota;
}

public function setNota($nota){
 $this->nota=$nota;
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
public function equals($object){
if($object instanceof Nota){

if($this->id_nota!=$object->id_nota){
return false;

}

if($this->tiponota!=$object->tiponota){
return false;

}

if($this->nota!=$object->nota){
return false;

}

if($this->id_aluno!=$object->id_aluno){
return false;

}

if($this->id_turma!=$object->id_turma){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id_nota:" .$this->id_nota. "]  [tiponota:" .$this->tiponota. "]
           [nota:" .$this->nota. "]  [id_aluno:" .$this->id_aluno. "]
           [id_turma:" .$this->id_turma. "]  " ;
}

}


  ?>
