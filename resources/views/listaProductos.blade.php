@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-lg-12 col-md-6 mb-4 faqs">
        <!-- ACA VA TODO EL CODIGO -->
        
        <h1 class="text-uppercase">Listado de Productos</h1>
       
             <form action="{{route('search')}}" method="get">
                <div class="form-group">
                    <div class="input-group">
                            <input type="text" class="form-control" name="search" id="" placeholder="Buscar..."> 
                            <span class="input-group-btn">
                                   <button type="submit" class="btn boton">Buscar</button>
                            </span>
                    </div>
                </div>  
             </form>
             <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Titulo</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $key)
    <tr>
        <td>
            <a href="/edit/{{$key->id}}">
                            <img class="img-thumbnail" src='/storage/{{$key->image}}' alt='{{$key->name}}' width="100px" height="100px">
            </a>
        </td>
        <td>
             <h2 class="nombre">{{$key->name}}</h2>  
        </td>
        <td>
            <p>Precio: ${{$key->price}} </p>        
        </td>
        <td>
            <p>Stock: {{$key->stock}} </p>
        </td>
        <td>
        
           <p>Descripcion: {{$key->description}}</p>
        </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
{{ $productos->links() }}      
     
            <!-- @foreach ($productos as $key)
            <div style="display: inline-block">
                <article>
                <a href="/edit/{{$key->id}}">
                        <img class="img-thumbnail" src='/storage/{{$key->image}}' alt='{{$key->name}}' width="100px" height="100px">
                </a>
                    <h2 class="nombre">{{$key->name}}</h2>     
                    <p>Precio: ${{$key->price}} </p>
                    <p>Stock: {{$key->stock}} </p>
                    <p>Descripcion: {{$key->description}}</p>
                </article>
            @endforeach
            </div>
            

        </section>
        </div>
</div> -->
@endsection
