<?php

//CONSULTAR TODOS OS ALUNOS
$app->get('/alunos', function ($request, $response) {
   $query = 'SELECT * FROM tb_aluno';
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

//CONSULTAR UM ALUNO ESPECÍFICO
$app->get('/aluno/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_aluno WHERE id_aluno=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_aluno', $arguments['id_aluno'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//DELETAR UM ALUNO
$app->delete('/aluno/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_aluno WHERE id_aluno=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_aluno', $arguments['id_aluno'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR ALUNO
$app->post('/aluno', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_aluno (nome,
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
                                  comprovconclusao) VALUES (:nome,
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
                                                            :comprovconclusao)';
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
        $stmt->bindParam('comprovconclusao', $dadoInsert['comprovconclusao'], PDO::PARAM_STR);
        $stmt->execute();
        $dadoInsert['id_aluno'] = $db->lastInsertId();
        $db = null;
        $response->getBody()->write(json_encode($dadoInsert));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//ATUALIZAR ALUNO
$app->put('/aluno/{id}', function ($request, $response, $arguments) {
    $dadoUpdate = $request->getParsedBody();
    $query = 'UPDATE tb_aluno SET nome=:nome,
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
                                comprovconclusao=:comprovconclusao WHERE id_aluno=:id';
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
        $stmt->bindParam('comprovconclusao', $dadoUpdate['comprovconclusao'], PDO::PARAM_STR);
        $stmt->bindParam('id_aluno', $arguments['id_aluno'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

?>
