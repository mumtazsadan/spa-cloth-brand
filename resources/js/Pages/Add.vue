<template>
    <Layouts>
        <v-main :style="{ backgroundColor: '#E5E7EB', minHeight: '100vh' }" style="height: auto">
      <v-container class="">
        <div class="pt-6 pb-3 px-6 flex">
          <v-icon class="mdi mdi-plus-circle-outline mdi-24px mb-2"></v-icon>
          <span class="ml-2 text-h5">Add Products</span>
        </div>
        <div class="my-4">
          <v-card flat class="px-6 py-6 mx-auto" rounded="sm">
            <div class="my-2 fle">
              <v-icon class="mdi mdi-database-plus-outline mdi-24px mb-1"></v-icon>
              <span class="text-h6 font-weight-bold mx-2">Produk</span>
            </div>
            <v-container class="my-4">
              <!-- F O R M -->
              <v-form v-model="assetForm" @submit.prevent="addAsset">
                <v-row>
                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Name</span>
                  </v-col>
                  <v-col cols="4">
                    <v-text-field
                      class="text-field"
                      v-model="name"
                      label="Name"
                      variant="outlined"
                      dense="compact"
                      hide-details
                    ></v-text-field>
                  </v-col>

                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Color</span>
                  </v-col>
                  <v-col cols="4">
                    <v-select
                      class="text-field"
                      v-model="colorPick"
                      label="Color"
                      variant="outlined"
                      dense="compact"
                      hide-details
                      :items="color"
                      multiple
                    >
                    </v-select>
                  </v-col>

                </v-row>
  
                <v-row class="justify-center">
                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Series</span>
                  </v-col>
                  <v-col cols="4">
                    <v-text-field
                      class="my-5"
                      v-model="serialNo"
                      label="Serial No"
                      variant="outlined"
                      dense="compact"
                      hide-details
                    >
                    </v-text-field>
                  </v-col>
  
                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Price</span>
                  </v-col>
                  <v-col cols="4">
                    <v-text-field
                      class="my-5"
                      v-model="price"
                      label="Price"
                      variant="outlined"
                      dense="compact"
                      prefix="Rp "
                      hide-details
                    >
                    </v-text-field>
                  </v-col>
                </v-row>
  
                <v-row>
                    <v-col cols="2" class="align-self-center">
                        <span class="title-input">Product Tag ID</span>
                      </v-col>
                      <v-col cols="4">
                        <v-text-field
                          class="my-5"
                          v-model="productTag"
                          label="Product Tag Id"
                          variant="outlined"
                          dense="compact"
                          hide-details
                          prepend-icon=""
                        >
                        </v-text-field>
                      </v-col>

                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Product Add Date</span>
                  </v-col>
                  <v-col cols="4">
                    <v-date-input
                      class="my-5"
                      v-model="addDate"
                      label="Add Date"
                      variant="outlined"
                      dense="compact"
                      hide-details
                      prepend-icon=""
                      :date-format="dateFormat"
                    >
                    </v-date-input>
                  </v-col>
                </v-row>
  
                <v-row>
                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Description</span>
                  </v-col>
                  <v-col cols="9">
                    <v-text-field
                      class="my-5"
                      v-model="description"
                      label="Description"
                      variant="outlined"
                      dense="compact"
                      hide-details
                    >
                    </v-text-field>
                  </v-col>
                </v-row>
  
                <v-row>
                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Status</span>
                  </v-col>
                  <v-col cols="9">
                    <v-select
                      class="my-5"
                      v-model="status"
                      label="Status"
                      variant="outlined"
                      dense="compact"
                      hide-details
                      :items="statusOptions"
                    >
                    </v-select>
                  </v-col>
                </v-row>
  
                <v-row>
                  <v-col cols="2" class="align-self-center">
                    <span class="title-input">Distribution to Branches</span>
                  </v-col>
                  <v-col cols="9">
                    <v-text-field
                      class="my-5"
                      v-model="branches"
                      label="Distribution to Branches"
                      variant="outlined"
                      dense="compact"
                      hide-details
                    >
                    </v-text-field>
                  </v-col>
                </v-row>
  
                <v-row>
                  <v-col>
                    <v-btn
                      type="submit"
                      class="d-flex green-accent-4 ml-5"
                      color="green"
                      density="compact"
                      variant="elevated"
                    >
                      <v-icon class="mdi mdi-plus"></v-icon>
                      <span class="capitalize px-1">Add Products</span>
                    </v-btn>
                  </v-col>
                </v-row>
              </v-form>
  
              <v-alert
                closable
                v-model="successAlert"
                type="success"
                transition="fade-transition"
                class="custom-alert success"
              >
                Data berhasil ditambahkan!
              </v-alert>
  
              <!-- v-alert untuk menampilkan pesan kesalahan -->
              <v-alert
                closable
                v-model="errorAlert"
                type="error"
                transition="fade-transition"
                class="custom-alert error"
              >
                Gagal menambahkan data. Silakan coba lagi.
              </v-alert>
            </v-container>
          </v-card>
        </div>
      </v-container>
    </v-main>
    </Layouts>
    
  </template>
  <script setup>
  import { ref } from 'vue'
  import { VDateInput } from 'vuetify/labs/VDateInput'
import Layouts from '../Layouts/Layouts.vue';
  
  const assetTagId = ref('')
  const description = ref('')
  const brand = ref('')
  const serialNo = ref('')
  const cost = ref('')
  const purchaseDate = ref(null)
  const status = ref('')
  const assignedTo = ref('')
  const statusOptions = ref(['Available', 'Out of Stock'])
  const color = ref(['Black', 'Red', 'Maroon', 'Brown', 'Yellow', 'Blue'])
  const successAlert = ref(false)
  const errorAlert = ref(false)
  const colorPick = ref('')
  
  const assetForm = ref({
    productTag: '',
    description: '',
    name: '',
    series: '',
    price: '',
    addDate: '',
    status: '',
    branches: '',
    color: ''
  })
 
  </script>
  <style scoped>
  .custom-alert {
    font-size: 12px; 
    padding: 4px 8px;
    position: absolute;
    top: 16px; 
    right: 16px; 
    z-index: 1000; 
  }
  
  .success {
    background-color: #4caf50; 
  }
  
  .error {
    background-color: #f44336;
  }
  
  .title-input {
    display: flex;
    margin-right: 40px;
    margin-left: 40px;
    font-size: 14px;
  }
  </style>
  