<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    protected $table = 'topups';
    protected $guarded = [
    	'id'
    ];
}
