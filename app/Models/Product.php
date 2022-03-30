<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];
    public function Order()
    {
        
        return $this->belongsToMany(Order::class);
    }

}
