<?php

namespace App\Http\Controllers;

use App\ShopingCart;
use Illuminate\Http\Request;

class ShopingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shopingCart.index'); 
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShopingCart  $shopingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShopingCart $shopingCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShopingCart  $shopingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopingCart $shopingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShopingCart  $shopingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopingCart $shopingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShopingCart  $shopingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopingCart $shopingCart)
    {
        //
    }
}
