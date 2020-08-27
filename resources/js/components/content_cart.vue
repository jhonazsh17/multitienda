<template>
    <div class="content_cart">
        <h5 style="padding: 15px; margin:0;">
            <i class="fa fa-shopping-cart"></i> &nbsp; Mi Carrito ({{itemsInCart.length}})
        </h5>
        
        
        <div class="carrito col-scroll" style="padding: 15px; border-top: 1px solid #ddd; overflow-y: auto; height: 515px">
            
            <div v-if="itemsInCart.length>0">
                
                <div>
                    <p>
                        <small>
                            Usted tiene {{itemsInCart.length}} Producto<span v-if="itemsInCart.length > 1">s</span> 
                            en su carrito de Compras.
                        </small>   
                    </p> 

                    <div>
                        
                        <table class="table table-bordered">
                            <tr v-for="(item, index) in itemsInCart.slice().reverse()"
                                :key="index">
                                <td>
                                    {{item.quantity}}
                                </td>
                                <td>
                                    {{item.productName}}
                                </td>
                                <td>
                                    {{item.unitPrice}}
                                </td>
                                <td>
                                    {{ (item.unitPrice * item.quantity).toFixed(2) }}
                                </td>
                            </tr>  
                        </table>   
                    </div>

                    <div style="margin-top: 12px; ">
                        <button class="btn btn-warning btn-block" @click="buyPrev()"><b>Realizar Compra</b></button>
                    </div>
                </div>
            </div>

            <div class="text-center content-no-items" v-else>
                <p>
                    Aún no tienes Productos en tu Carrito de Compras.
                </p>
                <img v-bind:src="assetPrefix+''+cartImage" alt="" width="50%" style="opacity: .5">
            </div>
            
        </div> 

    </div>
</template>
<script>
export default {
    props: ['assetPrefix'],
    data(){
        return {
            cartImage: 'img/cart.png',
            itemsInCart: [],
        }    
    },
    created(){
        this.itemsInCart = this.$store.getters.getItemsInCartGetters;
        console.log(this.itemsInCart);
    }      
}
</script>
<style>
    .content-no-items{
        padding: 1em;
    } 
</style>