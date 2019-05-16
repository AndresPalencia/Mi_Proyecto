<template>
<div class="modal fade" id="addProduction" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Produccion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form @submit.prevent="saveProduction">
	        <div class="form-group">
			    <label>Nombre de la Produccion</label>
			    <input type="text" class="form-control" placeholder="Ingrese el nombre de la produccion" v-model="name">
		  	</div>
		  	<div class="form-group">
			    <label>Imagen</label>
			    <input type="text" class="form-control" placeholder="Ingrese la url de una imagen" v-model="picture">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Save</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>

<script>
	export default {
    data(){
      return {
        name: null,
        picture: null
      }
    },
    methods: {
      saveProduction: function(){
        axios.post('http://127.0.0.1:8000/productions',{
          name: this.name,
          picture: this.picture
        })
        .then(function(response){
          console.log(response)
          $('#addProduction').modal('hide')
        })
        .catch(function(err){
          console.log(err)
        });
      }
    }
  }
</script>

<style>

</style>