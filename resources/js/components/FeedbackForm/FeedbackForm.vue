<template>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h3>Оставьте Ваш отзыв</h3>
                </div>
            </div>
            <name-input-component :isInvalid="validation.name" v-model="name"></name-input-component>
            <phone-input-component :isInvalid="validation.phone" v-model="phone"></phone-input-component>
            <feedback-input-component :isInvalid="validation.text" v-model="text"></feedback-input-component>
            <upload-way-input-component :isInvalid="validation.uploadway" v-model="uploadway"></upload-way-input-component>
            <button class="btn btn-success" @click="sendFeedback">Отправить</button>
        </div>
    </div>
</template>

<script>
    import NameInputComponent from './NameInputComponent';
    import PhoneInputComponent from './PhoneInputComponent';
    import FeedbackInputComponent from './FeedbackInputComponent';
    import UploadWayInputComponent from './UploadWayInputComponent';


    import Feedback from '../../Models/Feedback';
    import FeedbackSender from '../../Services/FeedbackSender';

    import eventBus from '../../eventBus';
    import {SHOW_ALERT, success_alert, error_alert} from '../../config/alert_types';

    export default {
        components: {
            NameInputComponent,
            PhoneInputComponent,
            FeedbackInputComponent,
            UploadWayInputComponent
        },
        data() {
            return {
                name: '',
                phone: '',
                text: '',
                uploadway: null,
                validation: {
                    name: false,
                    phone: false,
                    text: false,
                    uploadway: false, 
                }
            }
        },
        methods: {
            async sendFeedback() {
                const feedback = new Feedback(this.name, this.phone, this.text, this.uploadway);
                const validated = this.validateFields();
                if(validated) {
                    try {
                        const result = await FeedbackSender.create(feedback);
                        eventBus.$emit(SHOW_ALERT, success_alert);
                        this.clearFields();
                    } catch(exception) {
                        eventBus.$emit(SHOW_ALERT, error_alert);
                    }
                }

            },
            validateFields() {
                // true if is not passed validation, else - false
                if(this.name == '') this.validation.name = true;
                else this.validation.name = false;

                if(this.phone == '') this.validation.phone = true;
                else this.validation.phone = false;

                if(this.text == '') this.validation.text = true;
                else this.validation.text = false;

                if(this.uploadway == null) this.validation.uploadway = true;
                else this.validation.uploadway = false;

                return !(this.validation.name || this.validation.phone || this.validation.text || this.validation.uploadway);
            },
            clearFields() {
                this.name = '';
                this.phone = '';
                this.text = '';
                this.uploadway = null;
                this.validation.name = false;
                this.validation.phone = false;
                this.validation.text = false;
                this.validation.uploadway = false;
            }
        }
    }
</script>
<style scoped>
</style>