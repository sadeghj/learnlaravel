<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public function Imageable()
    {
        return $this->morphTo();
    }
}
