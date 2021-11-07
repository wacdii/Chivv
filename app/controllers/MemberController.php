<?php
namespace App\Controllers;
use App\Models\Member;

class MemberController{
    public function index(){
        $members = Member::all();
        include_once './app/views/adminPage/member.php';
    }
}
?>