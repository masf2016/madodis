<?php
namespace application\entities;
/**
 *
 */
class Curso{

private $id;
private $cod;
private $nome;
private $cursodescr; //descricao do curso
private $numperiodos; // periodos do curso
private $cursoarea; // area do curso
private $Instituicao; //FK
private $Coordenador; //FK

public function __construct($id = 0,$cod= "" ,$nome= "" ,$cursodescr= "" ,$numperiodos= 0 ,
                            $cursoarea= "" ,$Instituicao= "" ,$Coordenador = 0){
        $this->id = $id;
        $this->cod = $cod;
        $this->nome = $nome;
        $this->cursodescr = $cursodescr;
        $this->numperiodos = $numperiodos;
        $this->cursoarea = $cursoarea;
        $this->Instituicao = $Instituicao;
        $this->Coordenador = $Coordenador;
}

public static function construct($array){
        $obj = new Curso();

        $obj->setId( $array['id']);
        $obj->setCod( $array['cod']);
        $obj->setNome($array['nome']);
        $obj->setCursodescr($array['cursodescr']);
        $obj->setNumperiodos( $array['numperiodos']);
        $obj->setCursoarea( $array['cursoarea']);
        $obj->setInstituicao($array['Instituicao']);
        $obj->setCoordenador( $array['Coordenador']);
        return $obj;
}

/**
 *  getters and setters da classe
 */
public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}

public function getCod(){
return $this->cod;
}

public function setCod($cod){
 $this->cod=$cod;
}

public function getNome(){
return $this->nome;
}

public function setNome($nome){
 $this->nome=$nome;
}

public function getCursodesc(){
return $this->cursodescr;
}

public function setCursodescr($cursodescr){
 $this->cursodescr=$cursodescr;
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

public function getInstituicao(){
return $this->Instituicao;
}

public function setInstituicao(){
 $this->Instituicao=$Instituicao;
}

public function getCoordenador(){
return $this->Coordenador;
}

public function setCoordenador($Coordenador){
 $this->Coordenador=$Coordenador;
}

/**
 *
 */
public function equals($object){
if($object instanceof Curso){

if($this->id!=$object->id){
return false;
}

if($this->cod!=$object->cod){
return false;
}

if ($this->nome!=$object->nome){
return false;
}

if($this->cursodescr!=$object->cursodescr){
return false;
}

if($this->numperiodos!=$object->numperiodos){
return false;
}

if($this->cursoarea!=$object->cursoarea){
return false;
}

if($this->Instituicao!=$object->Instituicao){
return false;
}

if($this->Coordenador!=$object->Coordenador){
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
           [cod:" .$this->cod. "]
           [nome:" .$this->nome. "]
           [cursodescr:" .$this->cursodescr. "]
           [numperiodos:" .$this->numperiodos. "]
           [cursoarea:" .$this->cursoarea. "]
           [Instituicao:" .$this->Instituicao. "]
           [Coordenador:" .$this->Coordenador. "]  " ;
          }

}


?>
