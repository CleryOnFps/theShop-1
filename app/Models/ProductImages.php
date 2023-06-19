<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $fillable = [ 'product_Id',
                            'position', 
                            'image'] ;
    use HasFactory;
}
