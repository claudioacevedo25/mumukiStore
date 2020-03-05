@extends('layouts.app')

@section('content')
            <div class="container"> 
                <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-4">
                                    <!-- ACA VA TODO EL CODIGO  -->
                                    <h2 class="my-4">Mi Carrito</h2>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col"> </th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Disponibilidad</th>
                                                    <th scope="col" class="text-center">Cantidad</th>
                                                    <th scope="col" class="text-right">Precio</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                    <td>Kit de admision</td>
                                                    <td>En Stock</td>
                                                    <td><input class="form-control" type="text" value="1" /></td>
                                                    <td class="text-right">124,90 $</td>
                                                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                    <td>Kit correa Toto</td>
                                                    <td>En stock</td>
                                                    <td><input class="form-control" type="text" value="1" /></td>
                                                    <td class="text-right">33,90 $</td>
                                                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                    <td>Kit correa Titi</td>
                                                    <td>En stock</td>
                                                    <td><input class="form-control" type="text" value="1" /></td>
                                                    <td class="text-right">70,00 $</td>
                                                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                    <td>Kit correa Titi</td>
                                                    <td>En stock</td>
                                                    <td><input class="form-control" type="text" value="1" /></td>
                                                    <td class="text-right">70,00 $</td>
                                                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                    <td>Kit correa Titi</td>
                                                    <td>En stock</td>
                                                    <td><input class="form-control" type="text" value="1" /></td>
                                                    <td class="text-right">70,00 $</td>
                                                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                    <td>Kit correa Titi</td>
                                                    <td>En stock</td>
                                                    <td><input class="form-control" type="text" value="1" /></td>
                                                    <td class="text-right">70,00 $</td>
                                                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                    <td>Kit correa Titi</td>
                                                    <td>En stock</td>
                                                    <td><input class="form-control" type="text" value="1" /></td>
                                                    <td class="text-right">70,00 $</td>
                                                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                </tr>                                                                                                
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Sub-Total</td>
                                                    <td class="text-right">255,90 $</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Envio</td>
                                                    <td class="text-right">6,90 $</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Total</strong></td>
                                                    <td class="text-right"><strong>346,90 $</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="/product/list"><button class="btn btn-block btn-light">Seguir comprando</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn  btn-lg btn-block login-button boton">Pagar</button>
                    </div>
                </div>
            </div>
                                
                                </div>
                            </div>
                        </div>
                </div>
            </div>
@endsection