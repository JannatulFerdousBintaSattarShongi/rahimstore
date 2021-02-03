<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        //dd('ok');
        return view ('backend.product.create');
    }
    public function list(){
        $list=Product::paginate(5);
        return view ('backend.product.list',compact('list'));
    }
    public function store(Request $request){
       // dd($request);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->date = $request->date;




        $product->save();
        return redirect()->back()->with('message','Product added sucessfully');

    }
    public function edit($id){
        $product=Product::find($id);
        return view ('backend.product.edit',compact('product'));
    }
    public function update(Request $request,$id){
        $product =Product::find($id);
        $product ->name =$request->name;
        $product->price=$request->price;
        $product->date=$request->date;



        $product->save();
          return redirect()->back()->with('message',' product update sucessfully');
    }
    public function delete($id){
        Product::find($id)->delete();
        return redirect(route('backend.product.list'))->with ('msg','delete successfully');

    }
    public function search(Request $request){

        $list=Product::whereBetween('created_at',[$request->date,$request->date1])->get();
         //dd($report);
        return view ('backend.product.list',compact('list'));
    }
}
