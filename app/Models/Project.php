<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProjectImage;

class Project extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
