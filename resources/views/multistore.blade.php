@extends('layouts/app')

@section('content')
    <!-- Product Item -->
    <!-- <product-item-component></product-item-component> -->
    <!-- End Producto Item -->
    <div class="container-fluid" id="app">
        <div class="row">
            

            <div class="col-3 " style="padding: 0; position: fixed; z-index: 2; ">
                <content-cart
                    asset-prefix = "{{asset('')}}">
                </content-cart>                    
            </div>
            <div class="col-md-6" style="padding-top: .9em; padding-left: 1.4em; padding-right: 1.4em; border-left: 1px solid #ddd; border-right: 1px solid #ddd; right:-337px">
                <div class="row">
                    <div class="col-md-3 col-card">
                        <div class="form-group">
                            <select-places></select-places>
                        </div>
                    </div> 
                    <div class="col-md-9 col-card" style="margin-bottom: 15px">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar Productos" aria-label="Search" style="background-color: #eee">
                    </div>
                </div>
                
                <content-products-item
                    url-prefix = "{{url('')}}"
                    asset-prefix = "{{asset('')}}">
                </content-products-item>
            </div>

            <div class="col-md-3 card-col" style="padding: 0px; position: fixed; z-index: 10; right:0px">
                <div>
                    <h5 style="padding: 15px; margin:0;">
                        Detalle de Producto
                        
                    </h5>
                    <!-- <div  style="border-top: 1px solid #ddd; padding: 15px">
                        <button class="btn btn-dark btn-sm " @click="comeBackBusiness()">Lista de Negocios</button>
                        
                        <div class="card"  style="margin-top: 15px">
                            <img v-bind:src="'{{asset('')}}'+detailProduct.image" alt="..." height="250px">
                            <hr style="margin-top: 5px; margin-bottom: 5px">
                            <div class="card-body">

                                <h5 class="card-title">@{{detailProduct.productName}}</h5>
                                <span class="badge badge-pill badge-warning" style="font-size: 1.3em">S/. @{{detailProduct.unitPrice}}</span><br>
                                <div style="margin-top: 1em">
                                    <a class="btn btn-light"><b>Añadir al Carrito</b></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>   -->
                </div>
                <div>
                    <h5 style="padding: 15px; margin:0;">
                        Negocios
                    </h5>
                    <div  style="border-top: 1px solid #ddd; padding: 15px">
                        <!-- <div class="list-group">
                            <a v-for="negocio in negocios" v-bind:href="'{{url('/negocio')}}/'+negocio.id" class="list-group-item list-group-item-action" >
                                <b>
                                    @{{negocio.nombre}}
                                </b><br>
                                <small><i class="fa fa-map-marker"></i>&nbsp; Ubicación: @{{negocio.location}}</small><br>
                                <small>
                                (400) Productos en exhibición.
                                </small>
                            </a>
                            
                        </div> -->
                    </div>
                </div> 
                
                
            </div>
        </div>
    </div>
@endsection