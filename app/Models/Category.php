<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Category extends Model
{
     return $this->hasMany(Project::class);
}
