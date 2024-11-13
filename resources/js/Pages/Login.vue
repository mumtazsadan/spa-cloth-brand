<template>
  <LoginLayouts>
    <v-main class="content">
      <v-row>
        <v-col class="col">
          <div class="bg-foto"></div>
        </v-col>
        <v-col class="col">
          <div class="form">
            <div class="teks">
              <p class="text-h4 font-weight-black">
                MASUK
              </p>
              <p class="teks-form">JADILAH MEMBER - ANDA AKAN MENDAPATKAN DISKON 20% UNTUK PEMBELIAN PERTAMA ANDA. DAPATKAN PENAWARAN, UNDANGAN DAN HADIAH EKSKLUSIF.
              </p>
            </div>
            <div class="form-name">
              <div class="teks-form">AKUN 
              <p class="text-red">*</p>
              </div>
            </div>
            <v-text-field
            clearable
            prepend-icon="mdi-account"
            placeholder="Email address"
            v-model="email"
            :rules="emailRules"
            variant="outlined"
          ></v-text-field>
      
          <div class="form-name">
            <div class="teks-form">PASSWORD 
            <p class="text-red">*</p>
            </div>
          </div>
      <v-text-field
      clearable
      prepend-icon="mdi-lock"
      variant="outlined"
      placeholder="Enter your password"
      v-model="password"
        :rules="passwordRules"
      :append-inner-icon="visible ? 'mdi-eye-off' : 'mdi-eye'"
      :type="visible ? 'text' : 'password'"
      @click:append-inner="visible = !visible"

      ></v-text-field>

      <v-btn class="mt-2" type="submit" variant="tonal" block @click="submitLogin">Submit</v-btn>
      </div>
        </v-col>
      </v-row>
      
    </v-main>
  </LoginLayouts>
</template>

<script setup>
import LoginLayouts from '../Layouts/Public/LoginLayouts.vue';
import { ref } from 'vue';

const visible = ref(false);
const email = ref('');
const password = ref('');

const emailRules = [
  value => !!value || 'Email is required.',
  value => /.+@.+\..+/.test(value) || 'E-mail must be valid.'
];

const passwordRules = [
  value => !!value || 'Password is required.',
  value => value.length >= 6 || 'Password must be at least 6 characters.'
];

// Submit function (example)
const submitLogin = () => {
  // Simple console log for demonstration, you can replace this with actual logic
  console.log('Logging in with', email.value, password.value);
};
</script>

<style scoped>
html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  overflow: hidden;
}

.form{
  display: flex;
  flex-direction: column;
  margin-left: 50px;
}

.teks{
  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
  font-size: large;
  width: 100%;
  margin-bottom:80px;
}

.teks-form{
  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
  width: 100%;
  font-size: large;
  display: flex;
  margin-bottom: 4px;
}

.col{
  width: 1000px;
  display: flex;
  align-items: center;
}

.bg-foto{
  background-image: url('../../assets/model/4.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  height: 100vh; 
  width: 100%;
}

.form-name {
  display: flex;
  align-items: center;
}

.content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form{
  width:100%;
}
</style>
