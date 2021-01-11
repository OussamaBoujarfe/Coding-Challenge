@extends('layouts.apps')
@section('content')
<title>QBM: Gestion De product</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <center><img src="{{ URL::asset("f/img/pu2.png") }}" height="245px" weidth="245px">
        <h1>Products List</h1>
         <div class="pull-right">
          <a href="{{url('products/create')}}" class="btn btn-success">Add New Product? </a>
         </div>
         <div class="pull-left">
        <a href="{{url('products/alld')}}" class="btn btn-danger">Sold Out Products </a>

         </div>

        <table class="table">
        <head>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>price</th>


				<th>Actions</th>
            </tr>
        </head>
        <body>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>

                <td>
                <form action="{{url('products/'.$product->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <a  href="{{url('products/'.$product->id.'/showing')}}" class="btn btn-primary">Details</a>
                <a  href="{{url('products/'.$product->id.'/edit')}}" class="btn btn-default">Edit</a>

                <button type="submit" class="btn btn-danger">Make It Sold</button>
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
