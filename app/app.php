<?php

use App\Framework;

$app = new Framework();
/**
 * @throws Exception
 */
function view($view, $params = [])
{
    global $app;
    return $app->render($view, $params);
}
