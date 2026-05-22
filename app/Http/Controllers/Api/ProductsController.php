<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Http\Resources\ProductsResource;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return ProductsResource::collection($product);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeProductsRequest $request)
    {
        $product = Product::create($request->validated());
        return new ProductsResource($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return new ProductsResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(storeProductsRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validated());
        return new ProductsResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
