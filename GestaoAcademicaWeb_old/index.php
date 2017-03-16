<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors','On');

require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';


function getConnection() {
    $dbuser='postgres';
    $dbpass='root';
    $dbname='db_madodis';
    $dbh = new PDO('pgsql:host=localhost',$dbname, $dbuser, $dbpass);
    $dbh->exec('set names utf8');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbh;
}

$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("resouces/views/");

/*
*  encaminhamento para as paginas contidas na view
*/
$app -> get('/', function($request, $response, $args){
        $response = $this->view->render($response,'template.php');
        return $response;
})->setName('home');


$app->post('/cadastroAluno', function ($request, $response) {
    $dataLog = $request->getParsedBody();
    $dataTel = $request->getParsedBody();
    $dataEnd = $request->getParsedBody();
    $dataAlu = $request->getParsedBody();

    $sqlTel = 'INSERT INTO tb_login (nivel,
                                     login,
                                     senha) VALUES(:nivel,
                                                   :login,
                                                   :senha)';

                          ################## 02 março ##############



    $sqlTel = 'INSERT INTO tb_telefone (ddd,
                                        tipotelefone,
                                        numero) VALUES(:ddd,
                                                       :tipotelefone,
                                                       :numero)';
    try {
      $db = getConnection();
      $stmt = $db->prepare($sqlTel);
      $stmt->bindParam('ddd', $dataTel['ddd'], PDO::PARAM_INT);
      $stmt->bindParam('tipotelefone', $dataTel['tipotelefone'], PDO::PARAM_INT);
      $stmt->bindParam('numero', $dataTel['numero'], PDO::PARAM_INT);
      $stmt->execute();
      $dataTel['id'] = $db->lastInsertId();
      $db = null;
      $response->getBody()->write(json_encode($dataTel));
    } catch (PDOException $e) {
      $response->getBody()->write(json_encode($e->getMessage()));
    }

    $sqlEnd = 'INSERT INTO tb_endereco (logradouro,
                                             numero,
                                             complemento,
                                             bairro,
                                             cidade,
                                             estado,
                                             cep) VALUES (:logradouro,
                                                          :numero,
                                                          :complemento,
                                                          :bairro,
                                                          :cidade,
                                                          :estado,
                                                          :cep)';

    try {
      $db = getConnection();
      $stmt = $db->prepare($sqlEnd);
      $stmt->bindParam('logradouro', $dataEnd['logradouro'], PDO::PARAM_INT);
      $stmt->bindParam('numero', $dataEnd['numero'], PDO::PARAM_INT);
      $stmt->bindParam('complemento', $dataEnd['complemento'], PDO::PARAM_INT);
      $stmt->bindParam('bairro', $dataEnd['bairro'], PDO::PARAM_INT);
      $stmt->bindParam('cidade', $dataEnd['cidade'], PDO::PARAM_INT);
      $stmt->bindParam('estado', $dataEnd['estado'], PDO::PARAM_INT);
      $stmt->bindParam('cep', $dataEnd['cep'], PDO::PARAM_INT);
      $stmt->execute();
      $dataEnd['id_endereco'] = $db->lastInsertId();
      $db = null;
      $response->getBody()->write(json_encode($dataEnd));
    } catch (PDOException $e) {
      $response->getBody()->write(json_encode($e->getMessage()));
    }

$idlog = getIdLogin();
$idtel = getIdTelefone();
$idend = getIdEndereco();

 $sqlAlu = 'INSERT INTO tb_aluno (nome,
                                  sexo,
                                  datanascim,
                                  nomepai,
                                  nomemae,
                                  cpf,
                                  rg,
                                  rgorgaoexped,
                                  tituloeleitoral,
                                  nacionalidade,
                                  naturalidade,
                                  email,
                                  matricula,
                                  comprovconclusao,
                                  id_login,
                                  id_endereco,
                                  id_telefone) VALUES (:nome,
                                                       :sexo,
                                                       :datanascim,
                                                       :nomepai,
                                                       :nomemae,
                                                       :cpf,
                                                       :rg,
                                                       :rgorgaoexped,
                                                       :tituloeleitoral,
                                                       :nacionalidade,
                                                       :naturalidade,
                                                       :email,
                                                       :matricula,
                                                       :comprovconclusao,
                                                       :id_login,
                                                       :id_endereco,
                                                       :id_telefone
                                                       :)';
    try {
        $db = getConnection();
        $stmt = $db->prepare($sqlAlu);
        $stmt->bindParam('nome', $dataAlu['nome'], PDO::PARAM_INT);
        $stmt->bindParam('sexo', $dataAlu['sexo'], PDO::PARAM_INT);
        $stmt->bindParam('datanascim', $dataAlu['datanascim'], PDO::PARAM_INT);
        $stmt->bindParam('nomepai', $dataAlu['nomepai'], PDO::PARAM_INT);
        $stmt->bindParam('cpf', $dataAlu['cpf'], PDO::PARAM_INT);
        $stmt->bindParam('rg', $dataAlu['rg'], PDO::PARAM_INT);
        $stmt->bindParam('rgorgaoexped', $dataAlu['rgorgaoexped'], PDO::PARAM_INT);
        $stmt->bindParam('tituloeleitoral', $dataAlu['tituloeleitoral'], PDO::PARAM_INT);
        $stmt->bindParam('nacionalidade', $dataAlu['nacionalidade'], PDO::PARAM_INT);
        $stmt->bindParam('naturalidade', $dataAlu['naturalidade'], PDO::PARAM_INT);
        $stmt->bindParam('email', $dataAlu['email'], PDO::PARAM_INT);
        $stmt->bindParam('matricula', $dataAlu['matricula'], PDO::PARAM_INT);
        $stmt->bindParam('comprovconclusao', $dataAlu['comprovconclusao'], PDO::PARsAM_INT);
        $stmt->bindParam('id_login', $idlog, PDO::PARsAM_INT);
        $stmt->bindParam('id_end', $idend, PDO::PARsAM_INT);
        $stmt->bindParam('id_tel', $idtel, PDO::PARsAM_INT);
        $stmt->execute();
        $dataAlu['id_aluno'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dataAlu));

    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});




$app -> run();


function getIdTelefone()
{
    $stmt = getConnection()->query("SELECT id_telefone FROM tb_telefone WHERE id_telefone = ".$dataTel['id_telefone']."");
    $id_tel = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "{id:".json_encode($id_tel)."}";
}

function getIdEndereco()
{
    $stmt = getConnection()->query("SELECT id_endereco FROM tb_endereco WHERE id_endereco = ".$dataEnd['id_endereco']."");
    $id_end = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "{id:".json_encode($id_end)."}";
}
?>
