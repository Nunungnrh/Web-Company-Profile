<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'products' => Product::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('product-images');
        Product::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $request->file('image')->store('product-images')
        ]);

        return redirect('/dashboard/product/create')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.product.edit', [
            'product' => Product::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('image') == null){
            Product::where('id', $id)->update([
                'name' => $request->name,
                'desc' => $request->desc,
            ]);

            return redirect('/dashboard/product/')->with('success-edit', 'Product edited successfully');            
        }else{
            Product::where('id', $id)->update([
                'name' => $request->name,
                'desc' => $request->desc,
                'image' => $request->file('image')->store('product-images')
            ]);

            return redirect('/dashboard/product/')->with('success-edit', 'Product edited successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/dashboard/product')->with('destroy', 'Product deleted successfully!');
    }
}
