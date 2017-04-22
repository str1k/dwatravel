<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class airline extends Model
{
	   protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'airlines';
  protected $fillable = array(
        'airline_name',
        'pic_url'
  );

    
}
