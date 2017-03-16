<?php
namespace \app\Classes;
/**
 *
 */

class Aula{

private $id_aula;
private $data_aula;
private $total_aula_data;
private $id_disciplina;
private $id_planej_aula;
public function __construct($id_aula = 0,$data_aula = "0000-00-00 00:00:00",
                            $total_aula_data = 0,$id_disciplina = 0,
                            $id_planej_aula = 0){
$this->id_aula = $id_aula;
$this->data_aula = $data_aula;
$this->total_aula_data = $total_aula_data;
$this->id_disciplina = $id_disciplina;
$this->id_planej_aula = $id_planej_aula;

}

public static function construct($array){
$obj = new Aula();
$obj->setId_aula( $array['id_aula']);
$obj->setData_aula( $array['data_aula']);
$obj->setTotal_aula_data( $array['total_aula_data']);
$obj->setId_disciplina( $array['id_disciplina']);
$obj->setId_planej_aula( $array['id_planej_aula']);
return $obj;

}

public function getId_aula(){
return $this->id_aula;
}

public function setId_aula($id_aula){
 $this->id_aula=$id_aula;
}

public function getData_aula(){
return $this->data_aula;
}

public function setData_aula($data_aula){
 $this->data_aula=$data_aula;
}

public function getTotal_aula_data(){
return $this->total_aula_data;
}

public function setTotal_aula_data($total_aula_data){
 $this->total_aula_data=$total_aula_data;
}

public function getId_disciplina(){
return $this->id_disciplina;
}

public function setId_disciplina($id_disciplina){
 $this->id_disciplina=$id_disciplina;
}

public function getId_planej_aula(){
return $this->id_planej_aula;
}

public function setId_planej_aula($id_planej_aula){
 $this->id_planej_aula=$id_planej_aula;
}
public function equals($object){
if($object instanceof Aula){

if($this->id_aula!=$object->id_aula){
return false;

}

if($this->data_aula!=$object->data_aula){
return false;

}

if($this->total_aula_data!=$object->total_aula_data){
return false;

}

if($this->id_disciplina!=$object->id_disciplina){
return false;

}

if($this->id_planej_aula!=$object->id_planej_aula){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id_aula:" .$this->id_aula. "]  [data_aula:" .$this->data_aula. "]
           [total_aula_data:" .$this->total_aula_data. "]
           [id_disciplina:" .$this->id_disciplina. "]  [id_planej_aula:" .$this->id_planej_aula. "]  " ;
}

}

 ?>
