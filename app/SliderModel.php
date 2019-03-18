<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
 /**
  * Indicates if the model should be timestamped.
  *
  * @var bool
  */
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'slider';
 public $timestamps = false;
}
