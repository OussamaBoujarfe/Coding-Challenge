<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\productRequest;

class productController extends Controller
{


       public function index()
       {

        $listproduct= Product::all();
        return view('product.index',['products' => $listproduct]);

       }
       public function indexForShop()
       {

        $listproduct= Product::all();
        return view('shop-side',['products' => $listproduct]);

       }

       public function create()
       {
           return view('product.create');
       }

       public function store(productRequest $req)
       {

           $product= new product();
           $product->name= $req->input('name');
           $product->description = $req->input('description');
           $product->price= $req->input('price');

           if($req->hasFile('photo'))
           {

            $product->photo =  $req->photo->store('image');
            $req->file('photo')->move('public');

           }

           $product->save();
           session()->flash('success','Product Has Been Added !!');
           return redirect('products');

       }

       public function edit($id)
       {

           $product= Product::find($id);
           return view('product/edit',['product'=>$product]);

       }

       public function update(productRequest $req ,$id)
       {

           $product= Product::find($id);
           $product->name= $req->input('name');
           $product->description= $req->input('description');
           $product->price= $req->input('price');
           $product->photo= $req->input('photo');

           $product->save();
           return redirect('products');

       }

        public function showing($id)
        {

            $products = Product::where('id',$id)->get();
            return view('product.product-detail',['products' => $products]);

        }

        public function deleted()
        {

         $onlySoftDeleted = Product::onlyTrashed()->paginate(10);
         return view('product.alld',['products' => $onlySoftDeleted]);

        }

        public function destroy(Request $req, $id)
        {

        $product=Product::find($id);
        $product->delete();
        return redirect('products');

        }
}
