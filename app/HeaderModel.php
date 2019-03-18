<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderModel extends Model
{
    protected $table = 'header';
    public $timestamps = false;

    public function pagename()
    {
        return $this->belongsTo('App\PagemenuModel','page_id');
    }
}
