<template>
  <div class="container-fluid">
     <div class="row">    
         <div class="col-12 col-lg-3 border-right">
            <ul class="nav navbar-nav">  
                <router-link 
                v-for='(button, index) in buttons' 
                :key='index' 
                :to='button.link'
                tag="button"
                class="btn btn-dark btn-large w-50 mx-auto my-2"
            >        
            {{ button.title }}
            </router-link>
            </ul>                            
        </div> 
         <div class="col">
             <router-view></router-view>          
        </div>  
     </div>  
  </div>       
   
</template>




<script>
    export default {
            
        data: function () {           
            return{
                buttons: [{
                    title: "Account Details",
                    link: "/account",
                },{
                    title: "Pending Listings",
                    link: "/account/pendingListings",
                },{
                    title: "Edit Listings",
                    link: "/account/editListings",
                },{
                    title: "Messages",
                    link: "/account/messages",
                },
                ]
            } 
        },     
    }    
</script>


<style scoped>

</style>

