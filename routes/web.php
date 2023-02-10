<?php
  
  use App\Http\Livewire\RecipesList;
  use App\Http\Livewire\UserRecipesList;
  use App\Http\Livewire\ViewRecipe;
  use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('recipes');
});

Route::get('/recipes', RecipesList::class)->name('recipes');
Route::get('recipe/{recipeId}', ViewRecipe::class)->name('view-recipe');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  Route::get('/user/{userId}/recipes', UserRecipesList::class)->name('user-recipes');
});

