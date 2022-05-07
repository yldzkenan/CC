<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donate;
use App\Models\Grantee;
use App\Models\User;

use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Cart;
use App\Models\Order;



class DonateController extends Controller
{
    function index()
    {
        $data=Donate::all();
        return view('donate',['donates'=>$data]);
    }
    function detail($id)
    {
        $data=Donate::find($id);
        return view('detail',['donates'=>$data]);
    }




    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->donates_id=$req->donates_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList(){
        $userId=Session::get('user')['id'];
        $donates=DB::table('cart')
        ->join('donates','cart.donates_id','=','donates.id')
        ->where('cart.user_id',$userId)
        ->select('donates.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['donates'=>$donates]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(){
        $userId=Session::get('user')['id'];
        $total= $donates=DB::table('cart')
        ->join('donates','cart.donates_id','=','donates.id')
        ->where('cart.user_id',$userId)
        ->sum('donates.price');

        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req){
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order=new Order;
            $order->donates_id=$cart['donates_id'];
            $order->user_id=$cart['user_id'];
            $order->status="İhtiyaç Sahipleri İçin Hazırlanıyor";
            $order->payment_method=$req->payment;
            $order->payment_status="Ödeme Onaylandı";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('/');
    }
    function myOrders(){
        $userId=Session::get('user')['id'];
        $orders=DB::table('orders')
        ->join('donates','orders.donates_id','=','donates.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }


    function KullaniciDuzenle_post(Request $req){
        $user=User::find($req->input('id'));
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/logout');
    }

    function KullaniciDuzenle_post2(Request $req){
        $grantee=Grantee::find($req->input('id'));
        $grantee->name=$req->input('name');
        $grantee->email=$req->input('email');
        $grantee->password=Hash::make($req->password);
        $grantee->save();
        return redirect('/granteelogout');
    }

}
