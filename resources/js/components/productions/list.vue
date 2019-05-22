<template>
<!--header('Access-Control-Allow-Origin: *');-->
<div class="row">
	<spinner v-show="loading"></spinner>
	<div class="col-sm" v-for="production in productions">
		<div class="card text-center" style="width: 18rem; margin-top: 50px;">
        	<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" v-bind:src="production.picture" alt="">
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
	import EventBus from '../../event-bus';
    export default {
		data() {
			return {
				productions: [],
				loading: true

			}
		},
        created(){
            EventBus.$on('production-added', data => {
                this.productions.push(data)
            })
        },
		mounted() {
            axios
            	.get('http://127.0.0.1:8000/productions')
            	.then((response) => { 
            		this.productions = response.data
            		this.loading = false
            	})
	}
}	
</script>