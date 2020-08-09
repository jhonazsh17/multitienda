<template>
    <div class="product_item col-md-4">
        <div class="card card-product" style="margin-bottom: 1em" >
                        
            <img @click="showDetailProduct()" v-bind:src="assetPrefix+''+itemCurrent.image" class="card-img-top" alt="...">
            <div class="card-body">
                <div style="margin-top:10px;">
                    <a v-bind:href="urlPrefix+''+resource+'/'+itemCurrent.owner_id">
                        <small>* {{itemCurrent.owner}}</small>
                    </a>
                </div>
                <h5 class="card-title">
                    {{itemCurrent.productName}}
                </h5>
                
                <div v-if="quantityState == false">
                    <a class="badge badge-light" style="font-size: 1.2em" title="Agregar al Carrito" @click="addCart()"> 
                        <!-- <i class="fa fa-plus"></i> -->
                        +
                    </a>

                    <span class="badge badge-pill badge-warning" style="font-size: 1.2em">
                        S/. {{itemCurrent.unitPrice}}
                    </span>
                </div>
                <div v-else>
                    <input-quantity
                    :quantityState.sync="quantityState"
                    :itemCurrent="itemCurrent">
                    </input-quantity>
                </div>
                
            </div>
        </div>
    </div> 
</template>
<script>

import InputQuantity from './input_quantity.vue';

export default {
    components: {
        InputQuantity
    },
    props: ['itemCurrent', 'urlPrefix', 'resource', 'assetPrefix'],
    data(){ 
        return { 
            quantityState: false,
        }
    },
    created(){ 
        this.show();
    },    
    methods: { 
        showDetailProduct(){ 
            console.log('esp');
        },
        addCart(){ 
            this.quantityState = true;
        },
        show(){ 
            console.log("Hola dos");
        },
    }
}
</script>
<style>
    .product_item{
        padding: 0 7px !important;
    }    
</style>