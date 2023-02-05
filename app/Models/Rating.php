<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'out_of_five',
      'user_id',
      'recipe_id'
    ];
    
    function user() {
      return $this->belongsTo(User::class);
    }
  
    function recipe() {
      return $this->belongsTo(Recipe::class);
    }
}
