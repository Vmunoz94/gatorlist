<template>
  <div class="container-fluid">
     <div class="row">    
         <div class="col-12 col-sm-4 col-md-3 col-lg-2 my-4 border-right">
            <ul id="options" class="nav navbar-nav mx-auto">  
                <router-link 
                v-for='(button, index) in buttons' 
                :key='index' 
                :to='button.link'
                tag="button"
                class="btn btn-dark btn-large w-100 mx-auto my-2"
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
                buttons: [
                {
                    title: "Admin Panel",
                    link: "/account/adminPanel", 
                },
                {
                    title: "Account Details",
                    link: "/account",
                },{
                    title: "Pending Listings",
                    link: "/account/pendingListings",
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
    #options{
        max-width: 200px;
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    }
</style>

