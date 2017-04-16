<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cover extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'covers';
  protected $fillable = array(
        'page',
        'pic_url',
        'href_url',
        'order'
  );

  public $timestamps = true;
}
