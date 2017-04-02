<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'programs';
  protected $fillable = array(
        'name',
        'day_count',
        'night_count',
        'content',
        'country',
        'tag_list',
        'airline_pic',
        'tour_pic',
        'pdf',
        'pdf_mode'
  );

  public $timestamps = true;
}
