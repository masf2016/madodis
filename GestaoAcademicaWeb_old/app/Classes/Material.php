<?php
namespace \app\Classes;

/**
 *
 */

 class Material{

 private $id_material;
 private $descricao;
 private $statusliberado;
 private $localizacao;
 public function __construct($id_material = 0,$descricao= "" ,$statusliberado = 0,
                             $localizacao= "" ){
 $this->id_material = $id_material;
 $this->descricao = $descricao;
 $this->statusliberado = $statusliberado;
 $this->localizacao = $localizacao;

 }

 public static function construct($array){
 $obj = new Material();
 $obj->setId_material( $array['id_material']);
 $obj->setDescricao( $array['descricao']);
 $obj->setStatusliberado( $array['statusliberado']);
 $obj->setLocalizacao( $array['localizacao']);
 return $obj;

 }

 public function getId_material(){
 return $this->id_material;
 }

 public function setId_material($id_material){
  $this->id_material=$id_material;
 }

 public function getDescricao(){
 return $this->descricao;
 }

 public function setDescricao($descricao){
  $this->descricao=$descricao;
 }

 public function getStatusliberado(){
 return $this->statusliberado;
 }

 public function setStatusliberado($statusliberado){
  $this->statusliberado=$statusliberado;
 }

 public function getLocalizacao(){
 return $this->localizacao;
 }

 public function setLocalizacao($localizacao){
  $this->localizacao=$localizacao;
 }
 public function equals($object){
 if($object instanceof Material){

 if($this->id_material!=$object->id_material){
 return false;

 }

 if($this->descricao!=$object->descricao){
 return false;

 }

 if($this->statusliberado!=$object->statusliberado){
 return false;

 }

 if($this->localizacao!=$object->localizacao){
 return false;

 }

 return true;

 }
 else{
 return false;
 }

 }
 public function toString(){

  return "  [id_material:" .$this->id_material. "]  [descricao:" .$this->descricao. "]
            [statusliberado:" .$this->statusliberado. "]  [localizacao:" .$this->localizacao. "]  " ;
 }

 }


?>
