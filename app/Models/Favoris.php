<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    protected $fillable = ['product_Id', 'user_Id'];
    use HasFactory;
}
