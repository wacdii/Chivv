<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// echo $url;

// require_once './app/controllers/HomeController.php';
// require_once './app/controllers/ProductController.php';
require_once './vendor/autoload.php';
require_once './commons/db.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;


    switch($url){
        case '/':
            $ctr = new HomeController();
            echo $ctr->index();
            break;
        case 'detail':
            $ctr = new ProductController();
            echo $ctr->index();
            break;
        case 'adddata':
            $ctr = new CategoryController();
            echo $ctr->addata();
            break;
        case 'editdata':
            $ctr = new CategoryController();
            echo $ctr->editdata();
            break;
        case 'deletedata':
            $ctr = new CategoryController();
            echo $ctr->deletedata();
            break;
            
        default:
            echo "404 not found";
            break;

    }

?>