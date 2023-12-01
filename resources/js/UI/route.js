import { createRouter, createWebHistory } from "vue-router";
import Users from "./layouts/admin/user/index.vue";
import Roles from "./layouts/admin/roles/index.vue"
import Settings from "./layouts/admin/settings/index.vue"
import UserCreate from "./layouts/admin/user/create.vue"
const paths= [
    //Users CRUD
    {
        path:'/users',
        name:'admin-users',
        component:Users
    },
    {
        path:'/users/create',
        name:'admin-users-create',
        component:UserCreate
    },
    // Roles CRUD
    {
        path:'/roles',
        name:'admin-roles',
        component:Roles
    },
    // Setting CRUD
    {
        path:'/setting',
        name:'admin-setting',
        component:Settings
    }
]
const router = createRouter(
    {
        history:createWebHistory("/"),
        routes:paths
    }
)
export default router;