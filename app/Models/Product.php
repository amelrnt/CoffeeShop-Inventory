<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function inventoryItems()
    {
        return $this->belongsToMany(Inventory::class)->withPivot('quantity');
    }

}
