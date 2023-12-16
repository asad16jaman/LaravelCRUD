<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class studentSeeder extends Seeder
{
    
    public function run(): void
    {
        $json = File::get(path:"database/seeders/allStudent.json");
        $st = collect(json_decode($json));
        $st->each(function($value){
            student::create([
                "name" => $value->name,
                "roll" => $value->roll,
                "age" => $value->age,
                "city" => $value->city,
            ]);
        });

        
    }
}
