<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtotal extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'quantity', 'total', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
