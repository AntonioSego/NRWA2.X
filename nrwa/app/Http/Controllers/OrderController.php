<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('orders.index',['orders'=>$orders]);
        return view('orders.index');
    }

    public function create(){
        $products = Product::all();
        $users = User::all();
        return view('orders.create')->with('products',$products)->with('users',$users);
    }

    public function store(Request $request){
        $data  = $request->validate([
            
        'order_date'  => 'required | date' ,
        'client_name' => 'required',
        'client_contact' => 'required',
        'product_name'=> 'required',
        'noOfProducts' => 'required | numeric',
        'sub_total' => 'required',
        'vat' => 'required',
        'discount'=> 'required',
        'total_amount' => 'required ',
        'paid' => 'required',
        'due' => 'required',
        'payment_type'=> 'required',
        'payment_status' => 'required',
        'product_id' => 'required | numeric',
        'user_id' => 'required | numeric'

        ]);

        $new_data  = Order::create($data);

        return redirect(route('order.index'));

    }
    public function edit(Order $order){
        return view('orders.edit',['order' => $order]);
    }

    public function update(Order $order,Request $request){
        $data  = $request->validate([
            
            'order_date'  => 'required | date' ,
            'client_name' => 'required',
            'client_contact' => 'required',
            'product_name'=> 'required',
            'noOfProducts' => 'required | numeric',
            'sub_total' => 'required',
            'vat' => 'required',
            'discount'=> 'required',
            'total_amount' => 'required ',
            'paid' => 'required',
            'due' => 'required',
            'payment_type'=> 'required',
            'payment_status' => 'required',
            'product_id' => 'required | numeric',
            'user_id' => 'required | numeric'

            ]);

            $order->update($data);
            return redirect(route('order.index'))->with('succes','Uspjesno uredjen');
            
    }

    public function delete(Order $order){
        return view('orders.delete',['order' => $order]);
    }

    public function destroy(Order $order){
        $order->delete();
        return redirect(route('order.index'))->with('succes','Uspjesno izbrisan');
        
    }
}
