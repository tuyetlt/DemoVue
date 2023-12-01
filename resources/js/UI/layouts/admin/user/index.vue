<template>
    <a-card title="Tài khoản" class="w-full">
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-end ">
                <a-button type="primary">
                    <router-link style="color:#fff; width: 100%" :to="{ name: 'admin-users-create'}">
                        <PlusOutlined />
                    </router-link>
                </a-button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a-table :columns="columns" :data-source="serverItems" :scroll="{ x: 567 }">
                    <template #bodyCell="{ column, index, record }">
                        <template v-if="column.key === 'index'">
                            <span>{{ index + 1 }}</span>
                        </template>
                        <template v-if="column.key === 'status'">
                            <span v-if="record.status_id == 1" class="text-primary">{{ record.status }}</span>
                            <span v-else-if="record.status_id == 2" class="text-danger">{{ record.status }}</span>
                        </template>
                    </template>
                </a-table>
            </div>
        </div>
    </a-card>
</template>
<script>
import UserService from '../../../services/UserService'
import { useMenu } from "../../../stores/use-menu.js"
import { PlusOutlined } from '@ant-design/icons-vue';

export default {
    components: { PlusOutlined },
    name: 'Users',
    setup() {
        useMenu().onSelectedKeys(['admin-users']);
    },
    data() {
        return {
            serverItems: [],
            columns: [
                {
                    title: '#',
                    key: 'index'
                },
                {
                    title: 'Avatar',
                    dataIndex: 'avatar',
                    key: 'avatar',
                },
                {
                    title: 'Tài khoản',
                    dataIndex: 'username',
                    key: 'username',
                },
                {
                    title: 'Họ và tên',
                    dataIndex: 'name',
                    key: 'name',
                },
                {
                    title: 'Phòng ban',
                    dataIndex: 'departments',
                    key: 'departments',
                },
                {
                    title: 'Vai trò',
                    dataIndex: 'role'
                },
                {
                    title: 'Trạng thái',
                    dataIndex: 'status',
                    key: 'status',
                },
                {
                    title: 'Công cụ',
                    fixed: 'right',
                },
            ],
        };
    },
    mounted() {
        this.loadItems()
    },
    methods: {
        async loadItems() {
            await UserService.getList().then((response) => {
                if (response.status == 200 && !response.data.errors) {
                    this.serverItems = response.data.data;
                    console.log('xxxzz', this.serverItems);
                }
            })
        }
    }
}
</script>