<?php

$routing->router->any('{any}', function () {
    return 'Page Not Found';
})->where('any', '(.*)');