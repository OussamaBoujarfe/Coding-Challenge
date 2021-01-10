@extends('layouts.apps')
@section('content')
<title>QBM: Gestion De Stock</title>
<style>
.d{margin-left:527px;
   
   
}
</style>



 <div class="container">
    <div class="row">
        <div class="col-md-12">
        
           <form action="{{url('stocks')}}" method="post"> 

                {{csrf_field()}}

				
				
               <div class="form-group">
                <center><img src="{{ URL::asset("f/img/pu.png") }}" height="300px" weidth="300px">  
                <h1>Informations De Stock</h1></center>
                <br><br>
			 
               <div class="form-group col-md-4">
                <label for="inputState">Type :</label>
                <select id="inputState" class="form-control" name="type" value="{{old('type')}}">
                <option selected>ORDINATEUR PORTABLE</option>
                <option>TELEPHONE</option>
		        		<option>TABLETTE</option>    
                </select>
               </div>

               <div class="form-group col-md-4">
                <label for="inputState">Fabriquant :</label>
                <select id="inputState" class="form-control" name="fabriquant" value="{{old('fabriquant')}}">
                <option>ACER</option>
                <option>ALCATEL</option>
                <option>ASUS</option>       
                <option>BLACKBERRY</option>
                <option>DELL</option>                
                <option>HP</option>
                <option>HTC</option>
                <option>HUAWEI</option>
                <option>IBM</option>
                <option>INFINIX</option>
                <option>IPHONE Apple</option>
                <option>LENOVO</option> 
                <option>LG</option>
                <option>MOTOROLA</option>
                <option>NOKIA</option> 
                <option>OPPO</option>  
                <option>PHILIPS</option>
                <option selected>SAMSUNG</option>
                <option>SONY</option>
                <option>TOSHIBA</option>
                <option>WINDOWSPhone</option>                 
                <option>ZTE</option>
                </select>
               </div>
                <div class="form-group @if($errors->get('serie')) has-error @endif">
                <br><br><br><br><br><label for="">Serie :</label>
                 <input type="text" name="serie" class="form-control" value="{{old('serie')}}" >
                 @if($errors->get('serie'))
                 @foreach($errors->get('serie') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
                </div>

               <div class="form-group @if($errors->get('modele')) has-error @endif">
                <label for="">Modele :</label>
                <input type="text" name="modele" class="form-control" value="{{old('modele')}}">
                @if($errors->get('modele'))
                 @foreach($errors->get('modele') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
               </div>
              
               <div class="form-group ">
                <label for="">Date D'entree :</label>
                <input type="date"  name="dateE" class="form-control" value="{{old('dateE')}}">
               </div>

               <div class="form-group @if($errors->get('source')) has-error @endif">
                <label for="">Source :</label>
                <input type="text" name="source" class="form-control" value="{{old('source')}}">
                @if($errors->get('source'))
                 @foreach($errors->get('source') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
               </div>
			 
	        	
             
               <br><br><br>
               <div class="form-group" >
             
                   <!--  <a href="{{url('materiels')}}" type="submit"  class="btn btn-success d">suivant</a>--> 
                <input type="submit" href="{{url('stocks')}}"  class="form-control btn btn-primary" value="Enregistrer"> 
               </div

           </form>
              
        </div>
    </div>
 </div>


@endsection