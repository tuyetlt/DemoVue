<template>
    <div class="containter-fuild">
        <div class="row text-white" style="background-color:cornflowerblue; padding: 1rem;">
            <div class="col-1 d-flex d-sm-none align-items-center justify-content-center">
                <span>X</span>
            </div>
            <div
                class="col-10 col-sm-9 d-flex d-sx-none align-items-center justify-content-center justify-content-sm-start ">
                <img src="/images/acount.svg" alt="logo" height="32" width="32" class="ms-3 me-3">
                <span>QUẢN TRỊ</span>
            </div>
            <div class="col-sm-3 d-none d-sm-flex align-items-center justify-content-center ">
                <span>Admin</span>
            </div>
            <div class="col-1 d-flex d-sm-none align-items-center justify-content-center" @click="showDrawer">
                <span>X</span>
            </div>
            <a-drawer v-model:open="open" class="custom-class" root-class-name="root-class-name"
                :root-style="{ color: 'blue' }" style="color: red" title="Basic Drawer" placement="right"
                @after-open-change="afterOpenChange">
                <p>Some contents...</p>
                <p>Some contents...</p>
                <p>Some contents...</p>
            </a-drawer>
        </div>

    </div>
</template>
<script>
export default {
    name: 'HeaderLayout',
    data(){
        return{
            open:false,
        }
    },
    methods:{
        showDrawer(){
            this.open = true;   
        }
    }
    
}
</script>