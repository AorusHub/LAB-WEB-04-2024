<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = ['category_id', 'name', 'description', 'price', 'stock'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function inventoryLogs() {
        return $this->hasMany(InventoryLog::class);
    }
}