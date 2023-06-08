<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
     protected $table = 'books';
    protected $fillable = ['title','description','price','category_id'];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function book_author(){
        return $this->hasMany(Assign_author::class,'book_id','id')->with('author_detail');
    }
    public function review(){
        return $this->hasMany(Review::class,'book_id','id');
    }

    
}
