<?php

use Illuminate\Database\Seeder;

class seed_projects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
          [
            "title" => "Imminent",
            "description" => "A horror game in Unreal Engine 4",
            "image" => "http://i.imgur.com/GqLfskd.jpg"
          ],
          [
            "title" => "Balls Of Steel",
            "description" => "A local network arena shooter",
            "image" => "http://i.imgur.com/WBRIcLX.jpg"
          ],
        ]);
    }
}
