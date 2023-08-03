<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['title','description','location'];
    protected $guarded =[];

    public function images() : MorphMany {
        return $this->morphMany(Image::class, 'imageable');
    }
}
