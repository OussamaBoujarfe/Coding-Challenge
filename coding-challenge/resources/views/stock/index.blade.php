@extends('layouts.apps')
@section('content')
<title>QBM: Gestion De Stock</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <center><img src="{{ URL::asset("f/img/pu2.png") }}" height="245px" weidth="245px">
        <h1>Products List</h1>
         <div class="pull-right">
          <a href="{{url('stocks/create')}}" class="btn btn-success">Add New Product? </a>
         </div>
         <div class="pull-left">
        <a href="{{url('stocks/alld')}}" class="btn btn-danger">Sold Out Products </a>

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
        @foreach($stocks as $stock)
            <tr>
                <td>{{$stock->id}}</td>
                <td>{{$stock->name}}</td>
                <td>{{$stock->price}}</td>

                <td>
                <form action="{{url('stocks/'.$stock->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <a  href="{{url('stocks/'.$stock->id.'/showing')}}" class="btn btn-primary">Details</a>
                <a  href="{{url('stocks/'.$stock->id.'/edit')}}" class="btn btn-default">Editer</a>

                <button type="submit" class="btn btn-danger">Supprimer</button>
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
