<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\stockRequest;
use App\Models\Stock;
class productController extends Controller
{


    public function index(){

        $liststock= Stock::all();

        return view('stock.index',['stocks' => $liststock]);
       }
       public function deleted(){
        $onlySoftDeleted = Stock::onlyTrashed()->paginate(10);
        return view('stock.alld',['stocks' => $onlySoftDeleted]);
       }
       public function create(){
           return view('stock.create');
       }
       public function store(stockRequest $req){

           $stock= new stock();
           $stock->name= $req->input('name');
           $stock->description = $req->input('description');
           $stock->price= $req->input('price');

           if($req->hasFile('photo')){
            $stock->photo =  $req->photo->store('image');

            $req->file('photo')->move('public');
                                     }

           $stock->save();
           session()->flash('success','Matériel a été Bien Enregistré !!');
           return redirect('stocks');
                                               }
       public function edit($id){
           $stock= Stock::find($id);
           return view('stock/edit',['stock'=>$stock]);
                                }
       public function update(stockRequest $req ,$id){
           $stock= Stock::find($id);
           $stock->name= $req->input('name');
           $stock->description= $req->input('description');
           $stock->price= $req->input('price');
           $stock->photo= $req->input('photo');

           $stock->save();
           return redirect('stocks');

       }
       
        public function showing($id){
            $stocks = Stock::where('id',$id)->get();

            return view('stock.product-detail',['stocks' => $stocks]);


            }

        //
       public function destroy(Request $req, $id){
        $stock=Stock::find($id);
        $stock->delete();
        return redirect('stocks');
       }
}
