@extends('layouts.app')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
   <div class="container">
      <div class="row">
        
         </div>
      </div>
   </div>
</div>
<div class="main main-raised">
   <div class="container">
     
      <div class="section text-center">
          <a href="{{ url('/admin/products') }}">Retroceder</a>
         <h2 class="title">Agregar Producto</h2>
         <div class="team">
            <div class="row">
       <div class="col">
          <form class="form" method="post" action="{{url('/admin/products')}}">
{{csrf_field()}}            

{{ date('d-m-Y h:i') }}

         
    <input type="text" class="form-control" id="formGroupExampleInput1" name="name"placeholder="Nombre del producto" minlength="3" required>      
    <input type="text" class="form-control"  placeholder="descripcion Corta" name="description" required>  
     <input type="number" step=".01" class="form-control" id="formGroupExampleInput3" name="price" placeholder="Precio" required min="0">
    <textarea class="form-control" name="long_description" type="text" placeholder="descripcion larga" required
   
    ></textarea>

            <button class="btn btn-primary"type="submit">Registrar</button>
          </form>

       </div>
         </div>

   

      
   </div>
</div>
@endsection