<!-- MainComponent.vue -->
<template>
  <v-layout>
    <!-- sidebar -->
    <sidebar v-model="drawer"/>
    <!-- navbar -->
    <navbar @click.stop="drawer = !drawer"/>
    <!-- main content -->
    <v-main>
      <component :is="currentPageComponent" />
      <slot/>
    </v-main>
  </v-layout>
</template>

<script setup>
import sidebar from '../Component/sidebar.vue';
import navbar from '../Component/navbar.vue';
import { ref, computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

const { component } = usePage();

// Dynamically compute the current page component
const currentPageComponent = computed(() => component);

const drawer = ref(true);
</script>

<style scoped>
/* Add styles here */
</style>
