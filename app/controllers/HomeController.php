<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController{
    public function index(){
        // return "Trang chu website";
        $products = Product::all();
        include_once './app/views/homepage.php';
    }
    public function detail(){
        return "TRang chi tiet";
    }
}
?>