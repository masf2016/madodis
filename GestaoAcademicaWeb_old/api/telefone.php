<?php
//CONSULTAR TODOS OS TELEFONES
$app->get('/telefones', function ($request, $response) {
   $query = 'SELECT * FROM tb_telefone';
    try {
        $db = getConnection();
        $stmt = $db->query($query);
        $dados = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dados));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//CONSULTAR UM TELEFONE ESPECÍFICO
$app->get('/telefone/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_telefone WHERE id_telefone=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_telefone', $arguments['id_telefone'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//DELETAR UM TELEFONE
$app->delete('/telefone/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_telefone WHERE id_telefone=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_telefone', $arguments['id_telefone'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR TELEFONE
$app->post('/telefone', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_telefone (ddd,
                                        tipotelefone,
                                        numero) VALUES(:ddd,
                                                       :tipotelefone,
                                                       :numero)';

        try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('ddd', $dataTel['ddd'], PDO::PARAM_STR);
        $stmt->bindParam('tipotelefone', $dataTel['tipotelefone'], PDO::PARAM_STR);
        $stmt->bindParam('numero', $dataTel['numero'], PDO::PARAM_STR);
        $stmt->execute();
        $dadoInsert['id_telefone'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
      } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
      }
});

//ATUALIZAR TELEFONE
$app->put('/telefone/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_telefone SET ddd=:ddd,
                                tipotelefone=:tipotelefone,
                                numero=:numero WHERE id_telefone=:id';
        try {
          $db = getConnection();
          $stmt = $db->prepare($query);
          $stmt->bindParam('ddd', $dadoUpdate['ddd'], PDO::PARAM_STR);
          $stmt->bindParam('tipotelefone', $dadoUpdate['tipotelefone'], PDO::PARAM_STR);
          $stmt->bindParam('numero', $dadoUpdate['numero'], PDO::PARAM_STR);
          $stmt->bindParam('id_telefone',$dadoUpdate['id_telefone'], PDO::PARAM_INT)
          $stmt->execute();
          $db = null;
          $response->getBody()->write(json_encode($dadoUpdate));
      } catch(PDOException $e) {
          $response->getBody()->write(json_encode($e->getMessage()));
      }
  });



?>
