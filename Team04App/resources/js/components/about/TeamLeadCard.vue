<template>
    <div>
        <div class="card text-white bg-dark mb-5">
            <h5 class="card-header text-center">{{ employees.role }}</h5>
            <div class="card-body text-center">
                <router-link :to='employees.link' class="ui inverted purple button small w-75 mx-auto name-of-person my-2">{{ employees.name }}</router-link>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data: function () {
            return{
                employees:{
                    role: 'Team Lead',
                    name: 'Karuna Nagesh Nayak',
                    component: 'gatorlist-karuna-component',   
                    link: '/about/karuna',
                }
            }
        },
    }
</script>