<template>
    <a-card title="Tạo mới Tài khoản" class="w-full">
        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <a-avatar shape="square" :size="200">
                            <template #icon>
                                <img src="/images/acount.svg" alt="avatar" />
                            </template>
                        </a-avatar>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <a-button type="primary">
                            <PlusOutlined />
                            Chọn ảnh
                        </a-button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8">
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Tình trạng:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a-select show-search placeholder="Tình trạng" style="width: 100%" :options="[]"
                            :filter-option="[]">
                        </a-select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Tên tài khoản:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a-input placeholder="Tên tài khoản" allow-clear />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Họ và Tên:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a-input placeholder="Tên tài khoản" allow-clear />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Email:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a-input placeholder="Email" allow-clear />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Phòng ban:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6 d-flex ">
                        <a-select show-search placeholder="Phòng ban" style="width: 100%" :options="[]" :filter-option="[]">
                        </a-select>
                        <a-button style=" background-color:gray; color: aliceblue; font-weight: bold; ">
                            <PlusOutlined />
                        </a-button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Mật khẩu:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a-input-password v-model:value="value" placeholder="Mật khẩu" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Xác nhận mật khẩu:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a-input-password v-model:value="value" placeholder="Mật khẩu" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-sm-3 text-start text-sm-end">
                        <label>
                            <span class="text-danger me-1">*</span>
                            <span>Vai trò:</span>
                        </label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a-input-password v-model:value="value" placeholder="Mật khẩu" />
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-end">
                        <a-button class='me-2'>Huỷ</a-button>
                        <a-button type="primary"> Lưu </a-button>
                    </div>
                </div>
            </div>
        </div>
    </a-card>
</template>
<script>
import { useMenu } from "../../../stores/use-menu.js"
import { UserOutlined, PlusOutlined } from '@ant-design/icons-vue';
export default {
    name: 'UserCreate',
    components: { UserOutlined, PlusOutlined },
    setup() {
        useMenu().onSelectedKeys(['admin-user-create']);
    }
}
</script>