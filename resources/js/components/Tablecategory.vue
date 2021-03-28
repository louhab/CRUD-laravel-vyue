<template>
    <div class="modal fade" id="categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">table categories </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <table class="table ">
                            <thead>
                                <tr>
                                
                                <th >categorie</th>
                                <th >Produit</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(categorie,index) in categories"
                    :key="index" >
                                
                                <td>{{categorie.name}} </td>
                                <td><ul>
                                    <li>{{categorie.produits.name}}</li>
                                    </ul>
                                    </td>
                                
                                </tr>
                                <tr>
                                
                                </tr>
                            </tbody>
                     
                            
                            </table>



      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" >fermer</button>
      </div>
    </div>
  </div>
</div>
</template>
<script>
export default {
    data(){
        return{
            categories : {}
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