<?php
namespace \app\Classes;

/**
 *
 */
 class Pessoa{

private $id;
private $nome;
private $sexo;
private $datanascim;
private $nomepai;
private $nomemae;
private $cpf;
private $rg;
private $rgorgaoexped;
private $tituloeleitoral;
private $nacionalidade;
private $naturalidade;
private $email;
public function __construct($id = 0,$nome= "" ,$sexo= "" ,$datanascim = "0000-00-00 00:00:00",
                            $nomepai= "" ,$nomemae= "" ,$cpf= "" ,$rg= "" ,
                            $rgorgaoexped= "" ,$tituloeleitoral= "" ,
                            $nacionalidade= "" ,$naturalidade= "" ,$email= "" ){
$this->id = $id;
$this->nome = $nome;
$this->sexo = $sexo;
$this->datanascim = $datanascim;
$this->nomepai = $nomepai;
$this->nomemae = $nomemae;
$this->cpf = $cpf;
$this->rg = $rg;
$this->rgorgaoexped = $rgorgaoexped;
$this->tituloeleitoral = $tituloeleitoral;
$this->nacionalidade = $nacionalidade;
$this->naturalidade = $naturalidade;
$this->email = $email;

}

public static function construct($array){
$obj = new Pessoa();
$obj->setId( $array['id']);
$obj->setNome( $array['nome']);
$obj->setSexo( $array['sexo']);
$obj->setDatanascim( $array['datanascim']);
$obj->setNomepai( $array['nomepai']);
$obj->setNomemae( $array['nomemae']);
$obj->setCpf( $array['cpf']);
$obj->setRg( $array['rg']);
$obj->setRgorgaoexped( $array['rgorgaoexped']);
$obj->setTituloeleitoral( $array['tituloeleitoral']);
$obj->setNacionalidade( $array['nacionalidade']);
$obj->setNaturalidade( $array['naturalidade']);
$obj->setEmail( $array['email']);
return $obj;

}

public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}

public function getNome(){
return $this->nome;
}

public function setNome($nome){
 $this->nome=$nome;
}

public function getSexo(){
return $this->sexo;
}

public function setSexo($sexo){
 $this->sexo=$sexo;
}

public function getDatanascim(){
return $this->datanascim;
}

public function setDatanascim($datanascim){
 $this->datanascim=$datanascim;
}

public function getNomepai(){
return $this->nomepai;
}

public function setNomepai($nomepai){
 $this->nomepai=$nomepai;
}

public function getNomemae(){
return $this->nomemae;
}

public function setNomemae($nomemae){
 $this->nomemae=$nomemae;
}

public function getCpf(){
return $this->cpf;
}

public function setCpf($cpf){
 $this->cpf=$cpf;
}

public function getRg(){
return $this->rg;
}

public function setRg($rg){
 $this->rg=$rg;
}

public function getRgorgaoexped(){
return $this->rgorgaoexped;
}

public function setRgorgaoexped($rgorgaoexped){
 $this->rgorgaoexped=$rgorgaoexped;
}

public function getTituloeleitoral(){
return $this->tituloeleitoral;
}

public function setTituloeleitoral($tituloeleitoral){
 $this->tituloeleitoral=$tituloeleitoral;
}

public function getNacionalidade(){
return $this->nacionalidade;
}

public function setNacionalidade($nacionalidade){
 $this->nacionalidade=$nacionalidade;
}

public function getNaturalidade(){
return $this->naturalidade;
}

public function setNaturalidade($naturalidade){
 $this->naturalidade=$naturalidade;
}

public function getEmail(){
return $this->email;
}

public function setEmail($email){
 $this->email=$email;
}
public function equals($object){
if($object instanceof Pessoa){

if($this->id!=$object->id){
return false;

}

if($this->nome!=$object->nome){
return false;

}

if($this->sexo!=$object->sexo){
return false;

}

if($this->datanascim!=$object->datanascim){
return false;

}

if($this->nomepai!=$object->nomepai){
return false;

}

if($this->nomemae!=$object->nomemae){
return false;

}

if($this->cpf!=$object->cpf){
return false;

}

if($this->rg!=$object->rg){
return false;

}

if($this->rgorgaoexped!=$object->rgorgaoexped){
return false;

}

if($this->tituloeleitoral!=$object->tituloeleitoral){
return false;

}

if($this->nacionalidade!=$object->nacionalidade){
return false;

}

if($this->naturalidade!=$object->naturalidade){
return false;

}

if($this->email!=$object->email){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id:" .$this->id. "]  [nome:" .$this->nome. "]  [sexo:" .$this->sexo. "]
           [datanascim:" .$this->datanascim. "]  [nomepai:" .$this->nomepai. "]
           [nomemae:" .$this->nomemae. "]  [cpf:" .$this->cpf. "]  [rg:" .$this->rg. "]
           [rgorgaoexped:" .$this->rgorgaoexped. "]
           [tituloeleitoral:" .$this->tituloeleitoral. "]
           [nacionalidade:" .$this->nacionalidade. "]
           [naturalidade:" .$this->naturalidade. "]  [email:" .$this->email. "]  " ;
}

}

?>
