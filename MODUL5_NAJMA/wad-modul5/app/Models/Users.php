<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function user () {
        return $this->hasMany('app\Models\Showrooms');
    }

    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'no_hp',
        'email',
        'password',
    ];

    protected $hidden = ['password'];
}
