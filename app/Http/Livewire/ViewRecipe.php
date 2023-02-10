<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewRecipe extends Component
{
  public Recipe $recipeId;
  
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
}
