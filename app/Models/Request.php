<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function user():BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function car():BelongsTo {
        return $this->belongsTo(Car::class, 'car_id');
    }

}
