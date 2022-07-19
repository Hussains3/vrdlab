<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    protected $with = [
        'category',
        'authours',
        'researchers',
    ];


    // public function category(){return $this->belongsTo(Category::class);}
    public function category()
    {
      return $this->belongsTo(Category::class,'catetgory_id','id');
    }
    public function authours(){return $this->belongsToMany(Author::class,'author_articles');}
    public function researchers(){return $this->belongsToMany(Researcher::class,'researcher_articles');}
}
