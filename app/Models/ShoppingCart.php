<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    public function variants(){
        return $this->hasMany(ShoppingCartVariant::class, 'shopping_cart_id');
    }
    
    public function specifications(){
        return $this->hasMany(ProductSpecification::class);
    }

    public function product(){
        return $this->belongsTo(Product::class)->select(['id','name','short_name','price','unitkg','offer_price','thumb_image','slug']);
    }


}
