<?php
namespace \application\entities;
/**
 *
 */
 class Endereco{

 private $id;
 private $endereco;
 private $numero;
 private $complemento;
 private $bairro;
 private $cidade;
 private $estado;
 private $cep;


 public function __construct($id = 0,
                             $endereco= "" ,
                             $numero= "" ,
                             $complemento= "" ,
                             $bairro= "" ,
                             $cidade= "" ,
                             $estado= "" ,
                             $cep= "" ){
 $this->id = $id;
 $this->endereco = $endereco;
 $this->numero = $numero;
 $this->complemento = $complemento;
 $this->bairro = $bairro;
 $this->cidade = $cidade;
 $this->estado = $estado;
 $this->cep = $cep;

 }

 public static function construct($array){
 $obj = new Endereco();
 $obj->setId( $array['id']);
 $obj->setEndereco( $array['endereco']);
 $obj->setNumero( $array['numero']);
 $obj->setComplemento( $array['complemento']);
 $obj->setBairro( $array['bairro']);
 $obj->setCidade( $array['cidade']);
 $obj->setEstado( $array['estado']);
 $obj->setCep( $array['cep']);
 return $obj;
 }

 /**
  * getters and setters da classe
  */
 public function getId(){
 return $this->id;
 }

 public function setId($id){
  $this->id=$id;
 }

 public function getEndereco(){
 return $this->endereco;
 }

 public function setEndereco($endereco){
  $this->endereco=$endereco;
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

 /**
  *
  */
 public function equals($object){
     if($object instanceof Endereco){

     if($this->id!=$object->id){
     return false;
     }

     if($this->endereco!=$object->endereco){
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

 /**
  *
  */
 public function toString(){

  return "  [id:" .$this->id. "]
            [endereco:" .$this->endereco. "]
            [numero:" .$this->numero. "]
            [complemento:" .$this->complemento. "]
            [bairro:" .$this->bairro. "]
            [cidade:" .$this->cidade. "]
            [estado:" .$this->estado. "]
            [cep:" .$this->cep. "]  " ;
            }

 }



?>
