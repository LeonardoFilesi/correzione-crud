<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dccomic extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
}
