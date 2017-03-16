<? php
//CONSULTAR TODOS OS ADMINISTRADORES
$app->get('/administradores', function ($request, $response) {
   $query = 'SELECT * FROM tb_administrador';
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

//CONSULTAR UM ADMINISTRADOR ESPECÍFICO
$app->get('/administrador/{id}', function ($request, $response, $arguments) {
    $query = 'SELECT * FROM tb_administrador WHERE id_adm=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_adm', $arguments['id_adm'], PDO::PARAM_INT);
        $stmt->execute();
        $dado = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode($dado));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//DELETAR UM ADMINISTRADOR
$app->delete('/administrador/{id}', function ($request, $response, $arguments) {
    $query = 'DELETE FROM tb_administrador WHERE id_adm=:id';
    try {
        $db = getConnection();
        $stmt = $db->prepare($query);
        $stmt->bindParam('id_adm', $arguments['id_adm'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});

//INSERIR ADMINISTRADOR
$app->post('/administrador', function ($request, $response) {
    $dadoInsert = $request->getParsedBody();
    $query = 'INSERT INTO tb_administrador (nome,
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
                                  ctpsdataexped) VALUES (:nome,
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
                                                            :ctpsdataexped)';
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
        $stmt->execute();
        $dadoInsert['id_adm'] = $db->lastInsertId();
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
                                ctpsnumero=:ctpsnumero
                                ctpsdataexped=:ctpsdataexped WHERE id_adm=:id';
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
        $stmt->bindParam('id_adm', $arguments['id_adm'], PDO::PARAM_INT);
        $stmt->execute();
        $db = null;
        $response->getBody()->write(json_encode($dadoUpdate));
    } catch(PDOException $e) {
        $response->getBody()->write(json_encode($e->getMessage()));
    }
});




 ?>
