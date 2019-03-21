<template>
    <div>
        <div class="card text-white bg-dark mb-5">
            <!-- <h5 class="card-header text-center">{{ actions[0].role }}</h5> -->
            <div class="card-body text-center">
                <div v-for='action in actions'>
                    <router-link :to='action.link' class="ui inverted purple button small w-75 mx-auto name-of-person my-2">{{ action.name }}</router-link>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data: function () {
            return{
                actions: [{
                    role: 'Backend',
                    name: 'Account_details',
                    component: 'gatorlist-account_details-component',
                    link: '/account_details',
                },{
                    role: 'Backend',
                    name: 'Gabriel Alfaro',
                    component: 'gatorlist-gabriel-component',
                    link: '/about/gabriel',
                },{
                    role: 'Backend',
                    name: 'Aditya Sheoran',
                    component: 'gatorlist-aditya-component',
                    link: '/about/aditya',
                }],
            }
        },
    }
</script>