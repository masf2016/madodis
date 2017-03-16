<?php
namespace \app\Classes;
/**
 *
 */
 class Endereco{

 private $id_endereco;
 private $logradouro;
 private $numero;
 private $complemento;
 private $bairro;
 private $cidade;
 private $estado;
 private $cep;
 public function __construct($id_endereco = 0,$logradouro= "" ,$numero= "" ,
                             $complemento= "" ,$bairro= "" ,$cidade= "" ,
                             $estado= "" ,$cep= "" ){
 $this->id_endereco = $id_endereco;
 $this->logradouro = $logradouro;
 $this->numero = $numero;
 $this->complemento = $complemento;
 $this->bairro = $bairro;
 $this->cidade = $cidade;
 $this->estado = $estado;
 $this->cep = $cep;

 }

 public static function construct($array){
 $obj = new Endereco();
 $obj->setId_endereco( $array['id_endereco']);
 $obj->setLogradouro( $array['logradouro']);
 $obj->setNumero( $array['numero']);
 $obj->setComplemento( $array['complemento']);
 $obj->setBairro( $array['bairro']);
 $obj->setCidade( $array['cidade']);
 $obj->setEstado( $array['estado']);
 $obj->setCep( $array['cep']);
 return $obj;

 }

 public function getId_endereco(){
 return $this->id_endereco;
 }

 public function setId_endereco($id_endereco){
  $this->id_endereco=$id_endereco;
 }

 public function getLogradouro(){
 return $this->logradouro;
 }

 public function setLogradouro($logradouro){
  $this->logradouro=$logradouro;
 }

 public function getNumero(){
 return $this->numero;
 }

 public function setNumero($numero){
  $this->numero=$numero;
 }

 public function getComplemento(){
 return $this->complemento;
 }

 public function setComplemento($complemento){
  $this->complemento=$complemento;
 }

 public function getBairro(){
 return $this->bairro;
 }

 public function setBairro($bairro){
  $this->bairro=$bairro;
 }

 public function getCidade(){
 return $this->cidade;
 }

 public function setCidade($cidade){
  $this->cidade=$cidade;
 }

 public function getEstado(){
 return $this->estado;
 }

 public function setEstado($estado){
  $this->estado=$estado;
 }

 public function getCep(){
 return $this->cep;
 }

 public function setCep($cep){
  $this->cep=$cep;
 }
 public function equals($object){
 if($object instanceof Endereco){

 if($this->id_endereco!=$object->id_endereco){
 return false;

 }

 if($this->logradouro!=$object->logradouro){
 return false;

 }

 if($this->numero!=$object->numero){
 return false;

 }

 if($this->complemento!=$object->complemento){
 return false;

 }

 if($this->bairro!=$object->bairro){
 return false;

 }

 if($this->cidade!=$object->cidade){
 return false;

 }

 if($this->estado!=$object->estado){
 return false;

 }

 if($this->cep!=$object->cep){
 return false;

 }

 return true;

 }
 else{
 return false;
 }

 }
 public function toString(){

  return "  [id_endereco:" .$this->id_endereco. "]  [logradouro:" .$this->logradouro. "]
            [numero:" .$this->numero. "]  [complemento:" .$this->complemento. "]
            [bairro:" .$this->bairro. "]  [cidade:" .$this->cidade. "]
            [estado:" .$this->estado. "]  [cep:" .$this->cep. "]  " ;
 }

 }


?>
