<template>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          
            
          <div class="form-group">
            <label for=""> email</label>
           <input type="text"  v-model="email" class="form-control">
          </div>
          <div class="form-group">
            <label for=""> mot de passe </label>
           <input type="password"  v-model="password" class="form-control">
          </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" @click="login()">Connexion</button>
        <button type="button" class="btn btn-danger" >Annuler</button>
      </div>
    </div>
  </div>
</div>
</template>
<script>

   export default {
    data(){
        return{
           
            email : '',
            password : '',
        }
    },
    created (){
     
    },
    methods : {
        login(){
            axios.post('/api/user/login',{
                email : this.email,
                password :this.password
            }).then(response=>{
                console.log(response.data);
                User.storeUser(JSON.stringify(response.data));
                $('#connexion').modal('hide');
               this.tile="";
               this.body="";
               this.category="";
               this.image=null;
               Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'bienvenue',
                    showConfirmButton: false,
                    timer: 1500
                  });
               this.$emit("added");
               this.$router.go();
                

            }).catch(
                err=>console.log(err)
            );
        }
    }
    
}
</script>
