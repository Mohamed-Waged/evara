<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'success'  => true ,
            'messaged' => "Get All Product successfully",
            'data'     => $products
        ]);
        // return view('admin.products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $request->image->store('products','public');
        Product::create($data);

        return response()->json([
            'success'  => true ,
            'messaged' => "Product Created successfully"
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json([
            'success'  => true ,
            'messaged' => "Get Product successfully",
            'data'     => $product
        ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $data = $request->validated();
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete($product->image);
            }
            $data['image'] = $request->image->store('products');
        }
        $product->update($data);

        return response()->json([
            'success'  => true ,
            'messaged' => "Product Updated successfully",
            'data'     => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'success'  => true ,
            'messaged' => "Product Deleted successfully",
            'data'     => $product
        ]);
    }
}
