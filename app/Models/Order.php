<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps= false;

    protected $fillable = ['status', 'payment_method', 'payment_status','address'];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }


}
