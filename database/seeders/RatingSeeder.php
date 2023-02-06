<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
          [
            'out_of_five' => 5,
            'user_id' => 1,
            'recipe_id' => 1
          ],
          [
            'out_of_five' => 4,
            'user_id' => 2,
            'recipe_id' => 1
          ],
          [
            'out_of_five' => 3,
            'user_id' => 3,
            'recipe_id' => 1
          ],
          [
            'out_of_five' => 5,
            'user_id' => 1,
            'recipe_id' => 2
          ],
          [
            'out_of_five' => 5,
            'user_id' => 2,
            'recipe_id' => 2
          ],
          [
            'out_of_five' => 4,
            'user_id' => 3,
            'recipe_id' => 2
          ],
          [
            'out_of_five' => 2,
            'user_id' => 1,
            'recipe_id' => 3
          ],
          [
            'out_of_five' => 3,
            'user_id' => 2,
            'recipe_id' => 3
          ],
          [
            'out_of_five' => 1,
            'user_id' => 3,
            'recipe_id' => 3
          ],
          [
            'out_of_five' => 4,
            'user_id' => 1,
            'recipe_id' => 4
          ],
          [
            'out_of_five' => 1,
            'user_id' => 2,
            'recipe_id' => 4
          ],
          [
            'out_of_five' => 2,
            'user_id' => 3,
            'recipe_id' => 4
          ],
          [
            'out_of_five' => 5,
            'user_id' => 1,
            'recipe_id' => 5
          ],
          [
            'out_of_five' => 5,
            'user_id' => 2,
            'recipe_id' => 5
          ],
          [
            'out_of_five' => 4,
            'user_id' => 3,
            'recipe_id' => 5
          ],
          [
            'out_of_five' => 2,
            'user_id' => 1,
            'recipe_id' => 6
          ],
          [
            'out_of_five' => 4,
            'user_id' => 2,
            'recipe_id' => 6
          ],
          [
            'out_of_five' => 1,
            'user_id' => 3,
            'recipe_id' => 6
          ],
          [
            'out_of_five' => 5,
            'user_id' => 1,
            'recipe_id' => 7
          ],
          [
            'out_of_five' => 1,
            'user_id' => 2,
            'recipe_id' => 7
          ],
          [
            'out_of_five' => 4,
            'user_id' => 3,
            'recipe_id' => 7
          ],
          [
            'out_of_five' => 5,
            'user_id' => 1,
            'recipe_id' => 8
          ],
          [
            'out_of_five' => 5,
            'user_id' => 2,
            'recipe_id' => 8
          ],
          [
            'out_of_five' => 4,
            'user_id' => 3,
            'recipe_id' => 8
          ],
          [
            'out_of_five' => 5,
            'user_id' => 1,
            'recipe_id' => 9
          ],
          [
            'out_of_five' => 3,
            'user_id' => 2,
            'recipe_id' => 9
          ],
          [
            'out_of_five' => 4,
            'user_id' => 3,
            'recipe_id' => 9
          ],
        ]);
    }
}
