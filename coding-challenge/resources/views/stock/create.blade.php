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

           <form enctype="multipart/form-data" action="{{url('stocks')}}" method="post">

                {{csrf_field()}}



               <div class="form-group">
                <center><img src="{{ URL::asset("f/img/pu.png") }}" height="300px" weidth="300px">
                <h1>Informations De Stock</h1></center>
                <br><br>


                <div class="form-group @if($errors->get('name')) has-error @endif">
                <br><br><br><br><br><label for="">name :</label>
                 <input type="text" name="name" class="form-control" value="{{old('name')}}" >
                 @if($errors->get('name'))
                 @foreach($errors->get('name') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
                </div>

                <div class="form-group @if($errors->get('description')) has-error @endif">
                    <label for="">Description :</label>
                    <textarea name="description" rows="6" class="form-control" value="{{old('description')}}"></textarea>
                    @if($errors->get('description'))
                     @foreach($errors->get('description') as $message)
                     <li>{{$message}}</li>
                     @endforeach
                   @endif
                   </div>

               <div class="form-group @if($errors->get('price')) has-error @endif">
                <label for="">Price :</label>
                <input type="text" name="price" class="form-control" value="{{old('price')}}">
                @if($errors->get('price'))
                 @foreach($errors->get('price') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
               </div>





               <div class="form-group">
                <label for="">Image:</label>
                <input class="form-control" type="file" name="photo" >
            </div>



               <br><br><br>
               <div class="form-group" >


                <input type="submit" href="{{url('stocks')}}"  class="form-control btn btn-primary" value="Enregistrer">
               </div

           </form>

        </div>
    </div>
 </div>


@endsection
