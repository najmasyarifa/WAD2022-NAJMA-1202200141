<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class Showrooms extends Model
{
    use HasFactory;

    protected $table = 'showrooms';

    protected $fillable = [
        'id',
        'user_id',
        'nama',
        'owner',
        'brand',
        'puchase_date',
        'drescription',
        'image',
        'status',
    ];
}
