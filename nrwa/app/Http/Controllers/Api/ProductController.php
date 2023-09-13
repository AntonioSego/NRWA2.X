<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        if($products->count() > 0){
            return response()->json([
                'status' => 200,
                'products' => $products
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No records found'
            ],404);
        }
        
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'product_name'=> 'required',
            'quantity' => 'required',
            'rate' => 'required',
            'active' => 'required',
            'status' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ],422);
        }else{

            $product = Product::create([
                'product_name'=> $request->product_name,
                'quantity' => $request->quantity,
                'rate' => $request->rate,
                'active' => $request->active,
                'status' => $request->status,
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id
            ]);

            if($product){
                return response()->json([
                    'status' => 200,
                    'message' => 'Product created successfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong :('
                ],500);
            }
        }
    }

    public function show($id){
        $product = Product::find($id);
        if($product){
            return response()->json([
                'status' => 200,
                'product' => $product
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No product found :('
            ],404);
        }
    }

    public function edit($id){
        $product = Product::find($id);
        if($product){
            return response()->json([
                'status' => 200,
                'product' => $product
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No product found :('
            ],404);
        }
    }

    public function update(Request $request,int $id){
        $validator = Validator::make($request->all(),[
            'product_name'=> 'required',
            'quantity' => 'required',
            'rate' => 'required',
            'active' => 'required',
            'status' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ],422);
        }else{

            $product = Product::find($id);
            
            if($product){
                $product->update([
                    'product_name'=> $request->product_name,
                    'quantity' => $request->quantity,
                    'rate' => $request->rate,
                    'active' => $request->active,
                    'status' => $request->status,
                    'brand_id' => $request->brand_id,
                    'category_id' => $request->category_id
                ]);
                return response()->json([
                    'status' => 200,
                    'message' => 'Product updated successfully'
                ],200);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => 'No such product found :('
                ],404);
            }
        }
    }

    public function destroy($id){

        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Product deleted successfully'
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No such product found :('
            ],404);
        }
    }
}
