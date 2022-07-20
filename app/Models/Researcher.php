<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    use HasFactory;



    public function publications(){return $this->belongsToMany(Article::class,'researcher_articles')->with('category');}
}
