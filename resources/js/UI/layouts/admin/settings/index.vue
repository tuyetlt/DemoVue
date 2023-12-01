<template>
    Đây là trang cài đặt
</template>
<script>
import {useMenu} from "../../../stores/use-menu.js"
    export default {
        name:'Setting',
        setup(){
            useMenu().onSelectedKeys(['admin-setting']);
        }
    }
</script>