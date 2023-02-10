<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class RecipesList extends Component
{
    use WithPagination;
    public $searchTerm;
    public function render()
    {
      $recipes = Recipe::where('name', 'like', '%'.$this->searchTerm.'%')
        ->where('description', 'like', '%'.$this->searchTerm.'%')
        ->whereHas('category', function ($query) {
          return $query->where('name', 'like', '%'.$this->searchTerm.'%');
        })->paginate(9);
      
        return view('livewire.recipes-list', [
          'recipes' => $recipes
        ]);
    }
    
    public function viewRecipe($id) {
      $this->redirectRoute('view-recipe', [ 'recipeId' => $id]);
    }
}
