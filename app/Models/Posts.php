<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function photos()
    {
        return $this->morphMany("App\Models\Photos","imageable");
    }

    public function tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
