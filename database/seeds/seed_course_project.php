<?php

use Illuminate\Database\Seeder;

class seed_course_project extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('course_project')->insert([
      [
        "project_id" => 1,
        "course_id" => 1
      ],
      [
        "project_id" => 2,
        "course_id" => 2
      ],
    ]);
    }
}
