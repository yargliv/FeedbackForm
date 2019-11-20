<template>
    <div class="row mb-3">
        <div class="col-12">
            <select class="form-control">
                <option v-for="type in types" :key="type.name" >{{ type.title }}</option>
            </select>
        </div>
    </div>
</template>
<script>
    export default {
        
        data() {
            return {
                types: [
                    {
                        name: 'db_save',
                        title: 'Сохранить в базу данных'
                    },
                    {
                        name: 'file_save',
                        title: 'Сохранить в файл'
                    }
                ]
            }
        }
    }
</script>
<style>
</style>