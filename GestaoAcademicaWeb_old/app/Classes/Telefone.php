<?php
namespace \app\Classes;

/**
 *
 */
 class Telefone{

private $id_telefone;
private $ddd;
private $tipotelefone;
private $numero;
public function __construct($id_telefone = 0,$ddd= "" ,$tipotelefone= "" ,$numero= "" ){
$this->id_telefone = $id_telefone;
$this->ddd = $ddd;
$this->tipotelefone = $tipotelefone;
$this->numero = $numero;

}

public static function construct($array){
$obj = new Telefone();
$obj->setId_telefone( $array['id_telefone']);
$obj->setDdd( $array['ddd']);
$obj->setTipotelefone( $array['tipotelefone']);
$obj->setNumero( $array['numero']);
return $obj;

}

public function getId_telefone(){
return $this->id_telefone;
}

public function setId_telefone($id_telefone){
 $this->id_telefone=$id_telefone;
}

public function getDdd(){
return $this->ddd;
}

public function setDdd($ddd){
 $this->ddd=$ddd;
}

public function getTipotelefone(){
return $this->tipotelefone;
}

public function setTipotelefone($tipotelefone){
 $this->tipotelefone=$tipotelefone;
}

public function getNumero(){
return $this->numero;
}

public function setNumero($numero){
 $this->numero=$numero;
}
public function equals($object){
if($object instanceof Telefone){

if($this->id_telefone!=$object->id_telefone){
return false;

}

if($this->ddd!=$object->ddd){
return false;

}

if($this->tipotelefone!=$object->tipotelefone){
return false;

}

if($this->numero!=$object->numero){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id_telefone:" .$this->id_telefone. "]  [ddd:" .$this->ddd. "]
           [tipotelefone:" .$this->tipotelefone. "]  [numero:" .$this->numero. "]  " ;
}

}

?>
