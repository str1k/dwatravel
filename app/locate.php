<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locate extends Model
{
   protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'locates';
  protected $fillable = array(
        'country',
        'locate',
        'pic_url'
  );

  public $timestamps = true;
