<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Categories;

class ProductsController extends Controller
{
    public function Index() {
        $categories=Categories::All();
        $products=products::All();
        return view('products.index',['categories'=>$categories, 'products'=>$products]);
    }
    public function Create(Request $request) 
    {
        $validated= $request->validate([
            'name'=>'required|string',
        'description'=>'nullable|string|max:2500',
        'price'=>'required',
        'stoke'=>'required',
        'categories_id'=>'required',
        'image'=>'nullable',
    ]);
       
        $arr=[
            'name'=>$request->name,
            'description'=>$request->description ,    
            'price'=>  $request->price , 
            'stoke'=>  $request->stoke , 
            'categories_id'=>  $request->categories_id , 
            'image'=>  $request->image ,  
            
        ];
        $items=products::Create($arr);
        $items->save();
        return redirect()->route('Products.index');
        
    }

    public function Delete($id){
        $item = products::find($id);
        if($item){
            $item->delete();
        }
        return redirect()->route('Products.index');
    }

    public function Edit($id){
        $item = products::find($id); 
        return view('Products.Edit', ['products'=>$item]);
    }
    
}
