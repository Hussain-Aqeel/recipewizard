<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddRecipe extends Component
{
  use WithFileUploads;
  
  public $name;
  public $category;
  public $description;
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
    'category' => 'bail|required',
    'img' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp,pdf,docx|max:69000'
  ];
  
    public function render()
    {
        return view('livewire.add-recipe', [
          'categories' => Category::all()
        ]);
    }
    
    public function saveRecipe() {
      $this->validate();
      
      Recipe::create([
        'name' => $this->name,
        'description' => $this->description,
        'ingredients' => $this->ingredients,
        'method' => $this->method,
        'image' => '/' . $this->img->store('images', 'public'),
        'user_id' => auth()->id(),
        'category_id' => $this->category
      ]);
  
      session()->flash('flash.banner', 'Your recipe is successfully added!');
      session()->flash('flash.bannerStyle', 'success');
      
      $this->redirectRoute('user-recipes', [ 'userId' => auth()->id() ]);
    }
}
