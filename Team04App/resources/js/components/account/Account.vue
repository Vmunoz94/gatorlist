<template>
  <div class="container-fluid">
     <div class="row">    
         <div class="col-12 col-lg-3">
             <div class="navbar navbar-inverse navbar-fixed-left">                    
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
            return{
                currentComp : accountdetails
             } 
        },
        components : {
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
    
</style>

