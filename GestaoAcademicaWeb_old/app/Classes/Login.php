<?php
namespace \app\Classes;
/**
 *
 */
 class Login
 {

 private $id_login;
 private $nivelacesso;
 private $login;
 private $senha;

 public function __construct($id_login = 0,
                             $nivelacesso = "",
                             $login= "" ,
                             $senha= "" )
  {
   $this->id_login = $id_login;
   $this->nivelacesso = $nivelacesso;
   $this->login = $login;
   $this->senha = $senha;
   }

 public static function construct($array)
 {
   $obj = new Login();

   $obj->setId_login( $array['id_login']);
   $obj->setNivelacesso( $array['nivelacesso']);
   $obj->setLogin( $array['login']);
   $obj->setSenha( $array['senha']);

   return $obj;
 }

 /**
  *  Getters e Setters
  */
 public function getId_login()
 {
 return $this->id_login;
 }

 public function setId_login($id_login)
 {
  $this->id_login=$id_login;
 }

 public function getNivelacesso()
 {
 return $this->nivelacesso;
 }

 public function setNivelacesso($nivelacesso)
 {
  $this->nivelacesso=$nivelacesso;
 }

 public function getLogin()
 {
 return $this->login;
 }

 public function setLogin($login)
 {
  $this->login=$login;
 }

 public function getSenha()
 {
 return $this->senha;
 }

 public function setSenha($senha)
 {
  $this->senha=$senha;
 }

 /**
  *
  */
 public function equals($object)
 {
         if($object instanceof Login)
         {

               if($this->id_login!=$object->id_login)
               {
               return false;
               }

               if($this->nivelacesso!=$object->nivelacesso)
               {
               return false;
               }

               if($this->login!=$object->login)
               {
               return false;
               }

               if($this->senha!=$object->senha)
               {
               return false;
               }

         return true;

         }
         else
         {
         return false;
         }
 }

 /**
  *
  */
 public function toString(){
  return "  [id:" .$this->id_login. "]
            [nivel:" .$this->nivelacesso. "]
            [login:" .$this->login. "]
            [senha:" .$this->senha. "]  " ;
  }

 }



?>
