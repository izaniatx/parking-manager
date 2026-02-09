<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Coche extends Model
{
     protected $fillable = [
        'matricula',
        'marca',
        'modelo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
