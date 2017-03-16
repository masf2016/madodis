<?php
//CONSULTAR TODOS AS AULAS
$app->get('/aulas', function ($request, $response) {
   $query = 'SELECT * FROM tb_aula';
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

//CONSULTAR UMA AULA ESPECÍFICA
$app->get('/aula/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_aula WHERE id_aula=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_aula', $arguments['id_aula'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//DELETAR UMA AULA
$app->delete('/aula/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_aula WHERE id_aula=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_aula', $arguments['id_aula'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR ALUNO
$app->post('/aula', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_aula (data_aula,
                                  total_aula_data) VALUES (:data_aula,
                                                            :total_aula_data)';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('data_aula', $dadoInsert['data_aula'] );
        $stmt->bindParam('total_aula_data', $dadoInsert['total_aula_data'], PDO::PARAM_INT);
        $stmt->execute();
        $dadoInsert['id_aula'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//ATUALIZAR AULA
$app->put('/aula/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_aula SET data_aula=:data_aula,
                                total_aula_data=:total_aula_data WHERE id_aula=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('data_aula', $dadoUpdate['data_aula'] );
        $stmt->bindParam('total_aula_data', $dadoUpdate['total_aula_data'], PDO::PARAM_STR);
        $stmt->bindParam('id_aula', $arguments['id_aula'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


 ?>
