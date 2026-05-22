<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Http\Resources\OrdersResource;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        return OrdersResource::collection($order);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeOrdersRequest $request)
    {
        $order = Order::create($request->validated());
        return new OrdersResource($order);
    }

    /**
     * Display the specified resource.
     */ 
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return new OrdersResource($order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdersRequest $request, string $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->validated());
        return new OrdersResource($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(null, 204);
    }
}
