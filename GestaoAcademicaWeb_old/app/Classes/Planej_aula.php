<?php
namespace \app\Classes;

/**
 *
 */
class Planej_aula{

private $id_planej_aula;
private $horafinal;
private $horainicial;
private $data;
private $conteudopropost;
private $atividadediscent;
public function __construct($id_planej_aula = 0,$horafinal= "" ,$horainicial= "" ,
                            $data = "0000-00-00 00:00:00",$conteudopropost= "" ,
                            $atividadediscent= "" ){
$this->id_planej_aula = $id_planej_aula;
$this->horafinal = $horafinal;
$this->horainicial = $horainicial;
$this->data = $data;
$this->conteudopropost = $conteudopropost;
$this->atividadediscent = $atividadediscent;

}

public static function construct($array){
$obj = new Planej_aula();
$obj->setId_planej_aula( $array['id_planej_aula']);
$obj->setHorafinal( $array['horafinal']);
$obj->setHorainicial( $array['horainicial']);
$obj->setData( $array['data']);
$obj->setConteudopropost( $array['conteudopropost']);
$obj->setAtividadediscent( $array['atividadediscent']);
return $obj;

}

public function getId_planej_aula(){
return $this->id_planej_aula;
}

public function setId_planej_aula($id_planej_aula){
 $this->id_planej_aula=$id_planej_aula;
}

public function getHorafinal(){
return $this->horafinal;
}

public function setHorafinal($horafinal){
 $this->horafinal=$horafinal;
}

public function getHorainicial(){
return $this->horainicial;
}

public function setHorainicial($horainicial){
 $this->horainicial=$horainicial;
}

public function getData(){
return $this->data;
}

public function setData($data){
 $this->data=$data;
}

public function getConteudopropost(){
return $this->conteudopropost;
}

public function setConteudopropost($conteudopropost){
 $this->conteudopropost=$conteudopropost;
}

public function getAtividadediscent(){
return $this->atividadediscent;
}

public function setAtividadediscent($atividadediscent){
 $this->atividadediscent=$atividadediscent;
}
public function equals($object){
if($object instanceof Planej_aula){

if($this->id_planej_aula!=$object->id_planej_aula){
return false;

}

if($this->horafinal!=$object->horafinal){
return false;

}

if($this->horainicial!=$object->horainicial){
return false;

}

if($this->data!=$object->data){
return false;

}

if($this->conteudopropost!=$object->conteudopropost){
return false;

}

if($this->atividadediscent!=$object->atividadediscent){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id_planej_aula:" .$this->id_planej_aula. "]  [horafinal:" .$this->horafinal. "]
           [horainicial:" .$this->horainicial. "]  [data:" .$this->data. "]
           [conteudopropost:" .$this->conteudopropost. "]
           [atividadediscent:" .$this->atividadediscent. "]  " ;
}

}

 ?>
