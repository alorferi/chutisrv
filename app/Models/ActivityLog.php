<?php

namespace App\Models;

use App\Traits\AutoUuid;
use App\User;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ActivityLog extends Model
{
    // use HasFactory;
    use AutoUuid;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
