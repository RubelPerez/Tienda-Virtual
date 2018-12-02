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
      <h1 class="text-center">Lista de productos</h1>
      <div class="section text-center section-landing">
                   

      <div class="">
         <div class="row">
            <div class="col-md-12 ">
               <a href="{{url('/admin/products/create')}}" class="btn btn-primary rounded">Agregar Producto</a>
               <form method="post" >
                 <input type="text" name="name">
                 <a href="{{url('/admin/product/'.$products.'/buscador')}}"type="submit" name="enviar"></a>

               </form>
               <table class="table">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nombre</th>
            <th class="col-md-4 text-center">Descripcion</th>
            <th class="text-center">Categoria</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <section id="body">
    <tbody>
      @foreach($products  as $produ)
        <tr>
         
            <td class="text-center">{{$produ->id}}</td>
            <td>{{$produ->name}}</td>
            <td>{{$produ->description}}</td>
            <td>{{$produ->category ?  $produ->category->name : 'Cualquiera' }}</td>
            <td class="text-right">{{$produ->price}}</td>
            <td class="td-actions text-right">
                  
                <a href="{{ url('/admin/products/'.$produ->id.'/details')}}" role="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-info"></i>
                </a>
                <a href="{{ url('/admin/products/'.$produ->id.'/edit')}}" role="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </a>
           
                
                <a href="{{url('/admin/products/'.$produ->id.'/ver')}} "role="button"  title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                </button>
            
            </td>
           
        </tr>
         @endforeach

    </tbody>
</section>
</table>
         {{$products->links()}} 
            </div>
         </div>
      </div>
   </div>
</div>
   </div>        
      </div> 

@endsection