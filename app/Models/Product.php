<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    //caso remova o timestamps da migration
    public $timestamps = false;

    protected $fillable = ['name', 'description', 'price_cost', 'price_resale'];
}
