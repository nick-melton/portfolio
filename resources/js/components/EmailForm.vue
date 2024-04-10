<template>
    <div class="main-section">
      <form novalidate class="md-layout" @submit.prevent="validateForm">
        
        <md-card class="md-layout-item md-size-50 md-small-size-100 email-form-card">
          <md-card-content>
            <md-field :class="getValidationClass('fullName')">
              <label for="full-name">Name</label>
              <md-input name="full-name" id="full-name" autocomplete="given-name" v-model="form.fullName" :disabled="sending" />
              <span class="md-error" v-if="!$v.form.fullName.required">Name is required</span>
              <span class="md-error" v-else-if="!$v.form.fullName.minlength">Invalid name</span>
            </md-field>
            <md-field :class="getValidationClass('email')">
              <label for="email">Email</label>
              <md-input type="email" name="email" id="email" autocomplete="email" v-model="form.email" :disabled="sending" />
              <span class="md-error" v-if="!$v.form.email.required">The email is required</span>
              <span class="md-error" v-else-if="!$v.form.email.email">Invalid email</span>
            </md-field>
            <md-field :class="getValidationClass('message')">
              <label for="message">Message</label>
              <md-textarea name="message" id="message" v-model="form.message" :disabled="sending" />
              <span class="md-error" v-if="!$v.form.message.required">The message is required</span>
              <span class="md-error" v-else-if="!$v.form.message.minlength">Invalid message name</span>
            </md-field>
          </md-card-content>
  
          <md-progress-bar md-mode="indeterminate" v-if="sending" />
  
          <md-card-actions>
            <md-button type="submit" class="md-primary" :disabled="sending">Send message</md-button>
          </md-card-actions>
        </md-card>
  
        <md-snackbar :md-active.sync="messageSent">{{ statusMessage }}</md-snackbar>
      </form>
    </div>
  </template>
  
  <script>
    import { validationMixin } from 'vuelidate'
    import {
      required,
      email,
      minLength,
      maxLength
    } from 'vuelidate/lib/validators'
  
    export default {
      name: 'EmailForm',
      mixins: [validationMixin],
      data: () => ({
        form: {
          fullName: null,
          message: null,
          email: null,
        },
        statusMessage: '',
        messageSent: false,
        sending: false
      }),
      validations: {
        form: {
          fullName: {
            minLength: minLength(2)
          },
          message: {
            required,
            minLength: minLength(2)
          },
          email: {
            required,
            email
          }
        }
      },
      methods: {
        getValidationClass (fieldName) {
          const field = this.$v.form[fieldName]
  
          if (field) {
            return {
              'md-invalid': field.$invalid && field.$dirty
            }
          }
        },
        clearForm () {
          this.$v.$reset()
          this.form.fullName = null
          this.form.email = null
          this.form.message = null
        },
        sentMessage () {
          this.sending = true
  
          this.axios.post('/api/send-message', {
            name: this.form.fullName,
            email: this.form.email,
            message: this.form.message
          })
          .then(response => {
            this.statusMessage = response.data.data;
            this.sending = false
            this.messageSent = true
            this.clearForm()
          })
        },
        validateForm () {
          this.$v.$touch()
  
          if (!this.$v.$invalid) {
            this.sentMessage()
          }
        }
      }
    }
  </script>
  
  <style lang="scss" scoped>
    .main-section {
      margin-top: 80px;
    }

    form {
      width: 100%;
    }

    .email-form-card {
      min-width: 80% !important;
    }
    
    .md-progress-bar {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:focus {
      transition: background-color 0s 600000s, color 0s 600000s !important;
    }
  </style>