<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{

 use SoftDeletes;
 public $timestamps=false;

 protected  $fillable=['commenttext','user_id','created_at','fileimage'];
 protected $date=['deleted_at'];

 public function getCommenttextAttribute($value){

     return strtoupper($value);
 }

  public function setCommenttextAttribute($value){

    $this->attributes['commenttext']= strtoupper($value);

  }

   public function getFileImageAttribute($value){

     return "/images/posts/".$value;
  }

  public function scopeJadid($query){

    return $query->orderby('commenttext','asc')->get();
  }

 public function User(){
     return $this->belongsTo('App\User');
 }
}
