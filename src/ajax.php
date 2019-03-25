<?php

require "app.php";

$act = $_REQUEST['act'] ?? 'error';
$photo = $_REQUEST['photo'] ?? 'photo1.jpg';

$return = array();
$app = new app();

switch ($act){

    case 'grayscale':
        $app->showImage($app->grayscale($photo));
        break;

    case 'negative':
        $app->showImage($app->negative($photo));
        break;

    case 'diffuse':
        $app->showImage($app->diffuse($photo));
        break;

    case 'testHSV':
        $app->showImage($app->testHSV($photo));
        break;

    case 'lightGraph':
        $app->showImage($app->lightGraph($photo));
        break;

    //Adaptive contrast enhancement with local statistics
    //ACEwLS
    case 'ACEwLS':
        $app->showImage($app->ACEwLS($photo, $_REQUEST['r'], $_REQUEST['k0'], $_REQUEST['k1'], $_REQUEST['k2'], $_REQUEST['k3'], $_REQUEST['red']));
        break;

    case 'lightLinear':
        $app->showImage($app->lightLinear($photo));
        break;

    case 'error':
    default:
        $return['code'] = "ERROR";
        $return['text'] = "Invalid action";

}