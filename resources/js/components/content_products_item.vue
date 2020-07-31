<template>
    <div class="row content_products_item">
        <product-item 
            v-for="(item, index) in products" 
            :key="index"
            :itemCurrent="item"
            :urlPrefix="urlPrefix"
            :resource="resource"
            :assetPrefix="assetPrefix">
        </product-item>
    </div>
</template> 

<script>
import ProductItem from './product_item.vue'; 

export default {
    components: {
        ProductItem
    },
    props: ['urlPrefix', 'assetPrefix'],
    data(){
        return {
            resource: "/negocio",
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
        }    
    }    
}
</script>

<style >
</style>
