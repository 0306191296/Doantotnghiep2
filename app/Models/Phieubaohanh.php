<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phieubaohanh extends Model
{
    use HasFactory;
    protected $fillable = [
        'mabh',
        'maspr',
        'masp',
        'imei'
    ];
}
