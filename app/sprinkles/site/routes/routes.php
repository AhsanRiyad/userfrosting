<?php


/*
use UserFrosting\Sprinkle\Core\Controller\SimpleController;

$app->get('/', function ($request, $response, $args) {
    return $response->write("No format specified");
});

*/



$app->get('/', 'UserFrosting\Sprinkle\Site\Controller\OwlController:getOwls');