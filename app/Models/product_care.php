<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_care extends Model
{
    use HasFactory;
    protected $table = 'product_cares';
    protected $primaryKey = 'id';

    protected $fillable = [

        'gudang_id',
        'customer_name',
        'phone_number',
        'longatude_pickup',
        'latitude_pickup',
        'product_care_date',
        'total',
        'payment_method',
        'payment_status',
        'product_care_type',
        'product_care_status',
        'created_by',
        'pickup_at',
        'pickup_by',
        'delivered_at',
        'delivered_by',
        'updated_by'

    ];
}
