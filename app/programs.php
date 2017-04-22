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
        'starting_price',
        'day_count',
        'night_count',
        'content',
        'country',
        'tag_list',
        'airline_name',
        'airline_pic',
        'tour_pic',
        'pdf',
        'pdf_mode',
        'show_until',
        'locate_list',
        'program_start',
        'program_end',
        'description'
  );

  public $timestamps = true;
}
