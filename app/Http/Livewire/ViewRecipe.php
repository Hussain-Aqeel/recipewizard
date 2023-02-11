<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class ViewRecipe extends Component
{
    public Recipe $recipeId;
    
    public $deleteModal = false;
    
    public $comment;
    
    public function render()
    {
        return view('livewire.view-recipe', [ 'recipe' => $this->recipeId ]);
    }
    
    public function addComment() {
        if($this->comment != '') {
            $comment = [
              'content' => $this->comment,
              'user_id' => Auth::id(),
              'recipe_id' => $this->recipeId->id,
            ];
            
            $comment = Comment::create($comment);
            
            $this->reset(['comment']);
            
            $this->recipeId->refresh();
            
        }
    }
  
  public function deleteRecipe($id) {
    $recipe = Recipe::find($id);
    
    // we must delete the picture of the recipe first
    File::delete($recipe->image);
    
    $recipe->delete();
    
    // finally we redirect to the list of user recipes
    session()->flash('flash.banner', 'Sadly, Your delicious recipe is deleted.');
    session()->flash('flash.bannerStyle', 'danger');
    
    $this->redirectRoute('user-recipes', [ 'userId', auth()->id() ]);
  }
  
  public function toggle() {
      $this->deleteModal = ! $this->deleteModal;
  }
  
}
