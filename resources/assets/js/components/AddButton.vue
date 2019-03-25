<template>
    <el-row>
        <el-form ref="form" :model="form" :rules="rules" label-width="120px">
            <el-form-item label="User name">
                <el-input v-model="form.name"></el-input>
            </el-form-item>
            <el-form-item label="User Email">
                <el-input v-model="form.email"></el-input>
            </el-form-item>


            <el-form-item >

                <el-button type="primary" @click="onSubmit">Add</el-button>
                <el-button>Cancel</el-button>
            </el-form-item>
        </el-form>
    </el-row>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: '',
                  email:''
                }
            }
        },

        methods: {
            onSubmit() {
                console.log(this.form.name);
            }
        }
    }
</script>