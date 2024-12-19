<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function requests(): HasMany {
        return $this->hasMany(Request::class);
    }

    public function user():BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
