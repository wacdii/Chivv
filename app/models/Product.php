<?php
namespace App\Models;
use \Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $table = "product";
    protected $primaryKey = 'product_id';
    public $incrementing = false; 
    protected $ketType ='string';
    public $timestamps = false;
}
    
?>