<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_care_item extends Model
{
    use HasFactory;
    protected $table = 'product_care_items';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'product_care_id',
        'serial_number',
        'maintenance_count',
        'refil_count',
        'created_by'
    ];
}
