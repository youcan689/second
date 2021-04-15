<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table = 'productions';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
