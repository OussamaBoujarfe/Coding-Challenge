@extends('layouts.apps')
@section('content')
<title>Category's Editing</title>
<style>
.d{
    margin-left:527px;
  }
</style>

 <div class="container">
    <div class="row">
        <div class="col-md-12">

           <form action="{{url('categories/'.$category->id)}}" method="post">
           <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}

             <div class="form-group">
             <center><img src="{{ URL::asset("f/img/pu1.png") }}" height="190px" weidth="190px">
             <h1>Category's Editing</h1></center>
             <br><br>

             <div class="form-group @if($errors->get('name')) has-error @endif">
                <br><br><br><br><br><label for="">Name <span style="color:red;font-size:25px; ">*</span>:</label>
                 <input type="text" name="name" class="form-control" value="{{$category->name}}" >
                 @if($errors->get('name'))
                 @foreach($errors->get('name') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
                </div>

                <div class="form-group @if($errors->get('description')) has-error @endif">
                    <label for="">Description <span style="color:red;font-size:25px; ">*</span>:</label>
                    <textarea name="description" rows="6" class="form-control" value="{{$category->description}}"></textarea>
                    @if($errors->get('description'))
                     @foreach($errors->get('description') as $message)
                     <li>{{$message}}</li>
                     @endforeach
                   @endif
                   </div>

               <div class="form-group @if($errors->get('price')) has-error @endif">
                <label for="">Price <span style="color:red;font-size:25px; ">*</span>:</label>
                <input type="text" name="price" class="form-control" value="{{$category->price}}">
                @if($errors->get('price'))
                 @foreach($errors->get('price') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
               </div>





               <div class="form-group">
                <label for="">Image <span style="color:red;font-size:25px; ">*</span>:</label>
                <input class="form-control" type="file" name="photo">
            </div>



             <br><br>
             <div class="form-group">


               <input type="submit"   class="form-control btn btn-primary" value="Edit">
             </div

           </form>

        </div>
    </div>
 </div>


@endsection
