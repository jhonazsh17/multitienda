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
		}
	},
	methods: {
		/* => Method: this method cancel the action add in cart. */
		cancel(){
			this.$emit('update:quantityState', false);
		},	
		/* --- End Method <--- */

		addToCart(){
			this.itemCurrent.quantity = this.quantity;
			console.log('add', this.itemCurrent);
		}	
	}
}
</script>