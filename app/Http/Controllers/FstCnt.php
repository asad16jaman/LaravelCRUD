<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FstCnt extends Controller
{
    public function homSow($id){
        return view("home",["id"=>$id]);
    }
    public function aboutShow(){
        return view("about");
    }
    public function contactShow(){
        return view("contact");
    }
}
