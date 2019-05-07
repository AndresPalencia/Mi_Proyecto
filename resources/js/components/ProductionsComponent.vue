<template>
<div class="row">	
	<div class="col-sm" v-for="production in productions">
		<div class="card text-center" style="width: 18rem; margin-top: 50px;">
        	<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/" alt="">
 			    <div class="card-body">
    			 <h5 class="card-title">{{ production.name }}</h5>
    			 <p class="card-text">Hola. Mundo!</p>
    			 <a href="/trainers/" class="btn btn-primary">Mostrar</a>
  			 	</div>
  	 	</div>
    </div>	
</div>
</template>

<script>
	export default {
		data() {
			return {
				productions: [
					{ id: 1, name: "Productor1"},
					{ id: 2, name: "Productor2"},
					{ id: 3, name: "Productor3"},
				]
			}
		},
		mounted() {
            console.log('Component mounted.')
	}
}	
</script>

