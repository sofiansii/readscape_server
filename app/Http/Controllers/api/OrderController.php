<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\OrderLines;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::with('orderLines')->get();
    }

    public function show($id)
    {
        $order = Order::with('orderLines')->find($id); // Eager load orderLines

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404); // Handle order not found
        }

        return response()->json($order);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        // Create the order
        $order = Order::create(['userId' => $request->userId]);

        // Loop through orderlines and associate them with the created order
        foreach ($request->orderlines as $orderline) {
            $orderline['orderId'] = $order->id; // Match custom foreign key
            OrderLines::create($orderline);    // Mass assign orderline data
        }

        // Return the created order with its orderlines
        return response()->json(Order::with('orderLines')->find($order->id),201); // created
    }
}
