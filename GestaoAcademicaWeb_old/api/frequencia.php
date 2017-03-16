<?php

//CONSULTAR TODOS AS AULAS
$app->get('/frequencias', function ($request, $response) {
   $query = 'SELECT * FROM tb_frequencia';
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


//CONSULTAR UMA FREQUENCIA ESPECÍFICA
$app->get('/frequencia/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_frequencia WHERE ?????';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('?????', $arguments['?????'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//DELETAR UMA FREQUENCIA
$app->delete('/frequencia/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_frequencia WHERE ?????=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('?????', $arguments['?????'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR FREQUENCIA
$app->post('/frequencia', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_frequencia (?????,
                                        ?????) VALUES (:data_aula,
                                                       :total_aula_data)';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('?????', $dadoInsert['?????'] );
        $stmt->bindParam('?????', $dadoInsert['?????'], PDO::PARAM_INT);
        $stmt->execute();
        $dadoInsert['?????'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//ATUALIZAR FREQUENCIA
$app->put('/frequencia/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_frequencia SET ?????=:data_aula,
                                       ?????=:total_aula_data WHERE ?????=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('?????', $dadoUpdate['?????'] );
        $stmt->bindParam('?????', $dadoUpdate['?????'], PDO::PARAM_STR);
        $stmt->bindParam('?????', $arguments['?????'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


 ?>
