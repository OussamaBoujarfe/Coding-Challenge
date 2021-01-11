@extends('layouts.apps')
@section('content')
<title>Categories</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <center><img src="{{ URL::asset("f/img/pu2.png") }}" height="245px" weidth="245px">
        <h1>Categories List</h1>
         <div class="pull-right">
          <a href="{{url('categories/create')}}" class="btn btn-success">Add New Category? </a>
         </div>


        <table class="table">
        <head>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>parent_id</th>


				<th>Actions</th>
            </tr>
        </head>
        <body>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                @if($category->parent_id==NULL)
                <td>Base Category</td>
                @else
                <td>{{$category->parent_id}}</td>
                @endif
                <td>
                <form action="{{url('categories/'.$category->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}

                <a  href="{{url('categories/'.$category->id.'/edit')}}" class="btn btn-default">Edit</a>

                <button type="submit" class="btn btn-danger">Soft Delete</button>
                </form>
                </td>




            </tr>
            @endforeach
        </body>
        </table>

        </div>
    </div>
</div>

@endsection
