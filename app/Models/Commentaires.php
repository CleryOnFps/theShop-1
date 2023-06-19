<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaires extends Model
{
    protected $fillable = ['user_Id',
                            'product_Id',
                            'text' ] ;
    use HasFactory;
    public function product(): BelongsTo
{
    return $this->belongsTo(Product::class);
}
public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}


}
