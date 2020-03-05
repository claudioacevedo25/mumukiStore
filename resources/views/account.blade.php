@extends('layouts.app')

@section('content')


<div class="container">

    <div class="col-lg-12 col-md-6 mb-4 faqs">
        <!-- ACA VA TODO EL CODIGO -->
        <h2 class="my-4">Mi Cuenta</h2>
        <div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>

                </div>             
            @endif
        </div>
                        <!-- ACA VA TODO EL CODIGO  -->
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/account/edit/{{Auth::user()->id}}">
                            {{ csrf_field() }}                                                        
                            <div class="form-group text-center>">                                                        
                                <img src="/storage/{{Auth::user()->avatar}}" class="avatar img-circle mx-auto d-block" alt="AVATAR" height="150px" width="150px">
                            </div>

                            <div class="form-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <label for="firstName" class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" autofocus >
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <label for="lastName" class="col-sm-3 control-label">Apellido</label>
                                <div class="col-sm-9">
                                    <input type="text" name="surname" value="{{ Auth::user()->surname }}" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <label for="email" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" disabled >
                                </div>
                            </div>             

                            <div class="form-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <label for="avatar" class="col-sm-3 control-label">Nuevo Avatar</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="avatar" >
                                    </div>
                                </div>
                            <!-- /.form-group -->
                            <br>
                            <br>
                            <div class="col-sm-9 col-sm-offset-3 form-group">
                                    <input type="hidden" name="id" value={{Auth::user()->id}}>
                                    <button type="submit" class="btn  btn-lg btn-block login-button boton" >Guardar Cambios</button>    
                            </div>
                            <div class="col-sm-9 col-sm-offset-3 form-group">
                                    
                            
                            </div>                                    
                        </form>
    </div>
</div>
             

    
@endsection
