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

           <form action="{{url('stocks/'.$stock->id)}}" method="post"> 
           <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}

             <div class="form-group">
             <center><img src="{{ URL::asset("f/img/pu1.png") }}" height="190px" weidth="190px">  
             <h1>Edition De Stocks</h1></center>
             <br><br>

			         <div class="form-group col-md-4">
                <label for="inputState">Type :</label>
                <select id="inputState" class="form-control" name="type" value="{{$stock ->type}}">
                <option selected>ORDINATEUR PORTABLE</option>
                <option>TELEPHONE</option>
			        	<option>TABLETTE</option>    
                </select>
               </div>
               <div class="form-group col-md-4">
                <label for="inputState">Fabriquant :</label>
               <select id="inputState" class="form-control" name="fabriquant" value="{{$stock ->fabriquant}}">
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
              <div class="form-group">
              <br> <br> <br> <br><br> <label for="">Serie :</label>
               <input type="text" name="serie" class="form-control" value="{{$stock ->serie}}" >
             </div>

             <div class="form-group">
               <label for="">Modele :</label>
               <input type="text" name="modele" class="form-control" value="{{$stock ->modele}}">
             </div>
              

             <div class="form-group">
               <label for="">Date D'entree :</label>
               <input type="date" name="dateE" class="form-control" value="{{$stock ->dateE}}">
             </div>

             <div class="form-group">
               <label for="">Source :</label>
               <input type="text" name="source" class="form-control" value="{{$stock ->source}}">
             </div>
			 
			

             <br><br>
             <div class="form-group">
             
           <!--   <a href="{{url('materiels')}}" type="submit"  class="btn btn-success d">suivant</a>--> 
               <input type="submit"   class="form-control btn btn-primary" value="Modifier"> 
             </div

           </form>
              
        </div>
    </div>
 </div>


@endsection