import Home from './components/Home.vue';
// import Login from './components/Login.vue';
// import Register from './components/Register.vue';
import About from './components/About.vue';
import Victor from './components/about/employee/Victor.vue'
import Aditya from './components/about/employee/Aditya.vue'
import Daniel from './components/about/employee/Daniel.vue'
import Dylan from './components/about/employee/Dylan.vue'
import Huawei from './components/about/employee/Huawei.vue'
import Karuna from './components/about/employee/Karuna.vue'
import Gabriel from './components/about/employee/Gabriel.vue'

export const routes = [
    { path: '/', component: Home },
    { path: '/login', component: Home },
    { path: '/register', component: Home },
    { path: '/about', component: About },
    { path: '/about/victor', component: Victor },
    { path: '/about/aditya', component: Aditya },
    { path: '/about/daniel', component: Daniel },
    { path: '/about/dylan', component: Dylan },
    { path: '/about/huawei', component: Huawei },
    { path: '/about/karuna', component: Karuna },
    { path: '/about/gabriel', component: Gabriel },
];