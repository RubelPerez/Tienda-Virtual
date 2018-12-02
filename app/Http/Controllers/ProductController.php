<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
   //get select
    public function index()
    {
    	$products = Product::paginate(5);
    	return view ('admin.products.index')->with(compact('products'));
    }

    //get create
    public function create()
    {
    	return view ('admin.products.create');
    	
    }
    //post create
    public function store(Request $request)
    {
        $products = new Product();
        $products->name= $request->input('name');
        $products->description= $request->input('description');
        $products->long_description= $request->input('long_description');
        $products->price= $request->input('price');
      
       $products->save();
    	return redirect ('/admin/products');
            
            //FK
    }

    //get edit
     public function edit($id)
    {
        $product = Product::find($id);
        return view ('admin.products.edit')->with(compact('product'));
    
        
    }
    //post edit
    public function update(Request $request,$id)
    {
        $products = Product::find($id);
        $products->name= $request->input('name');
        $products->description= $request->input('description');
        $products->long_description= $request->input('long_description');
        $products->price= $request->input('price');
      
       $products->save();
        return redirect ('/admin/products');
            
            //FK
    }
    //get Details
  public function details($id)
    {
        $product = Product::find($id);
        return view ('admin.products.details')->with(compact('product'));
    
        
    }
    //post delete
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/products');
    

    }
     public function ver($id)
    {
        $product = Product::find($id);
        return view ('admin.products.ver')->with(compact('product'));
    
        
    }
    
   
}
