<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
class ProductController extends Controller
{
    public function getIndex()
    {
        $products=Product::paginate(8);
        return view('shop.index',['products'=>$products]);
    }

    public function getIndex1()
    {
        $products=Product::all();
        return view('welcome',['products'=>$products]);
    }


  /*  public function getSameType($type)
    {
        $products = Product::where('type',$type)->first();
        return view('shop.index',['products'=>$products]);
    }*/
    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
    return redirect()->route('product.index');


    }


    public function getCart()
    {
        if(!Session::has('cart')){
          return view('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

     }

     public function getCheckout()
    {
        if(!Session::has('cart')){
          return view('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('shop.checkout', ['products' => $cart->items,'total' => $total]);

     }

     public function delete($id)
    {

 if(!Session::has('cart')){
          return view('shop.shopping-cart');
        }

        $products = Session::get('cart'); // Get the array
        unset($products->items[$id]);
        $products->totalQty--;

        // Unset the index you want
        Session::put('products', $products->items);

       // $products->totalPrice+= $products->items[$id];

        return redirect('/shopping-cart');
    }

    public function getAddToCart1(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
    return redirect()->route('welcome');


    }

    public function getCart1()
    {
        if(!Session::has('cart')){
          return view('welcome');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('welcome', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

     }




}
