<?php

if (empty($app)) {
    require dirname(__DIR__) . '/app/bootstrap.php';
}

$app->get('/', 'Web\\Index');
$app->get('/:name.html', 'Web\\Html');

$app->run();