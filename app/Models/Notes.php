<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'img',
        'title',
        'body'
    ];
// Tambahkan relationship ini
public function user()
{
    return $this->belongsTo(User::class);
}
}
