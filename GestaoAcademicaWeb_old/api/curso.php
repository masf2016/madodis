<?php

//CONSULTAR TODOS OS CURSOS
$app->get('/cursos', function ($request, $response) {
   $query = 'SELECT * FROM tb_curso';
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


//CONSULTAR UM CURSO ESPECÍFICO
$app->get('/curso/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_curso WHERE id_curso=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_curso', $arguments['id_curso'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


//DELETAR UM CURSO
$app->delete('/curso/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_curso WHERE id_curso=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_curso', $arguments['id_curso'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR CURSO
$app->post('/curso', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_curso (codcursomec,
                                    nome,
                                    cursodescric,
                                    numperiodos,
                                    cursoarea,
                                    tipoensino,
                                    cursodatacriacao,
                                    cursosigla) VALUES (:codcursomec,
                                                        :nome,
                                                        :cursodescric,
                                                        :numperiodos,
                                                        :cursoarea,
                                                        :tipoensino,
                                                        :cursodatacriacao,
                                                        :cursosigla)';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('codcursomec', $dadoInsert['codcursomec'], PDO::PARAM_STR );
        $stmt->bindParam('nome', $dadoInsert['nome'], PDO::PARAM_STR);
        $stmt->bindParam('cursodescric', $dadoInsert['cursodescric'], PDO::PARAM_STR);
        $stmt->bindParam('numperiodos', $dadoInsert['numperiodos'], PDO::PARAM_INT);
        $stmt->bindParam('cursoarea', $dadoInsert['cursoarea'], PDO::PARAM_STR);
        $stmt->bindParam('tipoensino', $dadoInsert['tipoensino'], PDO::PARAM_STR);
        $stmt->bindParam('cursodatacriacao', $dadoInsert['cursodatacriacao'] );
        $stmt->bindParam('cursosigla', $dadoInsert['cursosigla'], PDO::PARAM_STR);
        $stmt->execute();
        $dadoInsert['id_curso'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//ATUALIZAR CURSO
$app->put('/curso/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_curso SET codcursomec=:codcursomec,
                                  nome=:nome,
                                  cursodescric=:cursodescric,
                                  numperiodos=:numperiodos,
                                  cursoarea=:cursoarea,
                                  tipoensino=:tipoensino,
                                  cursodatacriacao=:cursodatacriacao,
                                  cursosigla=:cursosigla WHERE id_curso=:id';
    try {
        $db = getConnection();
        $stmt->bindParam('codcursomec', $dadoUpdate['codcursomec'], PDO::PARAM_STR );
        $stmt->bindParam('nome', $dadoUpdate['nome'], PDO::PARAM_STR);
        $stmt->bindParam('cursodescric', $dadoUpdate['cursodescric'], PDO::PARAM_STR);
        $stmt->bindParam('numperiodos', $dadoUpdate['numperiodos'], PDO::PARAM_INT);
        $stmt->bindParam('cursoarea', $dadoUpdate['cursoarea'], PDO::PARAM_STR);
        $stmt->bindParam('tipoensino', $dadoUpdate['tipoensino'], PDO::PARAM_STR);
        $stmt->bindParam('cursodatacriacao', $dadoUpdate['cursodatacriacao'] );
        $stmt->bindParam('cursosigla', $dadoUpdate['cursosigla'], PDO::PARAM_STR);
        $stmt->bindParam('id_curso', $arguments['id_curso'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});



 ?>
