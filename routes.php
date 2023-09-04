<?php

namespace App;

use App\Framework;

$app = new Framework();

$app::get('/', 'PageController', 'home');
$app::get('/folder1', 'PageController', 'folder1');
$app::get('/folder2', 'PageController', 'folder2');


$app->run();
