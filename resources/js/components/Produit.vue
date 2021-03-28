<template>

    <div class="container mt-4">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct">
  Ajouter un produit
</button>
<button class="btn btn-primary" @click="logout()">Deconnexion</button>

        <div class="row justify-content-center">
            <add-produit></add-produit>
           <edit-produit v-bind:produit="produit"></edit-produit>
            <div class="col-md-12">
           
                <div v-if="loading">Chargement...</div>
                <div class="card mt-3" v-else>
                    <table class="table ">
                            <thead>
                                <tr>
                                
                                <th >Produit</th>
                                <th >categorie</th>
                                <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="produit in produits.data" :key="produit.id" >
                                
                                <td>{{produit.name}} </td>
                                <td>{{produit.category.name}}</td>
                                <td>


                                <div>
                                       <button  class="btn btn-primary" 
                    data-toggle="modal" 
                    data-target="#editmodal" @click="getproduct(produit.id)">
                            editer 
                            </button>
                                    <button  class="btn btn-danger" 
                                    @click="deleteproduit(produit.id)">
                                            suprimer
                                            </button>
                                        </div>
                                </td>
                                </tr>
                                <tr>
                                
                                </tr>
                            </tbody>
                     
                            
                            </table>
                               
     
        
                </div>
                    <div class="d-flex justify-content-center mt-4" >
                                <pagination :data="produits" @pagination-change-page="getResults"></pagination>
                            </div>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
       
        data(){
            return {
                
                produits : {},
                loading: true,
                produit : {},
               
            }
        },
        mounted() {
          
        },
        created(){
             
           
            axios.get('/api/produits')
            .then(
                response=>
             (this.produits=response.data.produits) 
            )
            .catch(error=>console.log(error))
            .finally(() => this.loading = false)

            
            
        
        
        },
       methods: {
            getproduct(id){
                 axios.get('/api/produits/edit/'+id)
                 .then(response=>
                 this.produit=response.data
                 ).catch(error=>console.log(error))
            } ,
            deleteproduit(id){
                 Swal.fire({
                title: 'vous etes sur ?',
               
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'oui!',
                cancelButtonText: 'Non!'})
                .then((result) => {
                if (result.isConfirmed) {
                axios.delete('/api/produits/delete/'+id)
                 
                 
                 this.$router.go();
                }
                 }
                 ).catch(error=>console.log(error))
            } ,
            logout(){
        User.logOut();
        this.logged=false;
        this.$router.go();
       
      },
      getResults(page = 1) {
			axios.get('/api/produits/?page=' + page)
				.then(response => {
					this.produits= response.data.produits;
				});
		}
        },
        
    }
</script>
