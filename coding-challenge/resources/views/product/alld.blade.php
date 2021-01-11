

@extends('layouts.apps')
@section('content')
<title>List of Sold Products</title>


<div class="container">
    <div class="row">
        <div class="col-md-12">




     <center>   <img src="{{ URL::asset("f/img/pp.png") }}" height="110px" weidth="100px">
        <h1>Soldout Products</h1><br><input class="btn btn-primary" type="button" onclick="window.print()" value="Printing" />

        <br><br></center>

        <table id="tab"  class="table" >
        <head>
            <tr>


                <th>Name</th>
                <th>price</th>
                <th>Sold on</th>


            </tr>
        </head>
        <body>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>

                <td>{{$product->deleted_at}}</td>

            </tr>
            @endforeach

        </body>
        </table>



        <center>{{$products->links()}} </center>


        </div>
    </div>
</div>
@endsection
