<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['full_name','phone','adresse'];

    public function orders() {
        return $this->belongsToMany(Product::class,'orders','customer_id','product_id')->withPivot('qty', 'price');
    }
    
}
