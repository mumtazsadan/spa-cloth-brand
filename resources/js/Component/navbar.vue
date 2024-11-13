<template>
    <v-app-bar class="navbar" color="grey-darken-2">
        <v-app-bar-nav-icon variant="text"></v-app-bar-nav-icon>
  
        <v-toolbar-title class="title">Dashboard</v-toolbar-title>
  
        <v-spacer></v-spacer>
  
          <v-btn icon="mdi-logout" variant="text"></v-btn>
      </v-app-bar>
</template>

<script setup>
import { ref } from 'vue';

</script>
<style scoped>
.navbar{
    height:100px;
    display: flex;
    justify-content: center;
}

.title{
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
    font-size: x-large;
}
</style>