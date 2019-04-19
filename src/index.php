<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require_once __DIR__ . '/vendor/autoload.php';

$app = new \Slim\App;
$redis = new Redis();
$redis->connect('db', 6379);

$app->get('/api', function (Request $request, Response $response, array $args) use ($redis) {
    $counter = $redis->get('counter');

    return $response->withJson(['value' => $counter ?: 0]);
});

$app->post('/api/increment', function (Request $request, Response $response, array $args) use ($redis) {
    $counter = $redis->get('counter');
    $counter = $counter ?: 0;
    $counter++;
    $redis->set('counter', $counter);

    return $response->withJson(['value' => $counter]);
});

$app->post('/api/decrement', function (Request $request, Response $response, array $args) use ($redis) {
    $counter = $redis->get('counter');
    $counter = $counter ?: 0;
    $counter--;
    $redis->set('counter', $counter);

    return $response->withJson(['value' => $counter]);

});

$app->run();
