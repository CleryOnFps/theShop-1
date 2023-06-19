<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    protected $fillable = ['user_Id',
                            'product_Id',
                            'text' ] ;
    use HasFactory;
}
