<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DayFlag extends Model
{
    use SoftDeletes;
    protected $primaryKey  = 'flag';
    protected $table = 'dayflags';
}
