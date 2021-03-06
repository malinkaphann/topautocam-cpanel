<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotion';

    public static function list($size) {
        return Promotion::orderBy('name', 'ASC')->take($size)->get();
    }
}
