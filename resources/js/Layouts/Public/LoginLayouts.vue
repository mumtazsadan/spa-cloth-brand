<template>
    <v-app>
      <HeaderLogin />
      <main>
        <slot />
      </main>
      <Footer />
    </v-app>
  </template>
  
  <script setup>
  import HeaderLogin from '../../Component/Public/HeaderLogin.vue';
  import Footer from '../../Component/Public/Footer.vue';
  </script>
  
  <style scoped>
  main{
    min-height: calc(100vh - 135px);
  }
  </style>