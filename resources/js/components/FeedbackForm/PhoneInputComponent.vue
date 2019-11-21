<template>
    <div class="row mb-3">
        <div class="col-12">
            <input type="text" class="form-control" :class="{'is-invalid': isInvalid}" placeholder="Введите Ваше номер телефона" :value="phone" v-on:change="$emit('change', $event.target.value)">
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            phone: {
                required: true
            },
            isInvalid: {
                default: false,
            },
        },
        model: {
            prop: 'phone',
            event: 'change',
        },
    }
</script>
<style scoped>
</style>