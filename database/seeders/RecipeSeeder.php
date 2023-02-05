<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
          [
            'name' => 'Buttermilk Pancakes',
            'description' => 'Buttery, rich and drizzled with real maple syrup, these supremely fluffy pancakes are everything you want them to be and more. You know what, maybe just double this recipe right off the bat, because they’re that good—you’re going to gobble them up for breakfast at home and then you might just want to enjoy them again at dinnertime. The pure, all-American comfort of a freshly-cooked stack of homemade pancakes—it’s a warm and cozy sight, an absolutely heavenly smell and (best of all) one of the most delicious ways to kick off the day. We’re not cutting corners here, so our pancake recipe is designed for perfection over ease. But even the fussiest pancake recipe (and ours is far from the fussiest) is still really quite easy because pancakes are inherently a really easy, humble, forgiving kind of food. Whether you’re on your first cup of coffee or your fourth, we promise you’ll be able to whip up these superb pancakes.',
            'ingredients' => [
              '2 cups all-purpose flour',
              '2 tsp baking powder',
              '½ tsp baking soda',
              '¼ cup granulated sugar',
              '1 ½ tsp salt',
              '1 ½ cups buttermilk',
              '3 large egg, yolks and whites separated',
              '6 Tbsp unsalted butter, melted plus more for greasing',
              '2 tsp vanilla extract'
            ],
            'method' => [
              'In a large bowl, sift the flour, baking powder, baking soda, sugar and salt into a large bowl.',
              'In a separate large bowl mix together the buttermilk, egg yolks, melted butter, and vanilla extract until combined. Add the dry ingredients to the bowl and stir until just combined; batter will be slightly lumpy. Do not over mix.',
              'Place egg whites in a separate mixing bowl. Using an electric mixer, whisk until medium peaks form.',
              'Gently fold half of the egg whites into batter with a rubber spatula, then gently fold in the remaining whites.',
              'Heat a griddle or large skillet over medium heat or 350° F. Add a little butter to the hot griddle or pan, once bubbling, add ½ cup pancake batter and let set. When bubbles begin to form, lift with a spatula and flip over. Cook until golden brown on both sides. Continue with remaining batter.',
              'Serve warm along with favorite toppings.'
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 1,
          ],
          [
            'name' => 'Breakfast Quinoa',
            'description' => 'You people know that we’re breakfast lovers. While we love a great, indulgent brunch as much as the next person, we need a reset now and then, too. Plus, it feels so good to start the day with a super healthy bowl of something steamy and warm. For years, that bowl was full of oatmeal, but lately we’ve been mixing it up with a quinoa breakfast porridge! While a lot of us discovered quinoa as a dinnertime food, maybe as the base for a protein-loaded quinoa bowl or as a healthier stand in for rice, there’s no reason this superfood doesn’t deserve a spot on your breakfast table. Simmered in the non-dairy milk of your choice—we love coconut milk, but almond milk or even hemp milk are all delicious, too—this breakfast quinoa recipe makes for an easy and body-boosting vegan breakfast that warms and nourishes like none other.',
            'ingredients' => [
              '1 cup quinoa, rinsed',
              '2 cups coconut milk (or any other plant based milk)',
              '1 tsp cinnamon',
              'pinch of salt',
              '2 tsp vanilla',
              '2 tbsp pure maple syrup',
            ],
            'method' => [
              'Using a fine mesh strainer, rinse the quinoa.',
              'Bring the milk to a boil in a medium sized pot over medium-high heat.',
              'Add the quinoa and bring back up to a boil. Reduce heat to low, cover with a lid and simmer for 15-20 minutes until most of the milk has been absorbed and the quinoa is tender.',
              'Stir in the cinnamon, salt, vanilla and maple syrup until fully combined.',
              'Serve with fresh fruit, toasted nuts or coconut flakes, cream, milk or extra syrup for added sweetness.',
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 1,
          ],
          [
            'name' => 'Soft-Scrambled Eggs',
            'description' => 'Ideally served with a big slab of toasted bread and some good, flaky sea salt. If you like your scrambled eggs hard and rubbery, we’re OK with that (kind of), but this recipe probably isn’t for you. This scrambled egg recipe yields the creamiest, fluffiest, most silky eggs your kitchen has ever seen. And while you can add stuff to it—Parmesan, cream cheese, hot sauce, fresh herbs—these soft-scrambled eggs stand alone, as-is, as a stunning testament to the levels of greatness that can be achieved when the simplest of ingredients are paired with just a little bit of culinary technique.',
            'ingredients' => [
              '6 eggs',
              '½ tsp salt',
              '3 tbsp unsalted butter',
              'flaky salt, for serving',
              'ground pepper, for serving',
              'fresh herbs of your choice, optional',
            ],
            'method' => [
              'In a medium sized bowl beat eggs along with salt until pale yellow, about 30 second.',
              'In a nonstick skillet melt butter over medium-low heat until it begins to start bubbling.',
              'Slowly add eggs to the prepared skillet. Immediately begin sliding eggs across the pan using a rubber spatula. Continue to do this until eggs are barely set, about 2 minutes.',
              'Immediately transfer to plates to avoid over cooking and top with flaky salt and ground pepper.',
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 1,
          ],
          [
            'name' => 'Nuts & Seeds Granola',
            'description' => 'Not only is it super good for you, but it’s one of the few breakfast items in the house that the kids will always agree to eat. Plus, once the batch is made, you can have a big ole bowlful on the table in under five minutes. That’s a win we’ll take any day of the week.',
            'ingredients' => [
              '4 cups rolled oats',
              '2 cups pecans, halves',
              '1/4 cup chia seeds',
              '1 cup pumpkin seeds',
              '1 cup slivered almonds',
              '1/4 cup sesame seeds',
              '1 cup coconut flakes, sweetened or unsweetened',
              '1/2 tsp salt',
              ' 1 tsp cinnamon',
              '1/2 cup coconut oil',
              '1 tsp vanilla extract',
              '1/4 cup real maple syrup, room temp',
              '1 large egg white'
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 1,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 1,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 2,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 2,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 2,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 2,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 2,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 3,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 3,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 3,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 3,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 3,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 4,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 4,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 4,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 4,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 4,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 5,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 5,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 5,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 5,
          ],
          [
            'name' => '',
            'description' => '',
            'ingredients' => [
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'method' => [
              '',
              '',
              '',
              '',
              '',
              ''
            ],
            'image' => '',
            'user_id' => 1,
            'category_id' => 5,
          ],
        ]);
    }
}
