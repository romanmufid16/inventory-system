<?php

namespace App\Models;

use App\Models\Alert;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'supplier_id',
        'category_id',
        'name',
        'quantity',
        'price'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function alert(){
        return $this->hasMany(Alert::class);
    }
}
