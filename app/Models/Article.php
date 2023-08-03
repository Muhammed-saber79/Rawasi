<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasFactory , HasTranslations;

    protected $guarded =[];
    public $translatable = ['title','description'];

    public function comments()  {
        return $this->hasMany(Comment::class , 'article_id');
    }

}
