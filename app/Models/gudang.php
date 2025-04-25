<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gudang extends Model
{
    use HasFactory;

    protected $table = 'gudangs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'location',
        'created',
        'status',
        'name_perusahaan',
        'alamat',
        'phone',
        'email',
        'id_province',
        'id_regencies'
    ];


}
