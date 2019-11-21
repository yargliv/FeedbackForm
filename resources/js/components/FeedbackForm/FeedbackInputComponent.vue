<template>
    <div class="row mb-3">
        <div class="col-12">
            <textarea type="text" class="form-control" :class="{'is-invalid': isInvalid}" placeholder="Ваше обращение" :value="text" v-on:change="$emit('change', $event.target.value)"></textarea>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            text: {
                required: true,
            },
            isInvalid: {
                default: false,
            },
        },
        model: {
            prop: 'text',
            event: 'change',
        },
    }
</script>
<style scoped>
</style>