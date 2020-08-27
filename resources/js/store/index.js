export default{
    state: {
        //states
        itemsInCart: [],
        itemsInCartCopy: [],
    },
    getters: {
        //all getters of state
        getItemsInCartGetters(state){
            return state.itemsInCart;
        }    
    },
    actions: {
        //all actions like a methods
        addItemToCart(context, item){
            context.commit("itemsInCartCollection", item);
            context.commit("itemsInCartCopyCollection", item);
        },
        updateQuantityOfItemInCart(context, item, quantity){
            context.commit("quantityOfItem", item, quantity);
        }
    },
    mutations: {
        //all mutations for states, like a setters
        itemsInCartCollection(state, item){
            return state.itemsInCart.push(item);
        },
        itemsInCartCopyCollection(state, item){
            return state.itemsInCartCopy.push(item);
        },
        quantityOfItem(state, item, quantity){
            console.log('tem', state.itemsInCartCopy);
            // state.itemsInCart.forEach( itemInCart => {
            //     console.log(itemInCart.quantity);
            //     // if(itemInCart.idProduct == item.idProduct){
            //     //     console.log('hola', item.quantity);
            //     //     console.log('hola', itemInCart.quantity);
            //     //     let quantityCurrent = itemInCart.quantity; 
            //     //     let quantityComing = item.quantity;
            //     //     itemInCart.quantity = quantityCurrent + quantityComing;
            //     //     console.log(itemInCart);
            //     // }    
            // });
        }    
    }
}