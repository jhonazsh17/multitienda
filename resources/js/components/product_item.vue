<template>
    <div class="col-md-4 product_item">
        <!-- All about item product -->
        <div  class="card card-product" style="margin-bottom: 1em" >
                        
            <img  v-on:click.prevent.self="showDetailProduct(itemCurrent)" :src="assetPrefix+''+itemCurrent.image" class="card-img-top" alt="...">
            <div class="card-body">
                <div style="margin-top:10px;">
                    <a :href="urlPrefix+''+resource+'/'+itemCurrent.owner_id"><small>* {{itemCurrent.owner}}</small></a>
                </div>
                <h5 class="card-title">{{itemCurrent.productName}}</h5>
                
                <a class="badge badge-light" style="font-size: 1.2em" title="Agregar al Carrito"> 
                    <!-- <i class="fa fa-plus"></i> -->
                    +
                </a>

                <span class="badge badge-pill badge-warning" style="font-size: 1.2em">S/. {{itemCurrent.unitPrice}}</span>
                
                
            </div>
        </div>
    </div> 
</template>
<script>
export default {
    props: ['itemCurrent', 'urlPrefix', 'resource', 'assetPrefix'],
    data(){ 
        return { 
        }
    },
    created(){ 
        console.log('creado');
    },    
    methods: { 
        showDetailProduct(item){ 
            console.log(item);
        }
    }
}
</script>
<style>
    .product_item{
        padding: 0 7px !important;
    }    
</style>