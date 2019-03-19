<template>
    <div>
        <div class="card text-white bg-dark mb-5">
            <h5 class="card-header text-center">{{ employees[0].role }}</h5>
            <div class="card-body text-center">
                <div v-for='employee in employees'>
                    <router-link :to='employee.link' class="ui inverted purple button small w-75 mx-auto name-of-person my-2" @click='selectComponent(false, employee.component)'>{{ employee.name }}</router-link>
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
                    role: 'Frontend',
                    name: 'Victor Muñoz',
                    component: 'gatorlist-victor-component',
                    link: '/about/victor'
                },{
                    role: 'Frontend',
                    name: 'Huawei Gao',
                    component: 'gatorlist-huawei-component',
                    link: '/about/huawei'
                },{
                    role: 'Frontend',
                    name: 'Dylan Shwan',
                    component: 'gatorlist-dylan-component',
                    link: '/about/dylan'
                }],
            }
        },
    }
</script>