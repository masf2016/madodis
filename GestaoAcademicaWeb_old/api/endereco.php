<?php
//CONSULTAR TODOS OS ENDERECOS
$app->get('/enderecos', function ($request, $response) {
   $query = 'SELECT * FROM tb_endereco';
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

//CONSULTAR UM ENDERECO ESPECÍFICO
$app->get('/endereco/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_endereco WHERE id_endereco=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_endereco', $arguments['id_endereco'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


//DELETAR UM ENDERECO
$app->delete('/endereco/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_endereco WHERE id_endereco=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_endereco', $arguments['id_endereco'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR ALUNO
$app->post('/endereco', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
         $query = 'INSERT INTO tb_endereco (logradouro,
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
        $stmt = $db->prepare($query);
        $stmt->bindParam('logradouro', $dataEnd['logradouro'], PDO::PARAM_STR);
        $stmt->bindParam('numero', $dataEnd['numero'], PDO::PARAM_STR);
        $stmt->bindParam('complemento', $dataEnd['complemento'], PDO::PARAM_STR);
        $stmt->bindParam('bairro', $dataEnd['bairro'], PDO::PARAM_STR);
        $stmt->bindParam('cidade', $dataEnd['cidade'], PDO::PARAM_STR);
        $stmt->bindParam('estado', $dataEnd['estado'], PDO::PARAM_STR);
        $stmt->bindParam('cep', $dataEnd['cep'], PDO::PARAM_STR);
        $stmt->execute();
        $dadoInsert['id_endereco'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
      } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
      }
});

//ATUALIZAR ALUNO
$app->put('/endereco/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_endereco SET logradouro=:logradouro,
                                numero=:numero,
                                complemento=:complemento,
                                bairro=:bairro,
                                cidade=:cidade,
                                estado=:estado,
                                cep=:cep  WHERE id_endereco=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('logradouro', $dadoUpdate['logradouro'], PDO::PARAM_STR);
        $stmt->bindParam('numero', $dadoUpdate['numero'], PDO::PARAM_STR);
        $stmt->bindParam('complemento', $dadoUpdate['complemento'], PDO::PARAM_STR);
        $stmt->bindParam('bairro', $dadoUpdate['bairro'], PDO::PARAM_STR);
        $stmt->bindParam('cidade', $dadoUpdate['cidade'], PDO::PARAM_STR);
        $stmt->bindParam('estado', $dadoUpdate['estado'], PDO::PARAM_STR);
        $stmt->bindParam('cep', $dadoUpdate['cep'], PDO::PARAM_STR);
        $stmt->bindParam('id_endereco', $arguments['id_endereco'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


?>
