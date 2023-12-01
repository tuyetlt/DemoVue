<template>
    <div>
        <HeaderLayout />
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="border">
                    <a-list bordered>
                        <Sidebar />
                        <template #header>
                            <div>BẢNG ĐIỀU KHIỂN</div>
                        </template>
                    </a-list>
                    <div>

                    </div>
                </div>
                
            </div>
            <div class="col-12 col-sm-9">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>
<script>
import HeaderLayout from "../UI/components/HeaderLayout.vue"
import Sidebar from "../UI/components/Sidebar.vue"
export default {
    name: 'MainEntry',
    components: { HeaderLayout, Sidebar }
}
</script>