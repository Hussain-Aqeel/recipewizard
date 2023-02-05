<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'name',
      'description',
      'ingredients',
      'method',
      'image',
      'user_id',
      'category_id'
    ];
    
    protected $casts = [
      'ingredients' => 'array',
      'method' => 'array'
    ];
    
    function user(){
      return $this->hasOne(User::class);
    }
    
    function category(){
      return $this->hasMany(Category::class);
    }
  
    function comment(){
      return $this->hasMany(Comment::class);
    }
  
    function rating(){
      return $this->hasMany(Rating::class);
    }
}
