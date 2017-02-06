<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $table = "categories";
  protected $fillable = ['name'];
}
