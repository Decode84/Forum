<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastAvatar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avatar_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
