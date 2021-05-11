<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name','product_description','status','price','old_price','cat_id','sub_cat_id'];

    public function imageProduct() {
        return $this->hasMany(ImageProduct::class,'product_id');
    }

    public function customer() {
        return $this->belongsToMany(Customer::class,'orders','product_id','customer_id');
    }

}