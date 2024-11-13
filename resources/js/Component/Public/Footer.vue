<template>
    <footer class="footer-main">
      <v-row class="mb-2 ml-14 mr-14">
        <v-col>
          <div>
            <p>Contact</p>
            <div>
              <div class="logo">
                <a href="https://www.instagram.com/mumtazsadanm_/" class="logo">
                <v-icon class="">mdi-instagram</v-icon>
                <p>Instagram</p>
              </a>
              </div>
              <div class="logo">
                <a href="https://www.youtube.com/@muumtazsadanm" class="logo">
                <v-icon class="">mdi-youtube</v-icon>
                <p>Youtube</p>
              </a>
              </div>
              <div class="logo">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=jrjtXDzFbJZtXPthHpnPhfLxWfrTrZFGslqPntPSKwBqXMJsnBptlwvSKFdhDsGvGbrMhnGg " class="logo">
                <v-icon class="">mdi-gmail</v-icon>
                <p>Gmail</p>
              </a>
              </div>
              <div class="logo">
                <v-icon class="logo">mdi-phone</v-icon>
                <p>+62 896-3920-9948</p>
              </div>
            </div>
          </div>
        </v-col>
        <v-col>
          <div>
            <p>Location</p>
            <div class="logo">
              <a href="https://www.google.com/maps/place/Istana+Negara/@-6.167915,106.8213753,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f567d8adcb6f:0xde490e60a9a44e65!8m2!3d-6.167915!4d106.8239502!16s%2Fg%2F11p12ymhmy?entry=ttu&g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D" class="logo">
                <v-icon class="logo">mdi-map-marker</v-icon>
                <p>Maps</p>
            </a>
            </div>
          </div>
        </v-col>
        <v-col>
          <div>
            <p>Layanan Pelanggan</p>
              <div class="layanan">
                <p>Senin – Jumat (kecuali hari libur nasional)</p>
                <p>Jam operasional: 09.00 – 17.00 WIB</p>
              </div>
          </div>
        </v-col>
      </v-row>
      <v-divider  class="inset-divider"></v-divider>
      <div class="mt-3">
        <p>&copy; {{ year }} About the Fit. All rights reserved.</p>
      </div>
    </footer>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const year = ref(new Date().getFullYear());
  </script>
  
  <style scoped>
  .footer-main {
    display: flex;
    flex-direction: column;
    background: black;
    color: white;
    padding: 1rem;
    text-align: center;
  }

  .inset-divider {
    margin: 0 100px; 
    border: 1px solid #ffffff; 
  }

  .logo{
    display: flex;
    align-items: center;
    text-decoration: none;
    gap: 10px;
    margin-left:80px;
    color: white;
  }

  .layanan{
    text-align: left;
    margin-left:80px;
  }
  </style>
  