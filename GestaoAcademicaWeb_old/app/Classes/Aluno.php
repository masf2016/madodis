<?php
namespace \app\Classes;
/**
 *
 */
 class Aluno{

 private $id_aluno;
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
 private $matricula;
 private $comprovconclusao;
 private $id_login;
 private $id_endereco;
 private $id_telefone;
 public function __construct($id_aluno = 0,$nome= "" ,$sexo= "" ,
                             $datanascim = "0000-00-00 00:00:00",$nomepai= "" ,
                             $nomemae= "" ,$cpf= "" ,$rg= "" ,$rgorgaoexped= "" ,
                             $tituloeleitoral= "" ,$nacionalidade= "" ,
                             $naturalidade= "" ,$email= "" ,$matricula= "" ,
                             $comprovconclusao= "" ,$id_login = 0,
                             $id_endereco = 0,$id_telefone = 0){
 $this->id_aluno = $id_aluno;
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
 $this->matricula = $matricula;
 $this->comprovconclusao = $comprovconclusao;
 $this->id_login = $id_login;
 $this->id_endereco = $id_endereco;
 $this->id_telefone = $id_telefone;

 }

 public static function construct($array){
 $obj = new Aluno();
 $obj->setId_aluno( $array['id_aluno']);
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
 $obj->setMatricula( $array['matricula']);
 $obj->setComprovconclusao( $array['comprovconclusao']);
 $obj->setId_login( $array['id_login']);
 $obj->setId_endereco( $array['id_endereco']);
 $obj->setId_telefone( $array['id_telefone']);
 return $obj;

 }

 public function getId_aluno(){
 return $this->id_aluno;
 }

 public function setId_aluno($id_aluno){
  $this->id_aluno=$id_aluno;
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

 public function getMatricula(){
 return $this->matricula;
 }

 public function setMatricula($matricula){
  $this->matricula=$matricula;
 }

 public function getComprovconclusao(){
 return $this->comprovconclusao;
 }

 public function setComprovconclusao($comprovconclusao){
  $this->comprovconclusao=$comprovconclusao;
 }

 public function getId_login(){
 return $this->id_login;
 }

 public function setId_login($id_login){
  $this->id_login=$id_login;
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
 if($object instanceof Aluno){

 if($this->id_aluno!=$object->id_aluno){
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

 if($this->matricula!=$object->matricula){
 return false;

 }

 if($this->comprovconclusao!=$object->comprovconclusao){
 return false;

 }

 if($this->id_login!=$object->id_login){
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

  return "  [id_aluno:" .$this->id_aluno. "]  [nome:" .$this->nome. "]
            [sexo:" .$this->sexo. "]  [datanascim:" .$this->datanascim. "]
            [nomepai:" .$this->nomepai. "]  [nomemae:" .$this->nomemae. "]
            [cpf:" .$this->cpf. "]  [rg:" .$this->rg. "]
            [rgorgaoexped:" .$this->rgorgaoexped. "]
            [tituloeleitoral:" .$this->tituloeleitoral. "]
            [nacionalidade:" .$this->nacionalidade. "]
            [naturalidade:" .$this->naturalidade. "]
            [email:" .$this->email. "]  [matricula:" .$this->matricula. "]
            [comprovconclusao:" .$this->comprovconclusao. "]
            [id_login:" .$this->id_login. "]  [id_endereco:" .$this->id_endereco. "]
            [id_telefone:" .$this->id_telefone. "]  " ;
 }

 }
?>
