<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class RecipesList extends Component
{
    use WithPagination;
    public $search;
  
    public function updatingSearch()
    {
      $this->resetPage();
    }
  
    public function render()
    {
        $recipes = Recipe::where('name', 'like', '%'.$this->search.'%')
          ->orWhereHas('category', function ($query) {
            return $query->where('name', 'like', '%'.$this->search.'%');
          })
          ->orWhereHas('user', function ($query) {
            return $query->where('name', 'like', '%'.$this->search.'%');
          })->paginate(9);

        return view('livewire.recipes-list', [
          'recipes' => $recipes
        ]);
    }
    
    public function viewRecipe($id) {
      $this->redirectRoute('view-recipe', [ 'recipeId' => $id]);
    }
    
    public function addRecipe() {
      return view('livewire.add-recipe', [
        'userId' => auth()->id()
      ]);
    }
}
