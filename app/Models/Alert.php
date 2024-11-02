<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = [
        'product_id',
        'status',
        'date'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
