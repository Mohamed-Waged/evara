<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        // $data['images'] = $request->images->store('products','public');

        $data['images'] = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $data['images'][] = $path;
            }
        }

        Product::create($data);

        toastr()->closeButton()->addsuccess('Product Added Succefully!');

        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $data = $request->validated();
        $product = Product::findOrFail($id);

        
        if ($request->hasFile('images')) {
            if ($product->images) {
                Storage::delete($product->images);
            }
            // $data['image'] = $request->image->store('products');

            $data['images'] = [];
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('products', 'public');
                    $data['images'][] = $path;
                }
            }
        }

        $product->update($data);

        toastr()->closeButton()->addsuccess('Product Updated Succefully!');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        Storage::delete($product->images);
        toastr()->closeButton()->addsuccess('Product Deleted Succefully!');
        return redirect()->route('products.index');
    }
}

