<template>
    <el-row>
        <el-table
                :data="tableData"
                style="width: 100%">
            <el-table-column
                    prop="id"
                    label="ID"
                    width="180">
            </el-table-column>
            <el-table-column
                    prop="name"
                    label="Name"
                    width="180">
            </el-table-column>
            <el-table-column
                    prop="email"
                    label="Email">
            </el-table-column>


        </el-table>
        <el-form ref="form" :model="form"  label-width="120px">
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
        props:['users'],
        data() {
            return {
                tableData: this.users,
                form: {
                    name: '',
                    email:''
                }
            }
        },
        methods: {
            onSubmit() {
                console.log(this.form.name);
                axios.post('/createUser', {
                    name: this.form.name,
                    email: this.form.email
                })
                    .then(response => this.tableData = response.data)

            }
        },

        mounted() {
            console.log(this.users)
        }
    }
</script>
