@extends('layouts.app')

@section('content')
<!-- Page Content -->


                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid img-size marcas" src="./images/carrusel.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="./images/marcas.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="./images/black-friday.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-6 mb-4">
                        <h2>¿Quienes somos?</h2>
                        <p>Mumuki Store es una empresa familiar con nivel internacional que lleva mas de 10 años en el mercado autopartista, brindando calidad y confianza a sus clientes. Somos tu primera opcion en compra de repuestos, cuando buscas lo mejor para tu vehiculo.</p>
                        <br>

                        <img class="img-fluid" src="./images/autopartes.jpg" alt="Imagen de repuestos">

                        <br>
                        <br>
                    </div>

                   

                </div>

                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->
            
            <div class="col-lg-12">
            
                
                <div class="mx-auto d-block">
                        <div class="row">
                            <div class="col lg-4 ceo">
                                <img class="dario " src="./images/dario-presidente.jpg" alt="imagen dario">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col lg-8 ceo">
                            <span class="text-center">
                                <h2>Dario Susnisky</h2>
                                
                                <p>CEO </p>
                                </span>
                            </div>

                        </div>
                    </div>
            
            
            

<!-- /.container -->

@endsection
