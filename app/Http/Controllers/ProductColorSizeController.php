<?php

namespace App\Http\Controllers;

use App\Models\ProductColorSize;
use App\Http\Requests\StoreProductColorSizeRequest;
use App\Http\Requests\UpdateProductColorSizeRequest;

class ProductColorSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductColorSizeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductColorSizeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductColorSize  $productColorSize
     * @return \Illuminate\Http\Response
     */
    public function show(ProductColorSize $productColorSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductColorSize  $productColorSize
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductColorSize $productColorSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductColorSizeRequest  $request
     * @param  \App\Models\ProductColorSize  $productColorSize
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductColorSizeRequest $request, ProductColorSize $productColorSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductColorSize  $productColorSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductColorSize $productColorSize)
    {
        //
    }
}
