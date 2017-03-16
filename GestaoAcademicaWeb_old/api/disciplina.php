<?php

//CONSULTAR TODOS AS DISCIPLINAS
$app->get('/disciplinas', function ($request, $response) {
   $query = 'SELECT * FROM tb_disciplina';
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

//CONSULTAR UMA DISCIPLINA ESPECÍFICA
$app->get('/disciplina/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_disciplina WHERE id_disciplina=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_disciplina', $arguments['id_disciplina'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


//DELETAR UMA DISCIPLINA
$app->delete('/disciplina/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_disciplina WHERE id_disciplina=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_disciplina', $arguments['id_disciplina'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


//INSERIR DISCIPLINA
$app->post('/disciplina', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_disciplina (nome,
                                         disciplsigla,
                                         creditos,
                                         descricao,
                                         cargahoraria,
                                         modulopertencente,
                                         disciplrequisito) VALUES (:nome,
                                                                   :disciplsigla,
                                                                   :creditos,
                                                                   :descricao,
                                                                   :cargahoraria,
                                                                   :modulopertencente,
                                                                   :disciplrequisito)';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('nome', $dadoInsert['nome'], PDO::PARAM_STR );
        $stmt->bindParam('disciplsigla', $dadoInsert['disciplsigla'], PDO::PARAM_STR);
        $stmt->bindParam('creditos', $dadoInsert['creditos'], PDO::PARAM_INT);
        $stmt->bindParam('descricao', $dadoInsert['descricao'], PDO::PARAM_STR);
        $stmt->bindParam('cargahoraria', $dadoInsert['cargahoraria'], PDO::PARAM_INT);
        $stmt->bindParam('modulopertencente', $dadoInsert['modulopertencente'], PDO::PARAM_INT);
        $stmt->bindParam('disciplrequisito', $dadoInsert['disciplrequisito'], PDO::PARAM_STR);
        $stmt->execute();
        $dadoInsert['id_disciplina'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//ATUALIZAR AULA
$app->put('/disciplina/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_disciplina SET nome=:nome,
                                       disciplsigla=:disciplsigla,
                                       creditos=:creditos,
                                       descricao=:descricao,
                                       cargahoraria=:cargahoraria,
                                       modulopertencente=:modulopertencente,
                                       disciplrequisito=:disciplrequisito WHERE id_disciplina=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('nome', $dadoUpdate['nome'], PDO::PARAM_STR );
        $stmt->bindParam('disciplsigla', $dadoUpdate['disciplsigla'], PDO::PARAM_STR);
        $stmt->bindParam('creditos', $dadoUpdate['creditos'], PDO::PARAM_INT);
        $stmt->bindParam('descricao', $dadoUpdate['descricao'], PDO::PARAM_STR);
        $stmt->bindParam('cargahoraria', $dadoUpdate['cargahoraria'], PDO::PARAM_INT);
        $stmt->bindParam('modulopertencente', $dadoUpdate['modulopertencente'], PDO::PARAM_INT);
        $stmt->bindParam('disciplrequisito', $dadoUpdate['disciplrequisito'], PDO::PARAM_STR);
        $stmt->bindParam('id_disciplina', $arguments['id_disciplina'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});




 ?>
