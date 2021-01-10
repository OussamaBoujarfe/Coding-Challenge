

@extends('layouts.apps')
@section('content')
<title>QBM: Gestion De Stock</title>


<div class="container">
    <div class="row">
        <div class="col-md-12">




     <center>   <img src="{{ URL::asset("f/img/pp.png") }}" height="110px" weidth="100px">
        <h1>Listes De Stock Sorti</h1><br><input class="btn btn-primary" type="button" onclick="window.print()" value="Imprimer" />

        <br><br></center>

        <table id="tab"  class="table" >
        <head>
            <tr>


                <th>Name</th>
                <th>price</th>
                <th>Deleted on</th>


            </tr>
        </head>
        <body>
        @foreach($stocks as $stock)
            <tr>
                <td>{{$stock->name}}</td>
                <td>{{$stock->price}}</td>

                <td>{{$stock->deleted_at}}</td>

            </tr>
            @endforeach

        </body>
        </table>



        <center>{{$stocks->links()}} </center>


        </div>
    </div>
</div>
@endsection
