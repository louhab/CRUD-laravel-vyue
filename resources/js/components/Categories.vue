<template>
    <div class="col-md-4">
        <div class="card">
            <h2 class="card-header">
                categories
            </h2>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"
                    v-for="(categorie,index) in categories"
                    :key="index"
                    >
                    <a >{{categorie.name}}</a>
                       
                    </li>
                </ul>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data(){
        return{
            categories : []
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