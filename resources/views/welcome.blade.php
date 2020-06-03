<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        .card-img-top{
            height: 180px;
        }
        .col-card{
            padding-left: 7px;
            padding-right: 7px;
        }
        .nav-link, .navbar-brand{
            color: white !important;
        }
        .col-scroll::-webkit-scrollbar {
    width: 3px;     /* Tamaño del scroll en vertical */
    height: 8px;    /* Tamaño del scroll en horizontal */
}

        /* Ponemos un color de fondo y redondeamos las esquinas del thumb */
.col-scroll::-webkit-scrollbar-thumb {
    background: #ff3838;
}

/* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
.col-scroll::-webkit-scrollbar-thumb:hover {
    background: #b3b3b3;
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}

/* Cambiamos el fondo cuando esté en active */
.col-scroll::-webkit-scrollbar-thumb:active {
    background-color: #999999;
}

/* Ponemos un color de fondo y redondeamos las esquinas del track */
.col-scroll::-webkit-scrollbar-track {
    background: #e1e1e1;
}

/* Cambiamos el fondo cuando esté en active o hover */
.col-scroll::-webkit-scrollbar-track:hover,
.col-scroll::-webkit-scrollbar-track:active {
  background: #d4d4d4;
}

    /* mas estilos */

    .card-product:hover{
        cursor: pointer;
        border: 1px solid #bbb;
        box-shadow: 0px 0px 7px 0px #0000002e;
    }   
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#ff3838 !important; position: fixed; width:100%; z-index:100">
        <a class="navbar-brand" href="#"><b>Máncora Compra</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Tienda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
            </li>
            
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Jhon Felipe Medina Zapata
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <header></header> -->
    <main id="app" style="padding-top:56px">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 " style="padding: 0; position: fixed; z-index: 2; ">
                <h5 style="padding: 15px; margin:0;">
                <i class="fa fa-shopping-cart"></i> &nbsp; Mi Carrito (@{{productsInCart.length}})
                </h5>
                
                
                <div class="carrito col-scroll" style="padding: 15px; border-top: 1px solid #ddd; overflow-y: auto; height: 515px">
                    
                    <div v-if="stateProductsInCart">
                        <div v-if="statePreAddInCart">
                            <div class="text-center" style="padding: 10px; color: black; margin-bottom: 10px; background-color: #eee">
                                <small><b>Este producto esta apunto de ser añadido a tu Carrito de Compras.</b></small>
                            </div>
                            <div class="media">
                                <img v-bind:src="'{{asset('')}}'+preProductAdd.image" class="mr-3" alt="..." width="48px">
                                <div class="media-body">
                                    @{{preProductAdd.productName}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="badge badge-pill badge-secondary">S/. @{{preProductAdd.unitPrice}}</span>
                                            <div style="margin-top: 7px">
                                                <div class="row">
                                                    <div class="col-md-9" style="padding-right: 5px">
                                                        <div class="input-group input-group-sm mb-2">
                                                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="¿Cuánto?" v-model="quantity">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="padding-left: 5px">
                                                        <button class="btn btn-sm btn-light btn-block" @click="addCart(preProductAdd)">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                                      
                                        </div>
                                                       
                                    </div>  
                                </div>      
                            </div>
                            <hr style="margin-top: 10px; margin-bottom: 10px; border: 2px solid #eee">
                        </div> 

                        <div v-if="productsInCart.length>0">
                            <p>
                                <small>Usted tiene @{{productsInCart.length}} Producto<span v-if="productsInCart.length > 1">s</span> en su carrito de Compras.</small>   
                            </p>    
                            <div class="list-group">
                                <button type="button" v-for="product in productsInCart" class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <img v-bind:src="'{{asset('')}}'+product.image" class="mr-3" alt="..." width="48px">
                                        <div class="media-body">
                                            @{{product.productName}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="badge badge-pill badge-warning">@{{product.quantity}}</span>
                                                    <span class="badge badge-pill badge-secondary">S/. @{{product.unitPrice}}</span>
                                                    <div style="margin-top: 7px">
                                                        <a @click="removeProductCart(product.idProduct)" class="btn btn-light btn-sm"> <i class="fa fa-times"></i>  </a>
                                                        <a href="" class="btn btn-light btn-sm"> <i class="fa fa-edit"></i>  </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <span class="badge badge-pill badge-dark">S/. @{{(product.quantity * product.unitPrice).toFixed(2)}}</span>
                                                </div>
                                                
                                            </div>    
                                        </div>
                                    </div>
                                </button>
                            </div>

                            <div style="margin-top: 12px; ">
                                <div class="row">
                                    <div class="col-md-6" style="padding-top: .5em">
                                        <b>El Total es:</b>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <b style="font-size: 1.5em">S/. @{{totalPay.toFixed(2)}}</b>   
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: 12px; ">
                                <button class="btn btn-warning btn-block"><b>Realizar Compra</b></button>
                            </div>
                        </div>
                    </div>

                    <div v-else class="text-center" style="padding: 2em">
                        <p>
                            Aún no tienes Productos en tu Carrito de Compras.
                        </p>
                        <img src="{{asset('img/cart.png')}}" alt="" width="50%"style="opacity: .5">
                    </div>
                    
                </div> 

                    
            </div>
            <div class="col-md-6" style="padding-top: .9em; padding-left: 1.4em; padding-right: 1.4em; border-left: 1px solid #ddd; border-right: 1px solid #ddd; right:-337px">
                <div class="row">
                    <div class="col-md-3 col-card">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" style="background-color: #eee">
                                <option selected disabled>Elegir lugar</option>
                                <option v-for="lugar in lugares">@{{lugar.nombre}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 col-card" style="margin-bottom: 15px">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar Productos" aria-label="Search" style="background-color: #eee">
                    </div>
                </div>
                <div class="row">
                
                    <div class="col-md-4 col-card " v-for="product in products">
                        <div  class="card card-product"  style="margin-bottom: 1em">
                        
                            <img @click="showDetailProduct(product)" v-bind:src="'{{asset('')}}'+product.image" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div style="margin-top:10px;">
                                    <a v-bind:href="'{{url('/negocio')}}/'+product.owner_id"><small><i class="fa fa-user"></i> @{{product.owner}}</small></a>
                                </div>
                                <h5 class="card-title">@{{product.productName}}</h5>
                                
                                <a class="badge badge-light" style="font-size: 1.2em" @click="preAddCart(product)"> 
                                    <i class="fa fa-plus"></i>
                                </a>

                                <span class="badge badge-pill badge-warning" style="font-size: 1.2em">S/. @{{product.unitPrice}}</span>
                                
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-3 card-col" style="padding: 0px; position: fixed; z-index: 10; right:0px">
                <div v-if="stateDetail">
                    <h5 style="padding: 15px; margin:0;">
                        Detalle de Producto
                        
                    </h5>
                    <div  style="border-top: 1px solid #ddd; padding: 15px">
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
                    </div>  
                </div>
                <div v-else>
                    <h5 style="padding: 15px; margin:0;">
                        Negocios
                    </h5>
                    <div  style="border-top: 1px solid #ddd; padding: 15px">
                        <div class="list-group">
                            <a v-for="negocio in negocios" v-bind:href="'{{url('/negocio')}}/'+negocio.id" class="list-group-item list-group-item-action" >
                                <b>
                                    @{{negocio.nombre}}
                                </b><br>
                                <small><i class="fa fa-map-marker"></i>&nbsp; Ubicación: @{{negocio.location}}</small>
                            </a>
                        </div>
                    </div>
                </div> 
                
                
            </div>
        </div>
    </div>
        
    </main>
    <footer></footer>               

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
        //instancia de vue
        var appTienda = new Vue({
            el: "#app",
            data: {
                quantity: 0,
                lugares: [
                    {
                        nombre: "Casa Grande",
                        departamento: "La Libertad"
                    },
                    {
                        nombre: "Máncora",
                        departamento: "Piura"
                    },
                    {
                        nombre: "Los Organos",
                        departamento: "Piura"
                    }
                ],
                negocios: [
                    {
                        nombre: "Negocios Don Lalo",
                        location: "Calle Los Incas s/n",
                        id: 1,
                    },
                    {
                        nombre: "Negocios Charito",
                        location: "Av. Grau 545 - Máncora",
                        id: 2,
                    },
                    {
                        nombre: "Bodega Max",
                        location: "Calle Los Incas s/n - Máncora",
                        id: 3,
                    },
                    {
                        nombre: "Comercial Mario",
                        location: "Av. Piura s/n - Máncora",
                        id: 4,
                    },
                    {
                        nombre: "Bodega Mar Azul",
                        location: "Calle Santa Rosa",
                        id: 5,
                    }
                ],
                productsInCart: [],
                statePreAddInCart: false,
                products: [
                    {
                        productName: "Arroz Costeño Graneadito de 1k",
                        quantity: 0,
                        unitPrice: 3.50,
                        image: 'img/arroz.png',
                        idProduct: 1,
                        owner: "Negocios Charito",
                        owner_id: 2
                    },
                    {
                        productName: "Gelatina Negrita sabor Fresa",
                        quantity: 0,
                        unitPrice: 3.70,
                        image: 'img/gelatina.png',
                        idProduct: 2,
                        owner: "Negocios Don Lalo",
                        owner_id: 1, 
                    },
                    {
                        productName: "Aceite Cocinero Vegetal de 1L",
                        quantity: 0,
                        unitPrice: 8.00,
                        image: 'img/aceite.png',
                        idProduct: 3,
                        owner: "Bodega Max",
                        owner_id: 3,
                    },
                    {
                        productName: "Sopa Instantánea Ajinomen",
                        quantity: 0,
                        unitPrice: 2.00,
                        image: 'img/ajinomen.png',
                        idProduct: 4,
                        owner: "Juan Anton",
                        owner_id: 6,
                    },
                    {
                        productName: "Fideos Molitalia Letras",
                        quantity: 0,
                        unitPrice: 4.10,
                        image: 'img/molitalia-letras.png',
                        idProduct: 5,
                        owner: "Comercial Mario",
                        owner_id: 4,
                    },
                    {
                        productName: "Mantequilla La Danesa",
                        quantity: 0,
                        unitPrice: 4.50,
                        image: 'img/danesa.png',
                        idProduct: 6,
                        owner: "Bodega Mar Azul",
                        owner_id: 5,
                    }
                ],

                preProductAdd: {},
                detailProduct: {},
                stateProductsInCart: false,
                totalPay: 0,
                stateDetail: false,

            },

            created: function(){
                
            },
            methods:{
                addCart: function(product){
                    this.stateProductsInCart = true;
                    this.statePreAddInCart = false;
                    this.validateIfExistProductInCart(product);                   
                   // this.totalCartPay(product.unitPrice, product.quantity);
                    
                },
                preAddCart: function(product){
                    this.stateProductsInCart = true;
                    this.statePreAddInCart = true;
                    this.preProductAdd = product;
                },
                totalCartPay: function(price, quantity){
                    var priceProduct = price;
                    var quantityProduct = quantity;
                    this.totalPay = this.totalPay + (priceProduct*quantityProduct);
                },
                showDetailProduct: function(product){
                    this.detailProduct = product;
                    this.stateDetail = true;
                },
                comeBackBusiness: function(){  
                    this.stateDetail = false;
                },
                removeProductCart: function (idProduct) {
                    this.totalPay = 0;
                    //array  auxiliar
                    var arrayAux = [];
                    
                    //indice de array auxiliar 
                    var k = 0;

                    //Reinicializar variable total pay 
                    this.totalPay=0;

                    //bucle recorre, para eliminar el producto con el idProduct seleccionado
                    for (let i = 0; i < this.productsInCart.length; i++) {
                        if (this.productsInCart[i]['idProduct']==idProduct) {                           
                           delete this.productsInCart[i]; 
                                                
                        }                        
                    }

                    //bucle que recorre para descartar los elementos undefined generados por delete
                    for (let j = 0; j < this.productsInCart.length; j++) {
                        if (this.productsInCart[j]!=undefined) {
                            arrayAux[k]=this.productsInCart[j];
                            this.totalCartPay(arrayAux[k]['unitPrice'], arrayAux[k]['quantity']);
                            k++;
                        }
                    }

                    //evalua si el array auxiliar queda totalmente vacío o con elementos
                    if(arrayAux.length>0){
                        this.productsInCart = arrayAux;
                    }else{    
                        this.productsInCart = arrayAux;
                        this.stateProductsInCart = false;
                        this.totalPay = 0;
                    }                    
                },
                validateIfExistProductInCart: function(product){

                    var quantityTemp = 0;
                    var flag = 0;
                    var index = 0;                   

                    if (this.productsInCart.length > 0) {
                        for (let i = 0; i < this.productsInCart.length; i++) {
                            if (this.productsInCart[i]['idProduct'] == product.idProduct) {
                                quantityTemp = this.productsInCart[i]['quantity']; 
                                index = i;
                                flag = flag + 1;
                            }
                            else{
                                flag = flag + 0;
                            }                            
                        }

                        if(flag==0){
                            product.quantity = this.quantity; 
                            this.productsInCart.push(product);
                        }else  {
                            this.productsInCart[index]['quantity'] = parseInt(quantityTemp) + parseInt(this.quantity);
                        }
                    }
                    else {   
                        product.quantity = this.quantity;                     
                        this.productsInCart.push(product);
                    }

                    this.quantity = 0 ;
                }
               
            },
        });
    </script>
</body>
</html>