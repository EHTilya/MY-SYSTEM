<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Resource;
use App\Models\Feedback;
use App\Models\Post;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    function index()
{
        $order=Product::all();
        return view('customer/product',['products'=>    $order]);
}
    function vitambaa()
    {
        $vit=Resource::all();
        return view('customer/vitambaa',['vit'=>$vit]);
    }

    function post()
    {
        $post=Post::all();
        return view('customer/test',['post'=>$post]);
    }

function men()
{
    $men= Product::where('sex','m')->get();
    return view('customer/men',['men'=>$men]);
}
function women()
{
    $women= Product::where('sex','w')->get();
    return view('customer/women',['women'=>$women]);
}

function detail($id)
{
         $data=Product::find($id);
     if($data)
     {
    $res=DB::table('product__resources')
    ->join('resources','product__resources.resource_id','=','resources.id')
    ->where('product__resources.product_id', $id)
    ->select('resources.*')->get();

        $cat = Product::select('category_id')
                ->where('id',$id)
                ->first()->category_id;
            return view('customer/detail')
              ->with('data',$data)
              ->with('cat',$cat)
              ->with('res',$res);

     }
     else{
         return 'failed';
     }
        
}

function search(Request $req)
    {
        $order=Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('customer/search',['products'=>    $order]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $req->validate([
                'tumbo_kiuno'=>['required'],
                'hipsi'=>['required'],
                'paja'=>['required'],
                'goti'=>['required'],
                'upana_chini'=>['required'],
                'fly'=>['required'],
                'urefu'=>['required'],
                'bega'=>['required'],
                'kifua'=>['required'],
                'urefu_mkono'=>['required'],
                'upana_mkono'=>['required'],
                'kiuno'=>['required'],
                'half'=>['required'],
                'kitambaa'=>['required']


            ]);

                $order= new Cart;
                $order->users_id=$req->session()->get('user')['id'];
                $order->product_id=$req->product_id;
                $order->tumbo_kiuno=$req->tumbo_kiuno;
                $order->hipsi=$req->hipsi;
                $order->paja=$req->paja;
                $order->goti=$req->goti;
                $order->upana_chini=$req->upana_chini;
                $order->fly=$req->fly;
                $order->urefu=$req->urefu;
                $order->bega=$req->bega;
                $order->kifua=$req->kifua;
                $order->urefu_mkono=$req->urefu_mkono;
                $order->upana_mkono=$req->upana_mkono;
                $order->kiuno=$req->kiuno;
                $order->half=$req->half;
                $order->kitambaa=$req->kitambaa;

                $order->save();
            return redirect('home');
            
        }
        else
        {
            return redirect('login');
        }
    }

    static function cartItem()
        {
            $userId= Session::get('user')['id'];
            return Cart::where('users_id',$userId)->count();
        }
        function cartList()
        {
            $userId=Session::get('user')['id'];
            $products= DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.users_id',$userId)
            ->select('products.*','carts.id as carts_id')
            ->get();
            return view('customer/cartList',['products'=>$products]);
        }
        function removeCart($id)
        {
            Cart::destroy($id);
            return redirect('cartlist');
        }

        function orderNow()
        {
            $userId=Session::get('user')['id'];
            $total=DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.users_id',$userId)
            ->sum('products.price');
            return view('customer/ordernow',['total'=>$total]);
        }

        function orderPlace(Request $req)
        {
            $userId=Session::get('user')['id'];
            $allCart=Cart::where('users_id',$userId)->get();
            foreach($allCart as $cart)
            {
                $req->validate([
                    'payment'=>['required'],
                    'address'=>['required'],
                    'phone'=>['required']
                ]);

                $order= new Order;
                $order->product_id=$cart['product_id'];
                $order->users_id=$cart['users_id'];
                $order->order_status="pending";
                $order->payment_method=$req->payment;
                $order->address=$req->address;
                $order->phone=$req->phone;
                $order->description=$req-> input('description') ?:  'nothing';
                $order->tumbo_kiuno=$cart['tumbo_kiuno'];
                $order->hipsi=$cart['hipsi'];
                $order->paja=$cart['paja'];
                $order->goti=$cart['goti'];
                $order->upana_chini=$cart['upana_chini'];
                $order->fly=$cart['fly'];
                $order->urefu=$cart['urefu'];
                $order->bega=$cart['bega'];
                $order->kifua=$cart['kifua'];
                $order->urefu_mkono=$cart['urefu_mkono'];
                $order->upana_mkono=$cart['upana_mkono'];
                $order->kiuno=$cart['kiuno'];
                $order->half=$cart['half'];
            
                $order->kitambaa=$cart['kitambaa'];
                $order->save();
                $allCart=Cart::where('users_id',$userId)->delete();

            }
            
            return redirect('home');
        }

        function myOrders()
        {
            $userId=Session::get('user')['id'];
            $order=DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.users_id',$userId)
            ->get();
            return view('customer/myorders',['order'=>$order]);
        }

        function l_shirt()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',2)
            ->where('products.type','sample')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }
        function l_shirt2()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',2)
            ->where('products.type','design')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }

        
        function s_shirt()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',1)
            ->where('products.type','sample')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }
        function s_shirt2()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',1)
            ->where('products.type','design')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }

        
        function short()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',5)
            ->where('products.type','sample')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }
        function short2()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',5)
            ->where('products.type','design')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }


        
        function m_trouse()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',3)
            ->where('products.type','sample')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }
        
        function m_trouse2()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',3)
            ->where('products.type','design')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }

        
        function w_trouse()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',4)
            ->where('products.type','sample')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }
        function w_trouse2()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',4)
            ->where('products.type','design')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }

        
        function skirt()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',6)
            ->where('products.type','sample')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }
        function skirt2()
        {
            $dress=DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->where('products.category_id',6)
            ->where('products.type','design')
            ->select('products.*')
            ->get();
            return view('customer/category',['dress'=>$dress]);
        }


        function feedback(Request $req){
            $feed = new Feedback;
            $feed->name = $req->name;
            $feed->email = $req->email;
            $feed->location = $req->location;
            $feed->comment = $req->comment;
            $feed->phone = $req->phone;
            $feed->save();
            return redirect('contact');

        }

}
