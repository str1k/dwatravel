<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutUs extends Model
{
    protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'about_uses';
  protected $fillable = array(
        'ceo_name',
        'ceo_pic',
        'cert_pic1',
        'cert_pic2',
        'cert_pic3',
        'content'
  );

  public $timestamps = true;
}
