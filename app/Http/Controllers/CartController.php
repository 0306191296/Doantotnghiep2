<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // public function Index(){
    //     $products = DB::table('sanphams')->get();
    //     return view('productdetail', compact('sanphams'));
    // }
     

    public function AddCart(Request $req ){
  
          $id=$req->masp;
          $idrieng=$req->machitietsp;
          $soluong=$req->soluong;
        $product = DB::table('sanphams') -> where('id',$id)->first();
        $lay1spr = DB::table('chitietspriengs') -> where('id',$idrieng) ->first();
          dd($lay1spr);
          $cart = $req->Session()->get('cart',[]);
        if($product!=null && $lay1spr != null  ){
            $key = $id . "+" . $idrieng;
            
          if(array_key_exists($key, $cart)){
            $cart[$key]['soluong']=$cart[$key]['soluong']+$soluong;
          } else{

            $cart[$key ]=['id' => $id, 'ten' => $product->tensp, 'soluong' => $soluong, 'gia'=> $lay1spr->gia,'mau'=> $lay1spr->mau, 'bonhotrong'=> $lay1spr->bonhotrong,'anhbia'=> $product->anhbia ];
        }
    }
        // dd($product);
        $req->Session()->put('cart',$cart);

        return view('user.cart',['cart'=>$cart]);
        
    }

    public function DeleteListItemCart(){
       
        cart::destroy();
        Session::forget('cart');
        return view('indexcart');
    }


}
