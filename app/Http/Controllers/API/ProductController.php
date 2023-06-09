<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'succes' => true,
            'message' => 'Daftar Data Produk',
            'data' => $products
        ], 200);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return response()->json([
                'succes' => true,
                'message' => 'Detail Data Produk',
                'data' => $product
            ], 200);
        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Data Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }                    
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brand' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'succes' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        // // ubah nama file
        // $imageName = time() . '.' . $request->image->extension();

        // // simpan file ke folder public/product
        // Storage::putFileAs('public/product', $request->image, $imageName);

        $product = Product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
            // 'image' => $imageName,
        ]);

        return response()->json([
            'succes' => true,
            'message' => 'produk berhasil ditambahkan',
            'data' => $product
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brand' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'succes' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }
        
        $product = Product::find($id);

        if ($product) {
            $product = $product->update([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
            ]);

            return response()->json([
                'succes' => true,
                'message' => 'produk berhasil diupdate',
                'data' => Product::find($id)
            ], 200);

        } else {
            return response()->json([
                'succes' => false,
                'message' => 'produk tidak ditemukan',
                'data' => ''
            ], 404);
        }       

    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();

            return response()->json([
                'succes' => true,
                'message' => 'Produk berhasil dihapus',
                'data' => null
            ], 200);

        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }                    
    }

}
