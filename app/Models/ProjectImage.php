<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class ProjectImage extends Model
{
    public function project()
        {
            return $this->belongsTo(Project::class);
        }
}
