<?php

if (empty($app)) {
    require __DIR__ . '/app/bootstrap.php';
}

$app->get('/', 'Web\\Index');
$app->get('/:name.html', '\\Html');

$app->run();