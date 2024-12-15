<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderLinesRequest;
use App\Http\Requests\UpdateOrderLinesRequest;
use App\Models\OrderLines;

class OrderLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderLinesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderLines $orderLines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderLines $orderLines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderLinesRequest $request, OrderLines $orderLines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderLines $orderLines)
    {
        //
    }
}
