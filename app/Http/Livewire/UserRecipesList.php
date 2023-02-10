<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserRecipesList extends Component
{
  use WithPagination;
  
  public function render()
    {
      $recipes = Recipe::where('user_id', '=', Auth::id())->paginate(9);
        return view('livewire.user-recipes-list', [
          'recipes' => $recipes
        ]);
    }
  
  public function viewRecipe($id) {
    $this->redirectRoute('view-recipe', [ 'recipeId' => $id]);
  }
}
