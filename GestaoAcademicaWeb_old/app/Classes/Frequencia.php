<? php
namespace \app\Classes;
/**
 *
 */


class Frequencia{

private $faltas;
private $id_disciplina;
private $id_aula;
private $id_aluno;
public function __construct($faltas = 0,$id_disciplina = 0,$id_aula = 0,$id_aluno = 0){
$this->faltas = $faltas;
$this->id_disciplina = $id_disciplina;
$this->id_aula = $id_aula;
$this->id_aluno = $id_aluno;

}

public static function construct($array){
$obj = new Frequencia();
$obj->setFaltas( $array['faltas']);
$obj->setId_disciplina( $array['id_disciplina']);
$obj->setId_aula( $array['id_aula']);
$obj->setId_aluno( $array['id_aluno']);
return $obj;

}

public function getFaltas(){
return $this->faltas;
}

public function setFaltas($faltas){
 $this->faltas=$faltas;
}

public function getId_disciplina(){
return $this->id_disciplina;
}

public function setId_disciplina($id_disciplina){
 $this->id_disciplina=$id_disciplina;
}

public function getId_aula(){
return $this->id_aula;
}

public function setId_aula($id_aula){
 $this->id_aula=$id_aula;
}

public function getId_aluno(){
return $this->id_aluno;
}

public function setId_aluno($id_aluno){
 $this->id_aluno=$id_aluno;
}
public function equals($object){
if($object instanceof Frequencia){

if($this->faltas!=$object->faltas){
return false;

}

if($this->id_disciplina!=$object->id_disciplina){
return false;

}

if($this->id_aula!=$object->id_aula){
return false;

}

if($this->id_aluno!=$object->id_aluno){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [faltas:" .$this->faltas. "]  [id_disciplina:" .$this->id_disciplina. "]
           [id_aula:" .$this->id_aula. "]  [id_aluno:" .$this->id_aluno. "]  " ;
}

}
 ?>
