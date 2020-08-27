<template>
	<div class="input_quantity">
		<!-- <input type="number" class="form-control form-control-sm" value="1"> -->
		<div class="input-group input-group-sm mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-sm">¿Cuánto?</span>
			</div>
			<input type="number" v-model="quantity" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" >
		</div>
		<button type="button" class="btn btn-warning light btn-sm" @click="addToCart"><b>+ Añadir</b></button>
		<button type="button" class="btn btn-light btn-sm" @click="cancel">Cancelar</button>
	</div>
</template>
<script type="text/javascript">
export default{
	props: ['quantityState', 'itemCurrent'],
	data(){
		return {
			quantity: 1,
			itemsInCart: [],
			stateAddItem: true,
		}
	},
	created(){
		this.itemsInCart = this.$store.getters.getItemsInCartGetters;
	},
	methods: {
		/* => Method: this method cancel the action add in cart. */
		cancel(){
			this.$emit('update:quantityState', false);
		},	
		/* ---- End Method ---- */

		/* => Method: this method add item in cart - use vuex */
		addToCart(){
			this.cancel();
			this.itemCurrent.quantity = parseInt(this.quantity);
			let quantity = null;			
			let itemsInCart = this.itemsInCart;

			itemsInCart.forEach( itemInCart => {
				if(itemInCart.idProduct == this.itemCurrent.idProduct) {
					this.stateAddItem = false
					quantity = itemInCart.quantity;
				}	
			});

			if(this.stateAddItem){
				this.$store.dispatch('addItemToCart', this.itemCurrent);
			} else {
				this.$store.dispatch('updateQuantityOfItemInCart', this.itemCurrent, quantity);
			}	

			this.stateAddItem = true;
		}	
		/* ---- End Method --- */
	}
}
</script>