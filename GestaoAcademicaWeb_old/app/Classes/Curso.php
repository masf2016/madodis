<?php
namespace \app\Classes;
/**
 *
 */
 class Curso{

 private $id_curso;
 private $codcursomec;
 private $nome;
 private $cursodescric;
 private $numperiodos;
 private $cursoarea;
 private $tipoensino;
 private $cursodatacriacao;
 private $cursosigla;
 private $id_instituicao;
 public function __construct($id_curso = 0,$codcursomec= "" ,$nome= "" ,
                             $cursodescric= "" ,$numperiodos = 0,$cursoarea= "" ,
                             $tipoensino= "" ,$cursodatacriacao = "0000-00-00 00:00:00",
                             $cursosigla= "" ,$id_instituicao = 0){
 $this->id_curso = $id_curso;
 $this->codcursomec = $codcursomec;
 $this->nome = $nome;
 $this->cursodescric = $cursodescric;
 $this->numperiodos = $numperiodos;
 $this->cursoarea = $cursoarea;
 $this->tipoensino = $tipoensino;
 $this->cursodatacriacao = $cursodatacriacao;
 $this->cursosigla = $cursosigla;
 $this->id_instituicao = $id_instituicao;

 }

 public static function construct($array){
 $obj = new Curso();
 $obj->setId_curso( $array['id_curso']);
 $obj->setCodcursomec( $array['codcursomec']);
 $obj->setNome( $array['nome']);
 $obj->setCursodescric( $array['cursodescric']);
 $obj->setNumperiodos( $array['numperiodos']);
 $obj->setCursoarea( $array['cursoarea']);
 $obj->setTipoensino( $array['tipoensino']);
 $obj->setCursodatacriacao( $array['cursodatacriacao']);
 $obj->setCursosigla( $array['cursosigla']);
 $obj->setId_instituicao( $array['id_instituicao']);
 return $obj;

 }

 public function getId_curso(){
 return $this->id_curso;
 }

 public function setId_curso($id_curso){
  $this->id_curso=$id_curso;
 }

 public function getCodcursomec(){
 return $this->codcursomec;
 }

 public function setCodcursomec($codcursomec){
  $this->codcursomec=$codcursomec;
 }

 public function getNome(){
 return $this->nome;
 }

 public function setNome($nome){
  $this->nome=$nome;
 }

 public function getCursodescric(){
 return $this->cursodescric;
 }

 public function setCursodescric($cursodescric){
  $this->cursodescric=$cursodescric;
 }

 public function getNumperiodos(){
 return $this->numperiodos;
 }

 public function setNumperiodos($numperiodos){
  $this->numperiodos=$numperiodos;
 }

 public function getCursoarea(){
 return $this->cursoarea;
 }

 public function setCursoarea($cursoarea){
  $this->cursoarea=$cursoarea;
 }

 public function getTipoensino(){
 return $this->tipoensino;
 }

 public function setTipoensino($tipoensino){
  $this->tipoensino=$tipoensino;
 }

 public function getCursodatacriacao(){
 return $this->cursodatacriacao;
 }

 public function setCursodatacriacao($cursodatacriacao){
  $this->cursodatacriacao=$cursodatacriacao;
 }

 public function getCursosigla(){
 return $this->cursosigla;
 }

 public function setCursosigla($cursosigla){
  $this->cursosigla=$cursosigla;
 }

 public function getId_instituicao(){
 return $this->id_instituicao;
 }

 public function setId_instituicao($id_instituicao){
  $this->id_instituicao=$id_instituicao;
 }
 public function equals($object){
 if($object instanceof Curso){

 if($this->id_curso!=$object->id_curso){
 return false;

 }

 if($this->codcursomec!=$object->codcursomec){
 return false;

 }

 if($this->nome!=$object->nome){
 return false;

 }

 if($this->cursodescric!=$object->cursodescric){
 return false;

 }

 if($this->numperiodos!=$object->numperiodos){
 return false;

 }

 if($this->cursoarea!=$object->cursoarea){
 return false;

 }

 if($this->tipoensino!=$object->tipoensino){
 return false;

 }

 if($this->cursodatacriacao!=$object->cursodatacriacao){
 return false;

 }

 if($this->cursosigla!=$object->cursosigla){
 return false;

 }

 if($this->id_instituicao!=$object->id_instituicao){
 return false;

 }

 return true;

 }
 else{
 return false;
 }

 }
 public function toString(){

  return "  [id_curso:" .$this->id_curso. "]  [codcursomec:" .$this->codcursomec. "]
            [nome:" .$this->nome. "]  [cursodescric:" .$this->cursodescric. "]
            [numperiodos:" .$this->numperiodos. "]  [cursoarea:" .$this->cursoarea. "]
            [tipoensino:" .$this->tipoensino. "]  [cursodatacriacao:" .$this->cursodatacriacao. "]
            [cursosigla:" .$this->cursosigla. "]  [id_instituicao:" .$this->id_instituicao. "]  " ;
 }

 }

?>
