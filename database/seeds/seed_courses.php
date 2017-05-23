<?php

use Illuminate\Database\Seeder;

class seed_courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('courses')->insert([
        [
          "name" => "Spelmotodriven Produktutveckling",
          "description" => "En rolig kurs"
        ],
        [
          "name" => "C++ med objektorienterad design och analys",
          "description" => "En hemsk kurs"
        ],
      ]);
    }
}
