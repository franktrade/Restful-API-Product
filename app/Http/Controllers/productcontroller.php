<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     *  Display a listing of the resource.
     */
    public function index()
    {
        return product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'slug'=> 'required',
            'description'=> 'required',
            'price'=> 'required'
        ]); 
        return product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return product::find($id);  

    }

    /**
     * Update the specified resource in storage.
     */   
  
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->fill($request->all());
        $product->save();
    
        return response()->json([
            'message' => 'Product updated successfully',
            'data' => $product
        ]);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     product::destroy( $id);
    // }
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json('Product deleted successfully');
    }

    /**
     * search for a name
     */
    public function search(string $name)
        {
            $products = Product::where('name', 'like', '%' . $name . '%')->get();

            return response()->json([
                'data' => $products
            ]);
        }
}  
