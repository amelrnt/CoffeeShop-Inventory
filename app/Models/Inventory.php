<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

    protected $table = 'inventory';

    protected $fillable = [
        'name',
        'quantity_on_hand',
        'reorder_point',
        'lead_time',
        'ordering_cost',
        'holding_cost',
        'unit_price',
        'supplier_id',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
