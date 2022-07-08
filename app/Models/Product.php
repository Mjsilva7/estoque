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

    public function category() 
    {
        //belongsTo refere a uma categoria
        return $this->belongsTo(Category::class);
    }

    public function brands()
    {
        //hasMany refere a varias categorias
        return $this->belongsTo(Brand::class);
    }

    public function providers()
    {
        return $this->belongsTo(Provider::class);
    }
}
