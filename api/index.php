<?php
require 'vendor/autoload.php';

function getConnection() {
    $dbh = new PDO('pgsql:dbname=mydb;host=localhost;user=myuser;password=mypass');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

$app = new Slim\App();

require_once 'aluno.php';

$app->run();

?>