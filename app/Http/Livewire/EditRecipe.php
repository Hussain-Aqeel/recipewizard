<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditRecipe extends Component
{
    public Recipe $recipeId;
    
    use WithFileUploads;
    
    public $name;
    public $description;
    public $category;
    public $ingredients = [];
    public $method = [];
    public $img;
    
    /**
     * Validation rules
     *
     * @var string[]
     */
    protected $rules = [
      'name' => 'bail|required',
      'description' => 'bail|required',
      'ingredients' => 'bail|required|filled',
      'method' => 'bail|required|filled',
      'img' => 'nullable|mimes:jpg,jpeg,png,bmp,gif,svg,webp,pdf,docx|max:69000'
    ];
  
    public function mount() {
      $this->name = $this->recipeId->name;
      $this->description = $this->recipeId->description;
      $this->category = $this->recipeId->category_id;
      $this->ingredients = $this->recipeId->ingredients;
      $this->method = $this->recipeId->method;
    }
  
    public function render()
    {
        return view('livewire.edit-recipe', [
          'categories' => Category::all()
        ]);
    }
    
    public function updateRecipe() {
      $this->validate();
  
      $this->recipeId->update([
        'name' => $this->name,
        'description' => $this->description,
        'ingredients' => $this->ingredients,
        'method' => $this->method,
        'image' =>
          $this->img ?
            '/' . $this->img->store('images', 'public') : $this->recipeId->image,
        'category_id' => $this->category
      ]);
  
      session()->flash('flash.banner', 'The recipe is successfully updated');
      session()->flash('flash.bannerStyle', 'success');
  
      $this->redirectRoute('view-recipe',  [
        'recipeId' => $this->recipeId->id
      ]);
    }
    
    public function cancel() {
      $this->redirectRoute('view-recipe',  [
        'recipeId' => $this->recipeId->id
      ]);
    }
}
