<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singlecart extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'image', 'name', 'description', 'number'];
}
