@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">{{ __('Modificar-Eliminar Producto') }}</div>
                <div class="card-body">
                    <form action="/edit/{{$unProducto->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value={{$unProducto->name}} required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value={{$unProducto->price}} required autocomplete="price" autofocus>

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>
    
                                <div class="col-md-6">
                                    <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value={{$unProducto->stock}} required autocomplete="stock" autofocus>
    
                                    @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <textarea rows="3" cols="20" class="form-control @error('description') is-invalid @enderror" name="description" required >{{$unProducto->description}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                               
                            </div>
                        </div>            
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                            <div class="col-md-6">
                            <img src="/storage/{{$unProducto->image}}" alt={{$unProducto->name}} class="img-fluid img-thumbnail"  width="100px" height="100px">
                            <input id="image" type="file" class=" @error('image') is-invalid @enderror" name="image" value=""  autocomplete="image" >
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <input type="hidden" name="id" value={{$unProducto->id}}>
                                    <button type="submit" class="btn boton">
                                        {{ __('Actualizar Producto') }}
                                    </button>
                                </div>
                             </div>
                    </form>
                    <br>
                    <form action="/delete/{{$unProducto->id}}" method="post">
                              {{ csrf_field() }}
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <input type="hidden" name="id" value={{$unProducto->id}}>
                                    <button type="submit" class="btn boton">
                                        {{ __('Eliminar Producto') }}
                                    </button>
                                </div>
                            </div>
                     </form>
                          
                        
                </div>
            </div>

    
@endsection