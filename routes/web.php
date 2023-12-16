<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\FstCnt;
use App\Http\Controllers\studentController;





// Route::get("/home/{id}",[FstCnt::class,'homSow'])->name("homePage");
// Route::get("/contact",[FstCnt::class,'contactShow'])->name("contactPage");
// Route::get("/about",[FstCnt::class,'aboutShow'])->name("aboutPage");

// Route::get("/students",[,"showAllData"]);

Route::controller(studentController::class)->group(function(){
    Route::get("/","showData")->name("homePage");
    Route::post("/insrt","insertStudent")->name("insertPage");
    Route::get("/student/{id}","showDetail")->name("studentPage")->whereNumber("id");
    Route::get("/update/{id}","updateUser")->name("updatePage")->whereNumber("id");
    Route::get("/delete/{id}","deleteData")->name("deleteView")->whereNumber("id");
    Route::post("/update","updateStudent")->name("updateData");
});

Route::view("/insertData","insertPage")->name("insertData");



// Route::("/updateData","insertPage")->name("updatetData");











