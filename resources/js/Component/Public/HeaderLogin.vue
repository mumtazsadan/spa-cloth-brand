<template>
    <v-toolbar app class="header" style="height: 150px;">\
        <v-spacer></v-spacer>
        <Link  href="/" class="toolbar-link">
            <div class="toolbar-content">
                <p class="atf">About the Fit</p>
            </div>
        </Link>
        <v-spacer></v-spacer>
    </v-toolbar>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>
.header {
    display: flex;
    justify-content: center;
    align-items: center; 
    width: 100%;
    height: 150px; 
    background-color: black;
}

.toolbar-link {
    text-decoration: none;
}

.toolbar-content {
    display: flex;
    justify-content: center; 
    align-items: center; 
    width: 100%;
}

.atf {
    font-family: "Archivo Black", sans-serif;
    font-weight: 400;
    font-size: xx-large;
    color: white;

}
</style>
