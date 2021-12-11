<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('categories')->insert([
            'title' => "Turismo deportivo",
            'description' => "Ninguna",
        ]);
        DB::table('categories')->insert([
            'title' => "Turismo natural",
            'description' => "Ninguna",
        ]);
        DB::table('categories')->insert([
            'title' => "Turismo cultural",
            'description' => "Ninguna",
        ]);
        DB::table('categories')->insert([
            'title' => "Turismo de esparcimiento",
            'description' => "Ninguna",
        ]);
    }
}
