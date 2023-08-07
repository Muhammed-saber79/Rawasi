<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name'
    ];

    public $translatable = ['name'];

    /**
     * This is a method to represent relation with projects table.
     */
    public function projects() {
        return $this->hasMany(Project::class, 'project_id');
    }
}
