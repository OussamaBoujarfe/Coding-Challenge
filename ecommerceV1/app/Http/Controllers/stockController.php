<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Stock;

use App\Http\Requests\stockRequest;
class stockController extends Controller
{   public function __construct(){
    $this->middleware('auth');

      }
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
           $stock->type= $req->input('type');
           $stock->serie= $req->input('serie');
           $stock->modele= $req->input('modele');
           $stock->fabriquant= $req->input('fabriquant');
           $stock->dateE= $req->input('dateE');
           $stock->source= $req->input('source');

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
           $stock->type= $req->input('type');
           $stock->serie= $req->input('serie');
           $stock->modele= $req->input('modele');
           $stock->fabriquant= $req->input('fabriquant');
           $stock->dateE= $req->input('dateE');
           $stock->source= $req->input('source');

           $stock->save();
           return redirect('stocks');

       }
       public function show($id){
        $stocks = Stock::where('id',$id)->get();

        return view('stock.show',['stocks' => $stocks]);


        }

        //
       public function destroy(Request $req, $id){
        $stock=Stock::find($id);
        $stock->delete();
        return redirect('stocks');
       }
}

