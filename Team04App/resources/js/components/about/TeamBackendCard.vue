<template>
    <div>
        <div class="card text-white bg-dark mb-5">
            <h5 class="card-header text-center">{{ employees[0].role }}</h5>
            <div class="card-body text-center">
                <div v-for='employee in employees'>
                    <router-link :to='employee.link' class="ui inverted purple button small w-75 mx-auto name-of-person my-2">{{ employee.name }}</router-link>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data: function () {
            return{
                employees: [{
                    role: 'Backend',
                    name: 'Daniel Mossaband',
                    component: 'gatorlist-daniel-component',
                    link: '/about/daniel',
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