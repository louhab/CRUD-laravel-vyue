<template>
    <div class="container">
        <incription></incription>
        <coonexion></coonexion>
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            Welcome to CRUD SYSTEME WITH LARAVEL/VUEJS
                        </h3>
                    </div>

                    <div class="card-body">
                     <div  v-if="logged" class="d-flex justify-content-around">
                        

        
                           <produit></produit>
                           <Categories></Categories>
                        
                     </div> 
                     
                        <div v-else>
                            <div  class="d-flex justify-content-around">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inscription">
                                Incription 
                                </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#connexion">
                                connexion
                                </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
import Categories from './Categories.vue'
    export default {
  components: { Categories },
       data(){
           return{
               logged :  User.isLogged().logged,
               Produitkamlin: '/Produitkamlin',
               value:''
           }
       },
       
       
    }
</script>
