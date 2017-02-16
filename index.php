<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors','On');

require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';

$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("resouces/views/");

/*
*  encaminhamento para as paginas contidas na view
*/
$app -> get('/', function($request, $response, $args){
        $response = $this->view->render($response,'template.php');

        return $response;
});
$app -> run();
?>
