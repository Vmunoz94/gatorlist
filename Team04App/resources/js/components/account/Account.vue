<template>
  <div class="container-fluid">
    <!-- <div class="split left"> -->
     <div class="row">    
         <div class="col-12 col-lg-3">
             <div class="navbar navbar-inverse navbar-fixed-left">
               <!-- <div class="text-left"> -->
                    
                     <ul class="nav navbar-nav"> 
                                               
                         <button @click='toggle("gatorlist-account_details-component")' class="btn btn-dark btn-large"> Account Details </button>

                         <button @click='toggle("gatorlist-pendinglistings-component")' class="btn btn-dark btn-large"> Pending Listings</button>
                         <button @click='toggle("gatorlist-editlistings-component")' class="btn btn-dark btn-large"> Edit Listings</button>
                         <button @click='toggle("gatorlist-messages-component")' class="btn btn-dark btn-large"> Messages</button>

                         
                     </ul>  
                          
             </div>
        </div> 
         <div class="col border-left hide">
             <component :is="currentComp"> </component>
             
        </div>  
     </div>  
  </div>       
   
</template>




<script>
import pendingListings from "./PendingListings.vue"
import accountdetails from "./Account_details.vue"
import editlistings from "./EditListings.vue"
import messages from "./Messages.vue"
export default {
        
        data: function () {           
            // id: [1,2,3,4]
            return{
                currentComp : accountdetails
             } 
        },
        components : {
            // 'gatorlist-login-component' : login,
            "gatorlist-account_details-component" : accountdetails,
            "gatorlist-pendinglistings-component" : pendingListings,
            "gatorlist-editlistings-component" : editlistings,
            "gatorlist-messages-component" : messages

        },
        methods :{
            toggle(comp){
                this.currentComp = comp;
            }
        }
        
    }  


    
</script>






<style scoped>
button{
  margin: 13px;
}
.navbar {
        background-color: transparent !important;
    }
    .navbar-light .navbar-nav .nav-link:hover {
        box-shadow: 0px 2px 10px black;
        /* -moz-box-shadow: 0 2px 10px black; */
        /* -webkit-box-shadow: 0 2px 10px black; */
        background-color: black !important;
        border-radius: 5px;

        transition: color 0.1s ease-in-out;
        color: white !important;
    }
</style>

