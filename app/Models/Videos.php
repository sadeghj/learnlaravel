<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    public function tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
