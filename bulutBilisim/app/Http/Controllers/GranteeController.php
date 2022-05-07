<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Grantee;
use App\Models\Donate;
use App\Models\User;
use App\Models\Help;

use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Order;

class GranteeController extends Controller
{
    function login(Request $req)
    {
        $grantee=Grantee::where(['email'=>$req->email])->first();
        if(!$grantee||!Hash::check($req->password, $grantee->password))
        {
            return redirect('/granteelog');
        } 
        else
        {
            $req->session()->put('grantee',$grantee);
            $data['tum_urunler']=Donate::get();
            $result['tum_bagislar']=Order::get();
            return view('/grantee',$data,$result);
            //return view('/grantee');
        }
    }

    function register(Request $req){
        $grantee= new Grantee;
        $grantee->name=$req->name;
        $grantee->email=$req->email;
        $grantee->password=Hash::make($req->password);
        $grantee->save();
        return redirect('/granteelog');
    }

   // function donates()
   // {
       // $data['tum_urunler']=Donate::get();
       // return view('grantee',$data);
    //}

    function help_talep()
    {
        return view('granteetalep');
    }
    function help_talep_post(Request $req)
    {
        $userId=Session::get('grantee')['id'];
        $help= new Help;
        $help->helps_id=$req->helps_id;
        $help->grantee_id=$userId;
        $help->status=$req->status;
        $help->address=$req->address;
        $help->save();
        return redirect('/myhelps');
    }
    function myHelps(){
        $userId=Session::get('grantee')['id'];
        $helps=DB::table('helps')
        ->join('donates','helps.helps_id','=','donates.id')
        ->where('helps.grantee_id',$userId)
        ->get();

        return view('myhelps',['helps'=>$helps]);
    }
    function talepSayfasi()
    {
        $data['tum_urunler']=Donate::get();
        $result['tum_bagislar']=Order::get();
        return view('/grantee',$data,$result);
    }

}
