<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'schedules';
  protected $fillable = array(
        'program_id',
        'seat',
        'departure',
        'arrival',
        'country',
        'is_discount',
        'adult_price',
        'adult_discount',
        'child_price',
        'child_discount',
        'infant_price',
        'show_until'
  );

  public $timestamps = true;
}
