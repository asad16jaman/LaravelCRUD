<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function showData(){
        $allUsers = DB::table("students")->get();
        return view("home",["stds"=>$allUsers]);
    }

    //insert data from table...
    public function insertStudent(Request $ob){
        $insertData = DB::table("students")->insert([
            "name" => $ob->stName,
            "roll" => $ob->stRoll,
            "age" => $ob->stAge,
            "city" => $ob->stCity
        ]);
        if($insertData){
            return redirect()->route("homePage");
        }else{
            return "there is some problame";
        }
        
    }

    //show indevidual data in detail
    public function showDetail(int $id){
        $stdn = DB::table("students")
            ->where("id",$id)
            ->get();
        
        return  view("about",["st"=>$stdn]);
    }

    //delete data from student table...
    public function deleteData(int $id){
        $stdn = DB::table("students")
            ->where("id",$id)
            ->delete();
            if($stdn){
                return redirect()->route("homePage");
            }else{
                return "there is some problame";
            }
    }

    //update table
    public function updateUser(int $id){
        $stdn = DB::table("students")
            ->where("id",$id)
            ->get();
        $s = json_decode($stdn);
       
        return  view("update",["st"=>$s[0]]);
    }

    function updateStudent(Request $ob){
        $st = DB::table("students")->where("id",$ob->stId)
            ->update([
                "name" => $ob->stName,
                "roll" => $ob->stRoll,
                "age" => $ob->stAge,
                "city" => $ob->stCity
            ]);
        
       
            return redirect()->route("homePage");
        
        
    }







}
