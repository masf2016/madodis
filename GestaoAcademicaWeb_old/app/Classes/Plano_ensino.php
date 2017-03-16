<?php
namespace \app\Classes;
/**
 *
 */

class Plano_ensino{

private $id_plano_ensino;
private $metod_ensi_aprendiz;
private $ch_teorica;
private $ch_pratica;
private $objetivos;
private $metod_avali;
private $bibliogr_usada;
private $ementa;
private $id_conteud_program;
private $id_material;
public function __construct($id_plano_ensino = 0,$metod_ensi_aprendiz= "" ,
                            $ch_teorica = 0,$ch_pratica = 0,$objetivos= "" ,
                            $metod_avali= "" ,$bibliogr_usada= "" ,$ementa= "" ,
                            $id_conteud_program = 0,$id_material = 0){
$this->id_plano_ensino = $id_plano_ensino;
$this->metod_ensi_aprendiz = $metod_ensi_aprendiz;
$this->ch_teorica = $ch_teorica;
$this->ch_pratica = $ch_pratica;
$this->objetivos = $objetivos;
$this->metod_avali = $metod_avali;
$this->bibliogr_usada = $bibliogr_usada;
$this->ementa = $ementa;
$this->id_conteud_program = $id_conteud_program;
$this->id_material = $id_material;

}

public static function construct($array){
$obj = new Plano_ensino();
$obj->setId_plano_ensino( $array['id_plano_ensino']);
$obj->setMetod_ensi_aprendiz( $array['metod_ensi_aprendiz']);
$obj->setCh_teorica( $array['ch_teorica']);
$obj->setCh_pratica( $array['ch_pratica']);
$obj->setObjetivos( $array['objetivos']);
$obj->setMetod_avali( $array['metod_avali']);
$obj->setBibliogr_usada( $array['bibliogr_usada']);
$obj->setEmenta( $array['ementa']);
$obj->setId_conteud_program( $array['id_conteud_program']);
$obj->setId_material( $array['id_material']);
return $obj;

}

public function getId_plano_ensino(){
return $this->id_plano_ensino;
}

public function setId_plano_ensino($id_plano_ensino){
 $this->id_plano_ensino=$id_plano_ensino;
}

public function getMetod_ensi_aprendiz(){
return $this->metod_ensi_aprendiz;
}

public function setMetod_ensi_aprendiz($metod_ensi_aprendiz){
 $this->metod_ensi_aprendiz=$metod_ensi_aprendiz;
}

public function getCh_teorica(){
return $this->ch_teorica;
}

public function setCh_teorica($ch_teorica){
 $this->ch_teorica=$ch_teorica;
}

public function getCh_pratica(){
return $this->ch_pratica;
}

public function setCh_pratica($ch_pratica){
 $this->ch_pratica=$ch_pratica;
}

public function getObjetivos(){
return $this->objetivos;
}

public function setObjetivos($objetivos){
 $this->objetivos=$objetivos;
}

public function getMetod_avali(){
return $this->metod_avali;
}

public function setMetod_avali($metod_avali){
 $this->metod_avali=$metod_avali;
}

public function getBibliogr_usada(){
return $this->bibliogr_usada;
}

public function setBibliogr_usada($bibliogr_usada){
 $this->bibliogr_usada=$bibliogr_usada;
}

public function getEmenta(){
return $this->ementa;
}

public function setEmenta($ementa){
 $this->ementa=$ementa;
}

public function getId_conteud_program(){
return $this->id_conteud_program;
}

public function setId_conteud_program($id_conteud_program){
 $this->id_conteud_program=$id_conteud_program;
}

public function getId_material(){
return $this->id_material;
}

public function setId_material($id_material){
 $this->id_material=$id_material;
}
public function equals($object){
if($object instanceof Plano_ensino){

if($this->id_plano_ensino!=$object->id_plano_ensino){
return false;

}

if($this->metod_ensi_aprendiz!=$object->metod_ensi_aprendiz){
return false;

}

if($this->ch_teorica!=$object->ch_teorica){
return false;

}

if($this->ch_pratica!=$object->ch_pratica){
return false;

}

if($this->objetivos!=$object->objetivos){
return false;

}

if($this->metod_avali!=$object->metod_avali){
return false;

}

if($this->bibliogr_usada!=$object->bibliogr_usada){
return false;

}

if($this->ementa!=$object->ementa){
return false;

}

if($this->id_conteud_program!=$object->id_conteud_program){
return false;

}

if($this->id_material!=$object->id_material){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id_plano_ensino:" .$this->id_plano_ensino. "]
           [metod_ensi_aprendiz:" .$this->metod_ensi_aprendiz. "]
           [ch_teorica:" .$this->ch_teorica. "]  [ch_pratica:" .$this->ch_pratica. "]
           [objetivos:" .$this->objetivos. "]  [metod_avali:" .$this->metod_avali. "]
           [bibliogr_usada:" .$this->bibliogr_usada. "]  [ementa:" .$this->ementa. "]
           [id_conteud_program:" .$this->id_conteud_program. "]
           [id_material:" .$this->id_material. "]  " ;
}

}

 ?>
