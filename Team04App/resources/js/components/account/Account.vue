<template>
  <div class="container-fluid">
    <!-- <div class="split left"> -->
     <div class="row">    
         <div class="col-12 col-lg-3">
             <div class="navbar navbar-inverse navbar-fixed-left">
               <!-- <div class="text-left"> -->
                     <ul class="nav navbar-nav">
                         <div v-for='action in actions'
                             :key="action.num">
                         <li @click.native="on_action(action.num, $event)" class="ui text-dark Black button small w-90 mx-auto my-2"> {{action.name}} </li>
                         </div>                         
                     </ul>        
             </div>
        </div> 
         <div class="col border-left hide">
             <keep-alive>
              <div v-if="get_id()===1" > 
                  hi
              </div>
              <div v-else>
                 no
              </div>   
             <!-- <div v-for="action in actions"
                 :key="action.name"
                  @click.native="on_action(action)"> 
            </div> -->
             </keep-alive>                
         <!-- </div> -->
     </div>  
     </div>  
  </div>       
   
</template>




<script>
export default {
        data: function () {
            
            // id: [1,2,3,4]
            return{     
                id:0,           
                actions: [{
                    num : 1,
                    name: 'Account Details',
                    component: 'gatorlist-account_details-component',
                    link: '/account_details',
                },
                {
                    num : 2,
                    name: 'Pending Listings',
                    component: 'gatorlist-pending_listings-component',
                    link: '/pending_listings',
                },
                {
                    num : 3,
                    name: 'Add Listing',
                    component: 'gatorlist-add_listing-component',
                    link: '/add_listing',
                },
                {
                    num : 4,
                    name: 'Edit Listing',
                    component: 'gatorlist-edit_listing-component',
                    link: '/edit_listing',
                },
                {
                    num : 5,
                    name: 'Messages',
                    component: 'gatorlist-login-component',
                    link: '/login',
                }],
            }
        },
        methods:{
            on_action: function(num){
                if (num === 1){
                    this.id=1;
                }else if (num=== 2) {
                    this.id = 2;
                }else if (num == 3){
                    this.id = 3;
                }else if (num == 4) {
                    this.id = 4;
                } else {
                    this.id = 5;
                }
                // return action.name
                // return "hi"
                // <component actions[name].component> </component>
            },
            get_id:function(){
                return this.id
            }
        }
    }  


    
</script>



<style scoped>
.navbar {
        background-color: transparent !important;
    }
    .navbar-light .navbar-nav .nav-link:hover {
        box-shadow: 0px 2px 10px black;
        -moz-box-shadow: 0 2px 10px black;
        -webkit-box-shadow: 0 2px 10px black;
        background-color: black !important;
        border-radius: 5px;

        transition: color 0.1s ease-in-out;
        color: white !important;
    }
</style>

