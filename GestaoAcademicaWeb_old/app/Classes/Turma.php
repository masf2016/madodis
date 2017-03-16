<?php
namespace \app\Classes;

/**
 *
 */

 class Turma{

private $id_turma;
private $qtd_alunos;
private $periodo;
private $turma;
private $turno;
private $id_disciplina;
public function __construct($id_turma = 0,$qtd_alunos = 0,$periodo = 0,$turma= "" ,
                            $turno= "" ,$id_disciplina = 0){
$this->id_turma = $id_turma;
$this->qtd_alunos = $qtd_alunos;
$this->periodo = $periodo;
$this->turma = $turma;
$this->turno = $turno;
$this->id_disciplina = $id_disciplina;

}

public static function construct($array){
$obj = new Turma();
$obj->setId_turma( $array['id_turma']);
$obj->setQtd_alunos( $array['qtd_alunos']);
$obj->setPeriodo( $array['periodo']);
$obj->setTurma( $array['turma']);
$obj->setTurno( $array['turno']);
$obj->setId_disciplina( $array['id_disciplina']);
return $obj;

}

public function getId_turma(){
return $this->id_turma;
}

public function setId_turma($id_turma){
 $this->id_turma=$id_turma;
}

public function getQtd_alunos(){
return $this->qtd_alunos;
}

public function setQtd_alunos($qtd_alunos){
 $this->qtd_alunos=$qtd_alunos;
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

public function getTurno(){
return $this->turno;
}

public function setTurno($turno){
 $this->turno=$turno;
}

public function getId_disciplina(){
return $this->id_disciplina;
}

public function setId_disciplina($id_disciplina){
 $this->id_disciplina=$id_disciplina;
}
public function equals($object){
if($object instanceof Turma){

if($this->id_turma!=$object->id_turma){
return false;

}

if($this->qtd_alunos!=$object->qtd_alunos){
return false;

}

if($this->periodo!=$object->periodo){
return false;

}

if($this->turma!=$object->turma){
return false;

}

if($this->turno!=$object->turno){
return false;

}

if($this->id_disciplina!=$object->id_disciplina){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id_turma:" .$this->id_turma. "]  [qtd_alunos:" .$this->qtd_alunos. "]
           [periodo:" .$this->periodo. "]  [turma:" .$this->turma. "]
           [turno:" .$this->turno. "]  [id_disciplina:" .$this->id_disciplina. "]  " ;
}

}





?>
