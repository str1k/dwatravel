<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_bar extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'contact_bars';
  protected $fillable = array(
        'autorize',
        'telphone',
        'email',
        'line',
        'line_url',
        'line_link'
  );
}
