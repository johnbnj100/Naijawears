<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lace extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'number', 'description', 'image'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
