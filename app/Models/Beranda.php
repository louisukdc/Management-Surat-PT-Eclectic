<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;
    protected $table = 'beranda_controllers';
    // protected $filltable = [
    //     'nosurat', 'namapembuat'
    // ];
    protected $guarded = [];
}
