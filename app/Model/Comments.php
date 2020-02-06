<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use SoftDeletes;
 protected  $fillable=['commenttext','user_id'];
 protected $date=['deleted_at'];


 public function User(){
     return $this->belongsTo('App\User');
 }
}
