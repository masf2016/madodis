<?php
//CONSULTAR TODOS OS CONTEUDOS
$app->get('/conteudos_programaticos', function ($request, $response) {
   $query = 'SELECT * FROM tb_conteud_program';
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

//CONSULTAR UM CONTEUDO ESPECÍFICO
$app->get('/conteudo_programatico/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_conteud_program WHERE id_conteud_program=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_conteud_program', $arguments['id_conteud_program'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


//DELETAR UM CONTEUDO
$app->delete('/conteudo_programatico/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_conteud_program WHERE id_conteud_program=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_conteud_program', $arguments['id_conteud_program'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR CONTEUDO
$app->post('/conteudo_programatico', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_conteud_program (conteudo,
                                              data,
                                              cargahoraria) VALUES (:conteudo,
                                                                    :data,
                                                                    :cargahoraria)';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('conteudo', $dadoInsert['conteudo'], PDO::PARAM_STR );
        $stmt->bindParam('data', $dadoInsert['data'], PDO::PARAM_STR);
        $stmt->bindParam('cargahoraria', $dadoInsert['cargahoraria'], PDO::PARAM_INT);
        $stmt->execute();
        $dadoInsert['id_conteud_program'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//ATUALIZAR CONTEUDO
$app->put('/conteudo_programatico/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_conteud_program SET conteudo=:conteudo,
                                            data=:data,
                                            cargahoraria=:cargahoraria WHERE id_conteud_program=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('conteudo', $dadoUpdate['conteudo'], PDO::PARAM_STR );
        $stmt->bindParam('data', $dadoUpdate['data'], PDO::PARAM_STR);
        $stmt->bindParam('cargahoraria', $arguments['cargahoraria'], PDO::PARAM_INT);
        $stmt->bindParam('id_conteud_program', $arguments['id_conteud_program'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});



 ?>
