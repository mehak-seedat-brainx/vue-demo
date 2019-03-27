<template>
    <el-container>
    <el-row>
        <el-col :span="24">
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
        </el-col>

            <el-col :span="24">
            <el-form ref="form" :model="form"  label-width="120px">
                <el-form-item label="User name">
                    <el-input v-model="form.name"></el-input>
                </el-form-item>
                <el-form-item label="User Email">
                    <el-input v-model="form.email"></el-input>
                </el-form-item>
                <p style="color:red"  v-if="errors.length">

                <ul style="margin-left: 10px;">
                    <li v-for="error in errors">{{ error }}</li>
            </ul>
            </p>

                <el-form-item >

                    <el-button type="primary" @click="onSubmit">Add</el-button>
                    <el-button>Cancel</el-button>
                </el-form-item>
            </el-form>
            </el-col>
        </el-row>
    </el-container>
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
                },
                errors:[]
            }
        },
        methods: {
            onSubmit() {
                if (this.name && this.age) {
                    axios.post('/createUser', {
                        name: this.form.name,
                        email: this.form.email
                    })
                        .then(response => this.tableData = response.data)

                }

                this.errors = [];

                if (!this.form.name) {
                    this.errors.push('Name required.');
                }
                if (!this.form.email) {
                    this.errors.push('Email required.');
                }


            }
        },

        mounted() {
            console.log(this.users)
        }
    }
</script>
