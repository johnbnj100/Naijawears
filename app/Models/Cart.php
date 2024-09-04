<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'image', 'name', 'description', 'number', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
