<template>
    <div v-if="showed" class="message alert" :class="type" role="alert">
        {{ title }}
    </div>
</template>
<script>

import eventBus from '../eventBus';
import {SHOW_ALERT} from '../config/alert_types.js';

export default {
    data() {
        return {
            showed: false,
            type: null,
            title: '',
        }
    },
    mounted() {
        eventBus.$on(SHOW_ALERT, (payload) => {
            this.setAlert(payload);
            this.showAlert();
        });
    },
    methods: {
        setAlert({title, type}) {
            this.title = title;
            this.type = type;
        },
        showAlert() {
            this.showed = true;
            setTimeout(this.hideAlert, 3000);
        },
        hideAlert() {
            this.showed = false;
        }
    }

}
</script>
<style scoped>
    .message {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: auto;
        margin-bottom: 0;
    }
</style>