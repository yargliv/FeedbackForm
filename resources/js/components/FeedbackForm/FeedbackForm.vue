<template>
    <div class="row">
        <div class="col-12">
            <name-input-component v-model="name"></name-input-component>
            <phone-input-component v-model="phone"></phone-input-component>
            <feedback-input-component v-model="description"></feedback-input-component>
            <upload-way-input-component v-model="uploadWay"></upload-way-input-component>
            <button class="btn btn-success" @click="sendFeedbak">Send</button>
            <success-modal-component></success-modal-component>
        </div>
    </div>
</template>
<script>
    import NameInputComponent from './NameInputComponent';
    import PhoneInputComponent from './PhoneInputComponent';
    import FeedbackInputComponent from './FeedbackInputComponent';
    import UploadWayInputComponent from './UploadWayInputComponent';

    import FeedbackSender from '../../Services/FeedbackSender';

    export default {
        components: {
            NameInputComponent,
            PhoneInputComponent,
            FeedbackInputComponent,
            UploadWayInputComponent
        },
        data() {
            return {
                name: null,
                phone: null,
                feedback: null,
                uploadWay: null,

                modal: {
                    showed: false,

                }
            }
        },
        methods: {
            async sendFeedback() {
                const feedback = new Feedback(this.name, this.phone, this.feedback, this.uploadWay);
                const result = await FeedbackSender.send(feedback);
                if(result.success) {

                } else {

                }
                this.clearFields();
            },

            clearFields() {
                this.name = null;
                this.phone = null;
                this.feedback = null;
                this.uploadWay = null;
            }
        }
    }
</script>
<style>
</style>