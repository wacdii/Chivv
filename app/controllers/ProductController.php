<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
class ProductController{
    public function index(){
        // return "Trang chu website";
        $products = Product::all();
        $categorys = Category::all();
        include_once './app/views/detail-product.php';
    }
    public function detail(){
        return "TRang chi tiet";
    }
}
?>