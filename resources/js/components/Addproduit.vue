<template>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Ajouter un produit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          
            
          <div class="form-group">
            <label for=""> Nom du produit </label>
           <input type="text" v-model="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Ctagorie :</label>
            <select v-model="category" name="category" class="form-control" required id="">
                <option :value="categorie.id" v-for="(categorie,index) in categories " :key="index" >
                  {{categorie.name}}
                </option>
            </select>
          </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" @click="addproduct()">Ajouter</button>
        <button type="button" class="btn btn-danger" >Annuler</button>
      </div>
    </div>
  </div>
</div>
</template>
<script>
export default {
    data(){
        return {
            categories : {},
            category :"",
            name:"",
            categories_id:""
        }
    },
    created(){
        axios.get('/api/categories')
            .then(
                response=>
             (this.categories=response.data.categories) 
            )
            .catch(error=>console.log(error))
    },
    methods:{
        addproduct(){
            axios.post('/api/produits/add',{
               name:this.name,
               category_id:this.category,
               categories_id:this.category
            }).then(response=>{
              this.$router.go();
              $('#addproduct').modal('hide');
               this.tile="";
               this.body="";
               this.category="";
               this.image=null;
               Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'le produit a ete ajoute  !  ',
                    showConfirmButton: false,
                    timer: 1500
                  });
               this.$emit("added");
            })
        }
    }
}
</script>