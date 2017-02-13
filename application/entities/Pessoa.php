<?php
namespace application\entities;

/**
 *
 */
 class Pessoa{

 private $id;
 private $nome;
 private $sexo;
 private $datanascim;
 private $cpf;
 private $rg;
 private $rgorgaoexped;
 private $tituloeleitoral;
 private $telefonefixo;
 private $telefonecelular;
 private $Endereco; //FK
 private $nacionalidade;
 private $naturalidade;
 private $email;
 private $login;
 private $senha;


 public function __construct($id = 0,$nome= "" ,$sexo= "" ,$datanascim= "" ,$cpf= "" ,$rg ="" ,$rgorgaoexped= "" ,$tituloeleitoral= "" ,
                            $telefonefixo= "" ,$telefonecelular= "" ,$Endereco = 0 ,$nacionalidade= "",
                            $naturalidade= "" ,$email= "" ,$login= "" ,$senha= ""){
   $this->id = $id;
   $this->nome = $nome;
   $this->sexo = $sexo;
   $this->datanascim = $datanascim;
   $this->cpf = $cpf;
   $this->rg = $rg;
   $this->rgorgaoexped = $rgorgaoexped;
   $this->tituloeleitoral = $tituloeleitoral;
   $this->telefonefixo = $telefonefixo;
   $this->telefonecelular = $telefonecelular;
   $this->Endereco = $Endereco;
   $this->nacionalidade = $nacionalidade;
   $this->naturalidade = $naturalidade;
   $this->email = $email;
   $this->login = $login;
   $this->senha = $senha;

 }

 public static function construct($array){
   $obj = new Pessoa();
   $obj->setId( $array['id']);
   $obj->setNome( $array['nome']);
   $obj->setSexo( $array['sexo']);
   $obj->setDatanascim( $array['datanascim']);
   $obj->setCpf( $array['cpf']);
   $obj->setRg($array['rg']);
   $obj->setRgorgaoexped($array['rgorgaoexped']);
   $obj->setTituloeleitoral( $array['tituloeleitoral']);
   $obj->setTelefonefixo( $array['telefonefixo']);
   $obj->setTelefonecelular( $array['telefonecelular']);
   $obj->setEndereco( $array['Endereco']);
   $obj->setNacionalidade( $array['nacionalidade']);
   $obj->setNaturalidade( $array['naturalidade']);
   $obj->setEmail( $array['email']);
   $obj->setLogin( $array['login']);
   $obj->setSenha( $array['senha']);
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

 public function getTelefonefixo(){
 return $this->telefonefixo;
 }

 public function setTelefonefixo($telefonefixo){
  $this->telefonefixo=$telefonefixo;
 }

 public function getTelefonecelular(){
 return $this->telefonecelular;
 }

 public function setTelefonecelular($telefonecelular){
  $this->telefonecelular=$telefonecelular;
 }

 public function getEndereco(){
 return $this->Endereco;
 }

 public function setEndereco($Endereco){
  $this->Endereco=$Endereco;
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

 public function getLogin(){
 return $this->login;
 }

 public function setLogin($login){
  $this->login=$login;
 }

 public function getSenha(){
 return $this->senha;
 }

 public function setSenha($senha){
  $this->senha=$senha;
 }

 /**
  *
  */
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

     if($this->telefonefixo!=$object->telefonefixo){
     return false;
     }

     if($this->telefonecelular!=$object->telefonecelular){
     return false;
     }

     if($this->Endereco!=$object->Endereco){
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

     if($this->login!=$object->login){
     return false;
     }

     if($this->senha!=$object->senha){
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
            [nome:" .$this->nome. "]
            [sexo:" .$this->sexo. "]
            [datanascim:" .$this->datanascim. "]
            [cpf:" .$this->cpf. "]
            [rg:" .$this->rg. "]
            [rgorgaoexped:" .$this->rgorgaoexped. "]
            [tituloeleitoral:" .$this->tituloeleitoral. "]
            [telefonefixo:" .$this->telefonefixo. "]
            [telefonecelular:" .$this->telefonecelular. "]
            [Endereco:" .$this->Endereco. "]
            [nacionalidade:" .$this->nacionalidade. "]
            [naturalidade:" .$this->naturalidade. "]
            [email:" .$this->email. "]
            [login:" .$this->login. "]
            [senha:" .$this->senha. "] " ;
          }

 }

?>
