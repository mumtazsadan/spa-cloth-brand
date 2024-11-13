<template>
    <v-app>
      <Header />
      <main>
        <slot />
      </main>
      <Footer />
    </v-app>
  </template>
  
  <script setup>
  import Header from '../../Component/Public/Header.vue';
  import Footer from '../../Component/Public/Footer.vue';
  </script>
  
  <style scoped>
  main{
    min-height: calc(100vh - 135px);
  }
  </style>