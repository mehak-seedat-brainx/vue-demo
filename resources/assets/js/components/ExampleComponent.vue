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
    </el-row>
</template>

<script>
    export default {
        props:['users'],
        data() {
            return {
                tableData: this.users
            }
        },
        mounted() {
            console.log(this.users)
        }
    }
</script>
