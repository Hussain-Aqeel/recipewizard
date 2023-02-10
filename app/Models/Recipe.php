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
  
    protected $with = ['user', 'category'];
    
    protected $casts = [
      'ingredients' => 'array',
      'method' => 'array'
    ];
    
    function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
    
    function category(){
      return $this->belongsTo(Category::class, 'category_id');
    }
  
    function comment(){
      return $this->hasMany(Comment::class)->orderByDesc('created_at');
    }
  
    function rating(){
      return $this->hasMany(Rating::class);
    }
}
