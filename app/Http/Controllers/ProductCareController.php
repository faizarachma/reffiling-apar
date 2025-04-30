<?php

namespace App\Http\Controllers;
use App\Models\Product;



use Illuminate\Http\Request;

class ProductCareController extends Controller
{


   

    public function laporanInventori(){
        return view('distributor.laporan');
    }

}
