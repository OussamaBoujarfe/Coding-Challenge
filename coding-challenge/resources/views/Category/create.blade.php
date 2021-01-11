@extends('layouts.apps')
@section('content')
<title>category's Management</title>
<style>
.d{margin-left:527px;


}
</style>



 <div class="container">
    <div class="row">
        <div class="col-md-12">

           <form enctype="multipart/form-data" action="{{url('categories')}}" method="post">

                {{csrf_field()}}



               <div class="form-group">
                <center><img src="{{ URL::asset("f/img/pu.png") }}" height="300px" weidth="300px">
                <h1>ADDING category</h1></center>
                <br><br>


                <div class="form-group @if($errors->get('name')) has-error @endif">
                <br><br><br><br><br><label for="">Name <span style="color:red;font-size:25px; ">*</span>:</label>
                 <input type="text" name="name" class="form-control" value="{{old('name')}}" >
                 @if($errors->get('name'))
                 @foreach($errors->get('name') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
                </div>

                <div class="form-group @if($errors->get('description')) has-error @endif">
                    <label for="">Description <span style="color:red;font-size:25px; ">*</span>:</label>
                    <textarea name="description" rows="6" class="form-control" value="{{old('description')}}"></textarea>
                    @if($errors->get('description'))
                     @foreach($errors->get('description') as $message)
                     <li>{{$message}}</li>
                     @endforeach
                   @endif
                   </div>

               <div class="form-group @if($errors->get('price')) has-error @endif">
                <label for="">Price <span style="color:red;font-size:25px; ">*</span>:</label>
                <input type="text" name="price" class="form-control" value="{{old('price')}}">
                @if($errors->get('price'))
                 @foreach($errors->get('price') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
               </div>





               <div class="form-group @if($errors->get('photo')) has-error @endif">
                <label for="">Image <span style="color:red;font-size:25px; ">*</span>:</label>
                <input class="form-control" type="file" name="photo" >
                @if($errors->get('photo'))
                 @foreach($errors->get('photo') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
            </div>



               <br><br><br>
               <div class="form-group" >


                <input type="submit" href="{{url('products')}}"  class="form-control btn btn-primary" value="Save">
               </div

           </form>

        </div>
    </div>
 </div>


@endsection
