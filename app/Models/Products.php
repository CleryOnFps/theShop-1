<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['category_Id' ,
                            'user_Id',
                             'name',
                              'description',
                               'prix'] ;
    use HasFactory;
}
