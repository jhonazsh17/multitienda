export default{
    state: {
        //states
        productsInCart: [],
    },
    getters: {
        //all getters of state
        getProductsInCartGetters(state){
            return state.productsInCart;
        }    
    },
    actions: {
        //all actions like a methods
        addProductToCart(context, item){
            context.commit("productsInCartCollection", item);
        }
    },
    mutations: {
        //all mutations for states, like a setters
        productsInCartCollection(state, item){
            return state.productsInCart.push(item);
        }    
    }
}