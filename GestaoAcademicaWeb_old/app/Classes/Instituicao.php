<?php
namespace \app\Classes;
/**
 *
 */
 class Instituicao{

 private $id_instituicao;
 private $nome;
 private $nome_fantasia;
 private $nome_empresarial;
 private $cnpj;
 private $inscricao_estadual;
 private $id_endereco;
 private $id_telefone;
 public function __construct($id_instituicao = 0,$nome= "" ,$nome_fantasia= "" ,
                             $nome_empresarial= "" ,$cnpj= "" ,$inscricao_estadual= "" ,
                             $id_endereco = 0,$id_telefone = 0){
 $this->id_instituicao = $id_instituicao;
 $this->nome = $nome;
 $this->nome_fantasia = $nome_fantasia;
 $this->nome_empresarial = $nome_empresarial;
 $this->cnpj = $cnpj;
 $this->inscricao_estadual = $inscricao_estadual;
 $this->id_endereco = $id_endereco;
 $this->id_telefone = $id_telefone;

 }

 public static function construct($array){
 $obj = new Instituicao();
 $obj->setId_instituicao( $array['id_instituicao']);
 $obj->setNome( $array['nome']);
 $obj->setNome_fantasia( $array['nome_fantasia']);
 $obj->setNome_empresarial( $array['nome_empresarial']);
 $obj->setCnpj( $array['cnpj']);
 $obj->setInscricao_estadual( $array['inscricao_estadual']);
 $obj->setId_endereco( $array['id_endereco']);
 $obj->setId_telefone( $array['id_telefone']);
 return $obj;

 }

 public function getId_instituicao(){
 return $this->id_instituicao;
 }

 public function setId_instituicao($id_instituicao){
  $this->id_instituicao=$id_instituicao;
 }

 public function getNome(){
 return $this->nome;
 }

 public function setNome($nome){
  $this->nome=$nome;
 }

 public function getNome_fantasia(){
 return $this->nome_fantasia;
 }

 public function setNome_fantasia($nome_fantasia){
  $this->nome_fantasia=$nome_fantasia;
 }

 public function getNome_empresarial(){
 return $this->nome_empresarial;
 }

 public function setNome_empresarial($nome_empresarial){
  $this->nome_empresarial=$nome_empresarial;
 }

 public function getCnpj(){
 return $this->cnpj;
 }

 public function setCnpj($cnpj){
  $this->cnpj=$cnpj;
 }

 public function getInscricao_estadual(){
 return $this->inscricao_estadual;
 }

 public function setInscricao_estadual($inscricao_estadual){
  $this->inscricao_estadual=$inscricao_estadual;
 }

 public function getId_endereco(){
 return $this->id_endereco;
 }

 public function setId_endereco($id_endereco){
  $this->id_endereco=$id_endereco;
 }

 public function getId_telefone(){
 return $this->id_telefone;
 }

 public function setId_telefone($id_telefone){
  $this->id_telefone=$id_telefone;
 }
 public function equals($object){
 if($object instanceof Instituicao){

 if($this->id_instituicao!=$object->id_instituicao){
 return false;

 }

 if($this->nome!=$object->nome){
 return false;

 }

 if($this->nome_fantasia!=$object->nome_fantasia){
 return false;

 }

 if($this->nome_empresarial!=$object->nome_empresarial){
 return false;

 }

 if($this->cnpj!=$object->cnpj){
 return false;

 }

 if($this->inscricao_estadual!=$object->inscricao_estadual){
 return false;

 }

 if($this->id_endereco!=$object->id_endereco){
 return false;

 }

 if($this->id_telefone!=$object->id_telefone){
 return false;

 }

 return true;

 }
 else{
 return false;
 }

 }
 public function toString(){

  return "  [id_instituicao:" .$this->id_instituicao. "]  [nome:" .$this->nome. "]
            [nome_fantasia:" .$this->nome_fantasia. "]  [nome_empresarial:" .$this->nome_empresarial. "]
            [cnpj:" .$this->cnpj. "]  [inscricao_estadual:" .$this->inscricao_estadual. "]
            [id_endereco:" .$this->id_endereco. "]  [id_telefone:" .$this->id_telefone. "]  " ;
 }

 }

?>
