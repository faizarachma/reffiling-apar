<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function showInventori(){
        $products = Product::all();
        return view('distributor.kelolainventori', compact('products'));
    }

    public function createProducts(){
        return view('distributor.inventori.create-products');
    }

    public function createproduct(Request $request)
    {

        $validated = $request->validate([
            'id_product' => 'required|string|max:20|unique:products,id_product',
            'name' => 'required|string|max:255',
            'id_category_product' => 'required|integer',
            'id_subcategory_product' => 'required|integer',
            'create_sn' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'price_lama' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'pno' => 'required|string|max:255',
            'minqty' => 'nullable|integer|min:1',
            'weight' => 'nullable|numeric|min:0',
            'panjang' => 'nullable|numeric|min:0',
            'lebar' => 'nullable|numeric|min:0',
            'tinggi' => 'nullable|numeric|min:0',
            'type' => 'nullable|string|max:255',
            'kapasitas' => 'nullable|string|max:255',
            'fire_rating' => 'nullable|string|max:255',
            'kelas_kebakaran' => 'nullable|string|max:255',
            'tabung_silinder' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'expired' => 'nullable|integer|min:0',
            'warranty' => 'nullable|integer|min:0',
            'expired_sni' => 'nullable|integer|min:0',
            'warranty_sni' => 'nullable|integer|min:0',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Simpan ke storage public
            $path = $file->storeAs('media', $filename, 'public');  // Perhatikan parameter ketiga 'public'

            // Simpan path relatif ke database
            $validated['media'] = 'media/' . $filename;
        }

         $validated['status'] = 'active';

        Product::create($validated);
        return redirect()->route('kelola.inventori')->with('success', 'Product created successfully.');
    }


    public function show($id)
    {
        $products = Product::findOrFail($id); // ambil data produk berdasarkan ID

        return view('distributor.inventori.detail-product', compact('products'));
    }

    public function destroy($id)
    {

        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('kelola.inventori')->with('success', 'Produk berhasil dihapus.');
    }

}
