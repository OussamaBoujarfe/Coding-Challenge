@extends('layouts.apps')


@section('content')
<title>QBM: Gestion De Stock</title>
<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
        <div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Informations De Matériel</h3></div>
						
					</div>
					
				</div>
				<div class="panel-body">
                @foreach($stocks as $stock)	
					<ul class="list-group">
						<li class="list-group-item">
						<center><img src="{{ URL::asset("f/img/dez.png") }}" height="245px" weidth="245px">
						<h1>INFO MAT</h1></center>
						 <table >
                         
                             <th><h3>*Type &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp; &nbsp;{{$stock->type}}</h4></td>
                            </tr>
					     	<tr>
                             <th><h3>*Série &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp; &nbsp;{{$stock->serie}}</h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Modele&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp; &nbsp;&nbsp; &nbsp;{{$stock->modele}}</h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Fabriquant&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                            <td><h4><br>&nbsp; &nbsp;&nbsp; &nbsp;{{$stock->fabriquant}}</h4></td>
                            </tr>
							<tr>
                             <th><h3>Date D'Entrée&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp; &nbsp;{{$stock->dateE}}</h4></td>
                            </tr>
                            <tr>
                             <th><h3>*La Source&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</h3></th>
                             <td><h4><br>&nbsp; &nbsp;&nbsp; &nbsp;{{$stock->source}}</h4></td>
                            </tr>
                            
                         </table>
							
						</li>
					</ul>
                    @endforeach
				</div>
			</div>

			
					
				
			

			

		  
		</div>
	</div>
</div>

@endsection

