<?php

require_once 'vendor/autoload.php';

use Lkeio\Bases\Routing; 
use Lkeio\Bases\Response;

$routing = new Routing();

require_once('routes.php');
require_once('not-found.php');

new Response($routing); 
