

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
                
                
                <th>Type</th>
                <th>Série</th>
               <th>Modele</th>  
               <th>Fabriquant</th> 
                <th>DateD'entrée</th>
                <th>Source</th>
                <th>DateDeSortie</th>
            </tr>
        </head>
        <body>
        @foreach($stocks as $stock)
            <tr>
                <td>{{$stock->type}}</td>
                <td>{{$stock->serie}}</td>
                <td>{{$stock->modele}}</td>
                <td>{{$stock->fabriquant}}</td>
                <td>{{$stock->dateE}}</td>
                <td>{{$stock->source}}</td>
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
