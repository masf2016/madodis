<?php

//CONSULTAR TODOS OS PROFESSORES
$app->get('/professores', function ($request, $response) {
   $query = 'SELECT * FROM tb_professor';
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

//CONSULTAR UM PROFESSOR ESPECÍFICO
$app->get('/professor/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_professor WHERE id_professor=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_professor', $arguments['id_professor'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//DELETAR UM PROFESSOR
$app->delete('/professor/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_professor WHERE id_professor=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_professor', $arguments['id_professor'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


//INSERIR PROFESSOR
$app->post('/professor', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_professor (nome,
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
                                  ctpsnumero,
                                  ctpsdataexped,
                                  titulacao) VALUES (:nome,
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
                                                            :ctpsnumero,
                                                            :ctpsdataexped,
                                                            :titulacao)';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('nome', $dadoInsert['nome'], PDO::PARAM_STR);
        $stmt->bindParam('sexo', $dadoInsert['sexo'], PDO::PARAM_STR);
        $stmt->bindParam('datanascim', $dadoInsert['datanascim']);
        $stmt->bindParam('nomepai', $dadoInsert['nomepai'], PDO::PARAM_STR);
        $stmt->bindParam('nomemae', $dadoInsert['nomemae'], PDO::PARAM_STR);
        $stmt->bindParam('cpf', $dadoInsert['cpf'], PDO::PARAM_STR);
        $stmt->bindParam('rg', $dadoInsert['rg'], PDO::PARAM_STR);
        $stmt->bindParam('rgorgaoexped', $dadoInsert['rgorgaoexped'], PDO::PARAM_STR);
        $stmt->bindParam('tituloeleitoral', $dadoInsert['tituloeleitoral'], PDO::PARAM_STR);
        $stmt->bindParam('nacionalidade', $dadoInsert['nacionalidade'], PDO::PARAM_STR);
        $stmt->bindParam('naturalidade', $dadoInsert['naturalidade'], PDO::PARAM_STR);
        $stmt->bindParam('email', $dadoInsert['email'], PDO::PARAM_STR);
        $stmt->bindParam('matricula', $dadoInsert['matricula'], PDO::PARAM_STR);
        $stmt->bindParam('ctpsnumero', $dadoInsert['ctpsnumero'], PDO::PARAM_STR);
        $stmt->bindParam('ctpsdataexped', $dadoInsert['ctpsdataexped'] );
        $stmt->bindParam('titulacao', $dadoInsert['titulacao'] );
        $stmt->execute();
        $dadoInsert['id_professor'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});


//ATUALIZAR PROFESSOR
$app->put('/professor/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_professor SET nome=:nome,
                                sexo=:sexo,
                                datanascim=:datanascim,
                                nomepai=:nomepai,
                                nomemae=:nomemae,
                                cpf=:cpf,
                                rg=:rg,
                                rgorgaoexped=:rgorgaoexped,
                                tituloeleitoral=:tituloeleitoral,
                                nacionalidade=:nacionalidade,
                                naturalidade=:naturalidade,
                                email=:email,
                                matricula=:matricula,
                                ctpsnumero=:ctpsnumero,
                                ctpsdataexped=:ctpsdataexped,
                                titulacao:=titulacao WHERE id_professor=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('nome', $dadoUpdate['nome'], PDO::PARAM_STR);
        $stmt->bindParam('sexo', $dadoUpdate['sexo'], PDO::PARAM_STR);
        $stmt->bindParam('datanascim', $dadoUpdate['datanascim']);
        $stmt->bindParam('nomepai', $dadoUpdate['nomepai'], PDO::PARAM_STR);
        $stmt->bindParam('nomemae', $dadoUpdate['nomemae'], PDO::PARAM_STR);
        $stmt->bindParam('cpf', $dadoUpdate['cpf'], PDO::PARAM_STR);
        $stmt->bindParam('rg', $dadoUpdate['rg'], PDO::PARAM_STR);
        $stmt->bindParam('rgorgaoexped', $dadoUpdate['rgorgaoexped'], PDO::PARAM_STR);
        $stmt->bindParam('tituloeleitoral', $dadoUpdate['tituloeleitoral'], PDO::PARAM_STR);
        $stmt->bindParam('nacionalidade', $dadoUpdate['nacionalidade'], PDO::PARAM_STR);
        $stmt->bindParam('naturalidade', $dadoUpdate['naturalidade'], PDO::PARAM_STR);
        $stmt->bindParam('email', $dadoUpdate['email'], PDO::PARAM_STR);
        $stmt->bindParam('matricula', $dadoUpdate['matricula'], PDO::PARAM_STR);
        $stmt->bindParam('ctpsnumero', $dadoUpdate['ctpsnumero'], PDO::PARAM_STR);
        $stmt->bindParam('ctpsdataexped', $dadoUpdate['ctpsdataexped'] );
        $stmt->bindParam('titulacao', $dadoUpdate['titulacao'] );
        $stmt->bindParam('id_professor', $arguments['id_professor'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});



 ?>
