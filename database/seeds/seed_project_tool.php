<?php

use Illuminate\Database\Seeder;

class seed_project_tool extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('project_tool')->insert([
      [
        "project_id" => 1,
        "tool_id" => 1
      ],
      [
        "project_id" => 2,
        "tool_id" => 1
      ],
    ]);
    }
}
