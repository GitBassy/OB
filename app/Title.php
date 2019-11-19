<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $casts = ['title_id' => 'string'];
    protected $primaryKey = 'title_id';
    protected $table = 'titles';
}
