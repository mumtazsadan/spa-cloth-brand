<template>
  <v-toolbar app class="d-flex justify-center header" :class="{ 'header-visible': showHeader }" style=" height: 150px;">
    <v-spacer></v-spacer>
    <v-toolbar-items>
      <Link class="nav-li" href="/login">
        <div class="nav-li">
          <v-icon class="mb-1 pl-15 mdi-24px" color="black">mdi mdi-login</v-icon>
          <p class="masuk">Masuk</p>
        </div>
      </Link>
    </v-toolbar-items>
    <Link href="/">
      <p class="atf">About the Fit</p>
    </Link>
  </v-toolbar>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref, onMounted, onBeforeUnmount } from 'vue';

const showHeader = ref(false);
let lastScrollY = window.scrollY;
const handleScroll = () => {
  const currentScrollY = window.scrollY;

  if (currentScrollY === 0) {
    showHeader.value = false; 
  } else if (currentScrollY < lastScrollY) {
    showHeader.value = true; 
  } else {
    showHeader.value = false; 
  }

  lastScrollY = currentScrollY; 
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: fixed;
  top: -100px;
  left: 0;
  width: 100%;
  height: 80px;
  background-color: transparent !important; 
  color: white !important; 
  transition: top 0.3s ease-in-out, background-color 0.3s ease-in-out, color 0.3s ease-in-out; /* Transisi warna */
  z-index: 9999;
}

.header-visible {
  top: 0;
  background-color: white !important;
  color: black !important; 
}

.logo {
  height: 100px;
  margin-right: 10px;
}

.nav-li {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: #192436; 
  gap: 30px;
  margin-right: 50px;
}

.masuk {
  color: black;
  margin-bottom: 1px;
  font-size:larger;
  font-family: "Source Serif 4", serif;
  font-weight: 500;
}

.atf {
  font-family: "Archivo Black", sans-serif;
  font-weight: 400;
  font-size: xx-large;
  position: fixed;
  top: 40px; 
  left: 50%;
  transform: translateX(-50%);
  z-index: 1000;
  padding: 10px;
  transition: opacity 0.3s ease, color 0.3s ease; 
  color: white; 
}

.header-visible .atf {
  color: black !important; 
}

</style>
