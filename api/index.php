<?php
require 'vendor/autoload.php';

function getConnection() {
    $dbh = new PDO('pgsql:dbname=mydb;host=localhost;user=myuser;password=mypass');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

$app = new Slim\App();

$app->get('/teste', function ($request, $response) {
   $query = 'SELECT * FROM table_name';
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

$app->run();

?>