<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CrudProdController extends Controller
{
 public function index(){

     $prod = Product::all();
     return view('adminproduct',['prod'=>$prod]);
 }
 public function create(){

     return view('create');
 }
    public function store(Request $request){
     $product = new Product();
        $product->name = $request->Name ;
        $product->price = $request->price;
        $product->description = $request->description;
        if ($request->file('image')) {
            $filename = $request->file('image')->getClientOriginalName();

            $request->image->storeAs('images', $filename, 'public');
            $path = public_path('img/');
            $request->image->move($path,$filename);

            $product->gallery = $filename;
            $product->category = "electronic";
        }
        $product->save();
        return redirect("/Admin");
        }


        public function edit ($id){
       $prod =  Product::where('id',$id)->first();
        return view ('edit',['prod'=>$prod]);
        }



        public function editstore($id,Request $request){

            $product =  Product::where('id',$id)->first();

            $product->name = $request->Name;
            $product->price = $request->price;
            $product->description = $request->description;

            if ($request->file('image')) {
                $filename = $request->file('image')->getClientOriginalName();

                $request->image->storeAs('images', $filename, 'public');
                $path = public_path('img/');
                $request->image->move($path,$filename);

                $product->gallery = $filename;
                $product->category = "electronic";
            }
            $product->update();
           return redirect()->back();
        }

    public function delete ($id){
     Product::where('id',$id)->delete();
        return redirect()->back();
    }




}
