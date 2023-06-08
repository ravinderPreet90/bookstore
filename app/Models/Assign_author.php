<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign_author extends Model
{
    use HasFactory;
     protected $table = 'book_author';
    protected $fillable = ['book_id','author_id'];
    public function author_detail(){
        return $this->hasOne(Author::class,'id','author_id');
    }
}
