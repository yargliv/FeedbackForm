<template>
    <div class="row mb-3">
        <div class="col-12">
            <select class="form-control" :class="{'is-invalid': isInvalid}" v-on:change="$emit('change', $event.target.value)">
                <option disabled :selected="uploadway==null">Выберите куда сохранить отзыв</option>
                <option v-for="type in types" :key="type.name" :value="type.name">{{ type.title }}</option>
            </select>
        </div>
    </div>
</template>
<script>
    import uploadways from '../../config/uploadways';

    export default {
        props:{
            uploadway: {
                required: true,
            },
            isInvalid: {
                default: false,
            },
        },
        model: {
            prop: 'uploadway',
            event: 'change',
        },
        data() {
            return {
                types: uploadways
            }
        },
    }
</script>
<style>
</style>