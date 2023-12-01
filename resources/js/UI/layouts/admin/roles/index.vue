<template>
    Đây là trang quyền người dùng
</template>
<script>
import {useMenu} from "../../../stores/use-menu.js"
 export default {
    name:"Roles",
    setup(){
        useMenu().onSelectedKeys(['admin-roles']);
    }
 }
</script>