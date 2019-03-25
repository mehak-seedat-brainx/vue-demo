<template>
    <el-row>


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
                axios.post('/createUser', {
                    name: this.form.name,
                    email: this.form.email
                })
                    .then(function (response) {
                       this.tableData = response;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>