<?php
namespace application\entities;
/**
 *
 */
class Instituicao{

private $id;
private $nome;
private $Endereco; //FK

public function __construct($id = 0,$nome= "" ,$Endereco = 0){
$this->id = $id;
$this->nome = $nome;
$this->Endereco = $Endereco;
}

public static function construct($array){
    $obj = new Instituicao();

    $obj->setId( $array['id']);
    $obj->setNome( $array['nome']);
    $obj->setEndereco( $array['Endereco']);
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

public function getEndereco(){
return $this->Endereco;
}

public function setEndereco($Endereco){
 $this->Endereco=$Endereco;
}

/**
 *
 */
public function equals($object){
if($object instanceof Instituição){

if($this->id!=$object->id){
return false;
}

if($this->nome!=$object->nome){
return false;
}

if($this->Endereco!=$object->Endereco){
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
           [Endereco:" .$this->Endereco. "]  " ;
         }

}


?>
