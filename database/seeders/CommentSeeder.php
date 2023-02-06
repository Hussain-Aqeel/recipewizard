<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 1,
            'recipe_id' => 1
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 1
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 2
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 3
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 1,
            'recipe_id' => 4
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 5
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 5
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 6
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 3,
            'recipe_id' => 7
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 8
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 2,
            'recipe_id' => 9
          ],
          [
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor magna vitae quam sollicitudin, sed tristique metus commodo.',
            'user_id' => 1,
            'recipe_id' => 10
          ],
        ]);
    }
}
