<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImages extends Model
{
    protected $fillable = [ 'product_Id',
                            'position', 
                            'image'] ;
    use HasFactory;

/**
 * Get the user that owns the ProductImages
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function product(): BelongsTo
{
    return $this->belongsTo(Product::class);
}

}
