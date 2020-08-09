<template>
	<div class="select_places">
		<select class="form-control" style="background-color: #eee" @click="change()">
            <option selected disabled>Elegir lugar</option>
            <option >e</option>
        </select>
	</div>
</template>

<script>
export default{	
	data(){
		return {

		}	
	},
	methods:{
		change(){
			console.log('hola');
		}	
	}
}
</script>