<?php
namespace \app\Classes;
/**
 *
 */
 class Disciplina{

private $id_disciplina;
private $nome;
private $disciplsigla;
private $creditos;
private $descricao;
private $cargahoraria;
private $modulopertencente;
private $disciplrequisito;
private $id_plano_ensino;
private $id_professor;
public function __construct($id_disciplina = 0,$nome= "" ,$disciplsigla= "" ,
                            $creditos = 0,$descricao= "" ,$cargahoraria = 0,
                            $modulopertencente = 0,$disciplrequisito= "" ,
                            $id_plano_ensino = 0,$id_professor = 0){
$this->id_disciplina = $id_disciplina;
$this->nome = $nome;
$this->disciplsigla = $disciplsigla;
$this->creditos = $creditos;
$this->descricao = $descricao;
$this->cargahoraria = $cargahoraria;
$this->modulopertencente = $modulopertencente;
$this->disciplrequisito = $disciplrequisito;
$this->id_plano_ensino = $id_plano_ensino;
$this->id_professor = $id_professor;

}

public static function construct($array){
$obj = new Disciplina();
$obj->setId_disciplina( $array['id_disciplina']);
$obj->setNome( $array['nome']);
$obj->setDisciplsigla( $array['disciplsigla']);
$obj->setCreditos( $array['creditos']);
$obj->setDescricao( $array['descricao']);
$obj->setCargahoraria( $array['cargahoraria']);
$obj->setModulopertencente( $array['modulopertencente']);
$obj->setDisciplrequisito( $array['disciplrequisito']);
$obj->setId_plano_ensino( $array['id_plano_ensino']);
$obj->setId_professor( $array['id_professor']);
return $obj;

}

public function getId_disciplina(){
return $this->id_disciplina;
}

public function setId_disciplina($id_disciplina){
 $this->id_disciplina=$id_disciplina;
}

public function getNome(){
return $this->nome;
}

public function setNome($nome){
 $this->nome=$nome;
}

public function getDisciplsigla(){
return $this->disciplsigla;
}

public function setDisciplsigla($disciplsigla){
 $this->disciplsigla=$disciplsigla;
}

public function getCreditos(){
return $this->creditos;
}

public function setCreditos($creditos){
 $this->creditos=$creditos;
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

public function getModulopertencente(){
return $this->modulopertencente;
}

public function setModulopertencente($modulopertencente){
 $this->modulopertencente=$modulopertencente;
}

public function getDisciplrequisito(){
return $this->disciplrequisito;
}

public function setDisciplrequisito($disciplrequisito){
 $this->disciplrequisito=$disciplrequisito;
}

public function getId_plano_ensino(){
return $this->id_plano_ensino;
}

public function setId_plano_ensino($id_plano_ensino){
 $this->id_plano_ensino=$id_plano_ensino;
}

public function getId_professor(){
return $this->id_professor;
}

public function setId_professor($id_professor){
 $this->id_professor=$id_professor;
}
public function equals($object){
if($object instanceof Disciplina){

if($this->id_disciplina!=$object->id_disciplina){
return false;

}

if($this->nome!=$object->nome){
return false;

}

if($this->disciplsigla!=$object->disciplsigla){
return false;

}

if($this->creditos!=$object->creditos){
return false;

}

if($this->descricao!=$object->descricao){
return false;

}

if($this->cargahoraria!=$object->cargahoraria){
return false;

}

if($this->modulopertencente!=$object->modulopertencente){
return false;

}

if($this->disciplrequisito!=$object->disciplrequisito){
return false;

}

if($this->id_plano_ensino!=$object->id_plano_ensino){
return false;

}

if($this->id_professor!=$object->id_professor){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id_disciplina:" .$this->id_disciplina. "]  [nome:" .$this->nome. "]
           [disciplsigla:" .$this->disciplsigla. "]  [creditos:" .$this->creditos. "]
           [descricao:" .$this->descricao. "]  [cargahoraria:" .$this->cargahoraria. "]
           [modulopertencente:" .$this->modulopertencente. "]
           [disciplrequisito:" .$this->disciplrequisito. "]
           [id_plano_ensino:" .$this->id_plano_ensino. "]
           [id_professor:" .$this->id_professor. "]  " ;
}

}

 ?>
