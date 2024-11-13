<!-- Sidebar.vue -->
<template>
    <v-navigation-drawer class="sidebar" color="grey-darken-2">
      <v-list-subheader class="title">MENU</v-list-subheader>
      <v-list>
        <!-- Loop through the menu items to create the sidebar links -->
        <v-list-item
          v-for="(item, i) in menuItems"
          :key="i"
          @click="handleItemClick(item)"
          :class="{'sidebar-link-active': $page.url === item.path}"
        >
          <template v-slot:prepend>
            <v-icon :icon="item.icon"></v-icon>
          </template>
          <v-list-item-title>{{ item.text }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </template>
  
  <script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const menuItems = ref([
  { text: 'Dashboard', icon: 'mdi-view-dashboard', path: '/dashboard' },
  { text: 'Akun', icon: 'mdi-account', path: '/akun' },
  { text: 'Produk', icon: 'mdi-database-outline', path: '/produk' }
]);

const handleItemClick = (item) => {
  if (item.path) {
    Inertia.visit(item.path);
  }
};
  </script>
  
  <style scoped>
  .title {
    font-family: "Montserrat", sans-serif;
    font-weight: 600;
    font-style: bold;
    font-size: xx-large;
    margin-top: 25px;
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    color: white;
  }
  </style>
  