<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Magazine extends Model
{
     protected $table = "magazines";
     protected $fillable = ['titulo','tapa','numero','fecha','category_id','tag_id','embebed'];



       public function scopeSearch($query,$titulo)
    {
        return $query->where('titulo','LIKE',"%$titulo%");
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsTo('App\Tag');
    }
}
