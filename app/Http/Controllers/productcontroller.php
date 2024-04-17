<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class productcontroller extends Controller
{
    //

    public function index(){
        // return view('logout');
        
        if(Session::has('user'))
        {
            $data = product::all();
            return view('product',['products'=>$data]);
        }else{
            return redirect('/');
        }
    }
    public function details($id)
    {
        $data= product::find($id);
        return view('detail',compact('data'));
    }

    public function addtocart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/cartlist');
        }else{
            return redirect('/login');
        }
        
    }

    static function cartitem(){
        $userid = Session::get('user')['id'];
        return cart::where('user_id',$userid)->count();
    }
    public function cartlist()
    {
        if(Session::has('user'))
        {
            $userid = Session::get('user')['id'];
            $products = DB::table('cart')
            ->join('products','cart.product_id','=' ,'products.id')
            ->where('cart.user_id',$userid)
            ->select('products.*','cart.id as cartid')
            ->get();
    
            return view('cartlist',compact('products'));
        }else{
            return redirect('/');
        }
    }

    public function removecart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }
//
    public function ordernow()
    {
        $userid = Session::get('user')['id'];
         $total= DB::table('cart')
        ->join('products','cart.product_id','=' ,'products.id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');

        return view('ordernow',compact('total'));

    }
    public function orderplace(Request $req)
    {
        $req->validate([
            'address' => 'required',
            'payment' => ['required', Rule::in(['cash', 'online'])],
        ]);
    
        $userid = Session::get('user')['id'];
        $allcart = cart::where('user_id',$userid)->get();
        foreach($allcart as $cart)
        {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status ='pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save();
            cart::where('user_id',$userid)->delete();
        }
        $req->input();
        return redirect('/product');
    }
    public function myorders()
    {
       if(Session::has('user'))
       {
        $userid = Session::get('user')['id'];
        $orders = DB::table('orders')
       ->join('products','orders.product_id','=' ,'products.id')
       ->where('orders.user_id',$userid)
       ->get();

       return view('myorders',compact('orders'));
       }else{
           return redirect('/');
       }
    }
    public function search(Request $req)
    {
        if(Session::has('user'))
        {
            $data = product::
            where('name','like','%'.$req->input('query').'%')
            ->get();
            return view('search',compact('data'));
        }else{
            return redirect('/');
        }
    }
}
