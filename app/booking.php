<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
     protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'bookings';
  protected $fillable = array(
        'program_id',
        'departure',
        'adult',
        'children_bed',
        'children_no_bed',
        'infant',
        'single_room',
        'join_land',
        'customer_name',
        'customer_tel',
        'customer_email',
        'customer_passport',
        'customer_more',
        'adult_price',
        'children_bed_price',
        'children_no_bed_price',
        'infant_price',
        'single_room_price',
        'join_lane_price',
        'confirm',
        'cancel',
        'discount'
  );

  public $timestamps = true;
}
