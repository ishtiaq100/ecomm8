<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data =Product::all();
        return view('productlist',['proddata'=>$data]);
    }

    public function detail($id){
     $data= Product::find($id);
      return view('productdetail',['proddata'=>$data]);  
    }

    public function search(Request $req){
         $qryname= $req->input('qry');
          $data= Product::Where('name','like','%'.$qryname.'%')->get();
         return view('search',['proddata'=>$data]);  
       }

       public function addtocart(Request $request){
           if($request->session()->has('user')){
              $usid= $request->session()->get('user')->id;
              $prod_id= $request->product_id;
              $cart = new Cart();
              $cart->user_id=$usid;
              $cart->product_id= $prod_id;
              $cart->save();
              return redirect('/');

           }else{
            
            return redirect('/login');


           }


         



       }


    static public function cartitem(){
      
             $get_user_id= session()->get('user')->id;
             return Cart::where('user_id',$get_user_id)->count();
                                            
                        }


     public function cartlist(){
        $get_user_id= session()->get('user')->id;
        $data=   DB::table('cart')
        ->join('products','cart.product_id','products.id')->select('products.*','cart.id as cid')
        ->where('cart.user_id',$get_user_id)->get();
        return view('cartlist',['proddata'=>$data]);
     }


     public function deletecartitem($id){
         Cart::destroy($id);
         return redirect('/cartlist');
     }

    public function demo(){
        return "test";
    }
}
