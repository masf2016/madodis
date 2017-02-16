<?php
require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';

$app = new \Slim\App(["settings" => $config]);
$app -> get('/', function($request, $response, $args){
        $name = $request->getAttribute('name');
        $response->getBody()->write("OLá");

        return $response;
});
$app -> run();
?>
