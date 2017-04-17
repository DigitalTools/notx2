<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Report extends Model
{
    use CrudTrait;

 /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */

  //protected $table = 'tags';
  protected $primaryKey = 'id';
  // protected $guarded = [];
  // protected $hidden = ['id'];
  protected $fillable = ['title', 'body', 'date', 'was_clean'];
  public $timestamps = true;

}
