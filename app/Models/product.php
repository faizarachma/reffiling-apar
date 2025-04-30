<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_product',
        'name',
        'id_category_product',
        'id_subcategory_product',
        'create_sn',
        'price',
        'price_lama',
        'stock',
        'pno',
        'minqty',
        'weight',
        'panjang',
        'lebar',
        'tinggi',
        'type',
        'kapasitas',
        'fire_rating',
        'kelas_kebakaran',
        'tabung_silinder',
        'description',
        'expired',
        'warranty',
        'expired_sni',
        'warranty_sni',
        'status',
        'media',

    ];

    protected $casts = [
        'price' => 'float',
        'price_lama' => 'float',
        'weight' => 'float',
        'panjang' => 'float',
        'lebar' => 'float',
        'tinggi' => 'float',

    ];
}
