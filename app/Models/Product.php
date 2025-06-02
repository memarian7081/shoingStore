<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory,softDeletes;
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'quantity',
        'discount',
        'image',
    ];
    public function category(){
        return $this->belongsTo(CategoryProduct::class);
    }
}
