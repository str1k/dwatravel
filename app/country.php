<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'countries';
  protected $fillable = array(
        'country',
        'content',
        'pic_url',
        'region'
  );

  public $timestamps = true;
}
