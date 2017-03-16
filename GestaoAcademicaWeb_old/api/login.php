<? php

//CONSULTAR TODOS OS LOGIN
$app->get('/logins', function ($request, $response) {
   $query = 'SELECT * FROM tb_login';
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

//CONSULTAR UM LOGIN ESPECÍFICO
$app->get('/login/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_login WHERE id_login=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id', $arguments['id'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//DELETAR UM LOGIN
$app->delete('/login/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_login WHERE id_login=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id', $arguments['id'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR LOGIN
$app->post('/login', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_login (nivelacesso,
                                     login,
                                     senha) VALUES(:nivelacesso,
                                                   :login,
                                                   :senha)';

        try {
          $db = getConnection();
          $stmt = $db->prepare($sqlTel);
          $stmt->bindParam('nivelacesso', $dataTel['nivelacesso'], PDO::PARAM_STR);
          $stmt->bindParam('login', $dataTel['login'], PDO::PARAM_STR);
          $stmt->bindParam('senha', $dataTel['senha'], PDO::PARAM_STR);
          $stmt->execute();
          $dadoInsert['id'] = $db->lastInsertId();
          $db = null;
          $response->getBody()->write(json_encode($dadoInsert));
      } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
      }
});

//ATUALIZAR LOGIN
$app->put('/login/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_login SET nivelacesso=:nivelacesso,
                                  login=:login,
                                  senha=:senha WHERE id_login=:id';
        try {
          $db = getConnection();
          $stmt = $db->prepare($query);
          $stmt->bindParam('ddd', $dadoUpdate['ddd'], PDO::PARAM_STR);
          $stmt->bindParam('tipotelefone', $dadoUpdate['tipotelefone'], PDO::PARAM_STR);
          $stmt->bindParam('numero', $dadoUpdate['numero'], PDO::PARAM_STR);
          $stmt->bindParam('id_login', $arguments['id_login'], PDO::PARAM_INT);
          $stmt->execute();
          $db = null;
          $response->getBody()->write(json_encode($dadoUpdate));
      } catch(PDOException $e) {
          $response->getBody()->write(json_encode($e->getMessage()));
      }
  });



 ?>
