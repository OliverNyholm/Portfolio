<?php

use Illuminate\Database\Seeder;

class seed_tools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tools')->insert([
        [
          "name" => "Unreal Engine 4",
          "description" => "Unreal Engine är en utbredd spelmotor utvecklad av Epic Games.
          Den användes första gången i FPS-spelet Unreal och har sedan dess varit spelmotor i flera spel, till exempel
          Unreal Tournament, Tom Clancy's Rainbow Six 3: Raven Shield och reklamspelet America's Army",
          "image" => "https://upload.wikimedia.org/wikipedia/commons/e/ee/Unreal_Engine_logo_and_wordmark.png"
        ],
        [
          "name" => "MonoGame",
          "description" => "MonoGame is free software used by game developers to make their Windows and Windows Phone games run on other systems.
          It currently supports OS X, Linux, iOS, Android, PlayStation Mobile, Nintendo Switch and the OUYA console. It implements the Microsoft XNA 4 Application programming interface.
          It has been used for several popular games, including Bastion and Fez.",
          "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/MonoGame_Logo.svg/512px-MonoGame_Logo.svg.png"
        ],
      ]);
    }
}
