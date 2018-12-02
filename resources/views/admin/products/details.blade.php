@extends('layouts.app')
@section ('body-class','landing-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h1 class="title">Write the best title for your page.</h1>
            <h4>Every landing page needs a small description after the big bold title, that's why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
            <br />
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Watch video
            </a>
         </div>
      </div>
   </div>
</div>
<div class="main main-raised">
   <div class="container">
     <div class="jumbotron-fluid">
  <h1 class="display-3 text-center">{{$product->name}}</h1>
  <img class="img-fluid align-self-center" src="{{$product-> imagenes()->first()->image}}">
  <p class="lead">{{$product->long_description}}</p>
  <p class="lead">{{$product->price}}</p>
  <hr class="my-2">
  <p>{{$product->category->name}}</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{url('/admin/products')}}" role="button">Volver</a>
  </p>
</div>

</div>
   </div>        
      </div> </div>


@endsection