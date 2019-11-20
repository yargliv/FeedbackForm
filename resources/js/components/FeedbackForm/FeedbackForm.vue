<template>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h3>Оставьте Ваш отзыв</h3>
                </div>
            </div>
            <name-input-component v-model="name"></name-input-component>
            <phone-input-component v-model="phone"></phone-input-component>
            <feedback-input-component v-model="feedback"></feedback-input-component>
            <upload-way-input-component v-model="uploadway"></upload-way-input-component>
            <button class="btn btn-success" @click="sendFeedback">Отправить</button>
        </div>
    </div>
</template>

<script>
    import NameInputComponent from './NameInputComponent';
    import PhoneInputComponent from './PhoneInputComponent';
    import FeedbackInputComponent from './FeedbackInputComponent';
    import UploadWayInputComponent from './UploadWayInputComponent';

    import eventBus from '../../eventBus';

    import FeedbackSender from '../../Services/FeedbackSender';

    import Feedback from '../../Models/Feedback';

    export default {
        components: {
            NameInputComponent,
            PhoneInputComponent,
            FeedbackInputComponent,
            UploadWayInputComponent
        },
        data() {
            return {
                name: 'Petr',
                phone: '8910385949',
                text: 'lorem ipsum',
                uploadway: 'file_save',
            }
        },
        methods: {
            async sendFeedback() {
                const feedback = new Feedback(this.name, this.phone, this.text, this.uploadway);
                const result = await FeedbackSender.create(feedback);
                console.log(result);
                if(result.success) {
                    // this.clearFields();
                    eventBus.$emit('show-alert', {
                        type: 'alert-success',
                        title: 'Ваш отзыв успешно отправлен!'
                    });
                } else {
                    eventBus.$emit('show-alert', {
                        type: 'alert-danger',
                        title: 'К сожалению, произошла ошибка...'
                    });
                }
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
<style scoped>
</style>