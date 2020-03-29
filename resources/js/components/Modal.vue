<template>
    <div id="modal">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container">

              <div class="modal-header">
                <h1 class="body-heading">Okay, let's talk!</h1>
                <button class="modal-default-button" @click="$emit('close')">&#215;</button>
              </div>

              <div class="modal-body">
                <form 
                    action="message" 
                    method="POST" 
                    id="modalForm"
                    @submit.prevent="onSubmit" 
                    @change="form.errors.clear($event.target.name)">
                    <input 
                        type="text" 
                        name="firstname" 
                        placeholder="Your name" 
                        v-model="form.firstname"
                        @keydown="form.errors.clear('firstname')">
                    <label for="firstname">
                        Your first name
                        <sup class="required">required</sup>
                        <span 
                            class="error" 
                            v-if="form.errors.has('firstname')" 
                            v-text="form.errors.get('firstname')">
                        </span>
                    </label>
                    <input 
                        type="text" 
                        name="lastname" 
                        placeholder="Your last name" 
                        v-model="form.lastname"
                        @keydown="form.errors.clear('lastname')">
                    <label for="lastname">
                        Your last name
                        <sup class="required">required</sup>
                        <span 
                            class="error" 
                            v-if="form.errors.has('lastname')" 
                            v-text="form.errors.get('lastname')">
                        </span>
                    </label>
                    <input 
                        type="text" 
                        name="email" 
                        placeholder="Your email address" 
                        v-model="form.email"
                        @keydown="form.errors.clear('email')">
                    <label for="email">
                        Your email address
                        <sup class="required">required</sup>
                        <span 
                            class="error" 
                            v-if="form.errors.has('email')" 
                            v-text="form.errors.get('email')">
                        </span>
                    </label>
                    <select 
                        v-model="form.assistanceType" 
                        name="assistanceType" 
                        @click="form.errors.clear('assistanceType')">
                        <option disabled value="">Please select one</option>
                        <option>Complete brand and website design & development</option>
                        <option>Website design & development</option>
                        <option>Upgrade/redesign my current site</option>
                        <option>Search engine optimisation</option>
                        <option>Technical consultation/Migrate my site</option>
                        <option>I need a content management system</option>
                        <option>Something else...</option>
                    </select>
                    <label for="assistanceType">
                        What do you require?
                        <sup class="required">required</sup>
                        <span 
                            class="error" 
                            v-if="form.errors.has('assistanceType')" 
                            v-text="form.errors.get('assistanceType')">
                        </span>
                    </label>
                    <textarea 
                        name="messageBody" 
                        v-model="form.messageBody"
                        @keydown="form.errors.clear('messageBody')">
                    </textarea>
                    <label for="messageBody">
                        Please describe your need. Links to websites not accepted.
                        <sup class="required">required</sup>
                        <span 
                            class="error" 
                            v-if="form.errors.has('messageBody')" 
                            v-text="form.errors.get('messageBody')">
                        </span>
                    </label>
                    <div class="submit-container">
                        <button class="button" id="submit-btn" :disabled="form.errors.any()">Send</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    import Form from '../core/Form';
    export default {
        data() {
            return {
                form: new Form({
                    firstname: '',
                    lastname: '',
                    email: '',
                    assistanceType: '',
                    messageBody: ''
                })
            }
        },

        methods: {
            onSubmit() {
                const submitBtn = document.querySelector('#submit-btn');
                submitBtn.innerText = "Sending...";
                this.form.post('/message').then(response => {
                    document.querySelector('.submit-container').innerText = response[1];
                }).catch(error => {
                    submitBtn.setAttribute('disabled', 'disabled');
                    submitBtn.innerText = "Send";
                });
            }
        }
    }
</script>

<style lang="scss">
    @import '../../sass/variables';

    .modal-mask {
        position: absolute;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        display: table;
        transition: opacity 0.3s ease;
        }

        .modal-wrapper {
            display: table-cell;
            vertical-align: middle;
        }

        .modal-container {
            width: 50vw;
            margin: 0px auto;
            padding: 20px 30px;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
            transition: all 0.3s ease;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;

            h3 {
                margin-top: 0;
                color: #42b983;
            }
        }

        .modal-body {
            margin: 20px 0;
            form {
                display: flex;
                flex-direction: column;

                label {
                    margin-top: 0.5rem;
                    margin-bottom: 3rem;
                    display: flex;
                    font-family: $headings;
                }

                .required {
                    font-style: italic;
                    font-weight: bold;
                    font-size: 0.6rem;
                    margin-left: 0.5rem;
                }

                .error {
                    margin-left: auto;
                    color: red;
                    font-style: italic;
                    font-weight: bold;
                }
                
                #submit-btn:disabled {
                    background-color: rgb(238, 238, 238);
                    cursor: not-allowed;
                }

                .submit-container {
                    font-weight: bold;
                }
            }
        }

        .modal-default-button {
            float: right;
        }

        /*
        * The following styles are auto-applied to elements with
        * transition="modal" when their visibility is toggled
        * by Vue.js.
        *
        * You can easily play with the modal transition by editing
        * these styles.
        */

        .modal-enter {
        opacity: 0;
        }

        .modal-leave-active {
        opacity: 0;
        }

        .modal-enter .modal-container,
        .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        }
</style>