<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Http\Requests\categoryRequest;
class categoryController extends Controller
{
    public function index()
    {

     $listcategory= Category::all();
     return view('category.index',['categories' => $listcategory]);

    }


    public function create()
    {
        return view('category.create');
    }

    public function store(categoryRequest $req)
    {

        $category= new category();
        $category->name= $req->input('name');
        $category->description = $req->input('description');
        $category->price= $req->input('price');

        if($req->hasFile('photo'))
        {

         $category->photo =  $req->photo->store('image');
         $req->file('photo')->move('public');

        }

        $category->save();
        session()->flash('success','category Has Been Added !!');
        return redirect('categories');

    }

    public function edit($id)
    {

        $category= Category::find($id);
        return view('category/edit',['category'=>$category]);

    }

    public function update(categoryRequest $req ,$id)
    {

        $category= Category::find($id);
        $category->name= $req->input('name');
        $category->description= $req->input('description');
        $category->price= $req->input('price');
        $category->photo= $req->input('photo');

        $category->save();
        return redirect('categories');

    }

     public function showing($id)
     {

         $categories = Category::where('id',$id)->get();
         return view('category.category-detail',['categories' => $categories]);

     }


     public function destroy(Request $req, $id)
     {

     $category=Categories::find($id);
     $category->delete();
     return redirect('categories');

     }
}
