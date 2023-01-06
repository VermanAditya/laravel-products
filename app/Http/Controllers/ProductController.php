<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    function savedata(Request $request){
         $images = $request->file('image');
       
         if ($request->hasFile('image')) { 
            foreach($images as $key=>$image ){
          
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data = Product::create(['title'=>$request->title[$key],
                                       'desc'=>$request->desc[$key],
                                       'price'=>$request->price[$key],
                                         'qty'=>$request->qty[$key],
                                          'date'=>$request->date[$key],
                                          'image'=>$name,
                                            ]);
         } 
        } 
        $product = Product::all();
        return redirect::back()->with('success', 'Product Added Successfully');
    } 

    
    function index(){
        $product = Product::all();
        return view('products',['products'=>$product]);
    }
    
}
