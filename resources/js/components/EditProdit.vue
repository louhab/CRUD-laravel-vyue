
<template>
    
<div>
    



<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit tache </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="" method="post">
          
            
          <div class="form-group">
            <label for=""> modifier le produit {{produit.name}} </label>
           <input type="text" v-model="name"  class="form-control">
          </div>
          <div class="form-group">
            <label for="">Ctagorie :</label>
            <select  v-model="category_id" class="form-control" >
                <option :value="categorie.id"  v-for="(categorie,index) in categories " :key="index" >
                  {{categorie.name}}
                </option>
            </select>
          </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        <button type="button" class="btn btn-primary" @click="editer()">Editer </button>
      </div>
    </div>
  </div>
</div>
</div>
</template>
<script>
export default {
    data(){
      return{
        categories:{},
        categorie : "",
        category_id :"",
        name:""
      }
    },
    props:['produit'],
    methods:{
        editer(){
          axios.patch('/api/produit/update/'+this.produit.id,{
               name:this.name,
               category_id:this.category_id
            }).then(response=>{
              this.$router.go();
               $('#editmodal').modal('hide');
               this.tile="";
               this.body="";
               this.category="";
               this.image=null;
               Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'la modification a ete faite !  ',
                    showConfirmButton: false,
                    timer: 1500
                  });
               this.$emit("added");
            })
        }
    },
    created(){
        axios.get('/api/categories')
            .then(
                response=>
             (this.categories=response.data.categories) 
            )
            .catch(error=>console.log(error))
    }
}
</script>