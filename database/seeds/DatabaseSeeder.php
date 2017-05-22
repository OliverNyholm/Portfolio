<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(seed_projects::Class);
      $this->call(seed_courses::Class);
      $this->call(seed_tools::Class);
      $this->call(seed_course_project::Class);
      $this->call(seed_project_tool::Class);
    }
}
