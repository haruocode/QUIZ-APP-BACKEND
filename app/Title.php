<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $visible = ['title', 'description', 'thumbnail'];
}
