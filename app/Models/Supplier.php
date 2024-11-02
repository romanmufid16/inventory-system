<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'email',
        'name',
        'contact_person',
        'phone_number',
        'address'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
