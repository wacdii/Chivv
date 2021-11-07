<?php
namespace App\Models;
use \Illuminate\Database\Eloquent\Model;
class Member extends Model{
    protected $table = 'member';
    protected $fillable = ['member_name', 'member_email', 'member_phone', 'member_address'];
}
?>