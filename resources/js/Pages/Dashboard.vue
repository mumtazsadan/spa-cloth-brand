<template>
    <Layouts>
        <v-main :style="{ backgroundColor: '#E5E7EB', minHeight: '100vh' }">
            <v-container class="container">
              <v-row class="mt-5">
                <span class="text-h4 font-light-thin">Dashboard</span>
                <span class="ml-1 flex align-center">dashboard & statistics</span>
                <v-spacer></v-spacer>
                <v-btn class="mx-1 bg-white" capitalize variant="outlined">
                  <span class="capitalize">Manage Dashboard</span>
                  <v-icon class="">mdi-cog-outline</v-icon>
                </v-btn>
              </v-row>
        
              <div class="">
                <v-row>
                  <v-col cols="3">
                    <div class="">
                      <div class="icon-container bg-indigo-lighten-2">
                        <v-icon class="card-icon">mdi-puzzle-outline</v-icon>
                      </div>
                      <v-card
                        flat
                        class="my-card w-100 mr-3 d-flex justify-end align-center card-main"
                        rounded="sm"
                        :style="{ height: '70px' }"
                      >
                        <div class="mr-2">
                          <div class="title-first text-body-2">Number of products remaining</div>
                          <div class="title text-h6 font-weight-medium">1.324</div>
                        </div>
                      </v-card>
                    </div>
                  </v-col>
                  <v-col cols="3">
                    <div>
                      <div class="icon-container bg-teal-lighten-1">
                        <v-icon class="card-icon">mdi-poll</v-icon>
                      </div>
                      <v-card
                        flat
                        class="my-card w-100 mr-3 d-flex justify-end align-center card-main"
                        rounded="sm"
                        :style="{ height: '70px' }"
                      >
                        <div class="mr-2">
                          <div class="title-first text-body-2">Increase in sales from last month</div>
                          <div class="title text-h6 font-weight-medium">Rp 155,900,383</div>
                        </div>
                      </v-card>
                    </div>
                  </v-col>
                  <v-col cols="3">
                    <div>
                      <div class="icon-container bg-red-accent-2">
                        <v-icon class="card-icon">mdi-database-outline</v-icon>
                      </div>
                      <v-card
                        flat
                        class="my-card w-100 mr-3 d-flex justify-end align-center card-main"
                        rounded="sm"
                        :style="{ height: '70px' }"
                      >
                        <div class="mr-2">
                          <div class="title-first text-body-2">Total sales</div>
                          <div class="title text-h6 font-weight-medium">Rp 20,400,770,950</div>
                        </div>
                      </v-card>
                    </div>
                  </v-col>
                  <v-col cols="3">
                    <div>
                      <div class="icon-container bg-deep-purple-lighten-2">
                        <v-icon class="card-icon">mdi-cart-outline</v-icon>
                      </div>
                      <v-card
                        flat
                        class="my-card w-100 mr-3 d-flex justify-end align-center card-main"
                        rounded="sm"
                        :style="{ height: '70px' }"
                      >
                        <div class="mr-2">
                          <div class="title-first text-body-2">Sales this Month</div>
                          <div class="title text-h6 font-weight-medium">Rp 45,500,000</div>
                          <div class="title-first text-body-2">30 Products</div>
                        </div>
                      </v-card>
                    </div>
                  </v-col>
                </v-row>
              </div>
        
              <!-- diagram -->
              <v-row>
                <v-col cols="6" class="mt-3">
                  <v-card flat>
                    <div class="ml-2 my-2">
                      <span class="text-h6 font-weight-bold">Product Value</span>
                      <span class="ml-1 text-grey-darken-1">by Sales</span>
                    </div>
        
                    <v-divider :thickness="1" class="border-opacity-100"></v-divider>
                    <div class="diagram">
                      <canvas ref="myChartCanvas" class="canvas-diagram"></canvas>
                    </div>
                  </v-card>
                </v-col>
        
                <!-- alert - calendar -->
                <v-col cols="6" class="mt-3 mb-3">
                  <v-card flat>
                    <div class="d-flex ml-2 my-2 align-center">
                      <div class="text-h6 font-weight-bold d-flex">Alert</div>
                      <v-spacer></v-spacer>
                      <v-card flat density="compact" class="bg-blue-darken-2 mr-1">
                        <span class="card-title">Stock</span>
                      </v-card>
                      <v-card flat density="compact" class="bg-deep-purple-lighten-1 mr-1">
                        <span class="card-title">Maintenance Due</span>
                      </v-card>
                      <v-card flat density="compact" class="bg-red-accent-2 mr-1">
                        <span class="card-title">Warrantly Expiring</span>
                      </v-card>
                      <v-card flat density="compact" class="bg-yellow-darken-1 mr-2">
                        <span class="card-title" style="color: white">Lease Expiring</span>
                      </v-card>
                    </div>
                    <v-divider :thickness="1" class="border-opacity-100"></v-divider>
                    <div class="mx-3 my-3">
                      <v-col cols="12">
                        <v-sheet>
                          <v-calendar
                            ref="calendar"
                            v-model="today"
                            :events="events"
                            color="primary"
                            type="month"
                          ></v-calendar>
                        </v-sheet>
                      </v-col>
                    </div>
                  </v-card>
                </v-col>
              </v-row>
            </v-container>
          </v-main>
    </Layouts>
</template>

<script setup>
import Layouts from '../Layouts/Layouts.vue';
import { ref, onMounted, reactive } from 'vue'
import { VCalendar } from 'vuetify/lib/labs/components.mjs'

// Register necessary Chart.js plugins

// Define chart data
const chartData = ref({
  labels: ['computer equipment'],
  datasets: [
    {
      label: 'Computer equipment',
      data: [155900383],
      backgroundColor: ['green'],
      borderWidth: 1,
      borderColor: ['white']
    }
  ]
})

// Reference to the canvas element
const myChartCanvas = ref(null)

// Function to initialize the chart
const initializeChart = () => {
  // Ensure that the canvas element is available
  if (myChartCanvas.value) {
    // Create a new chart instance
    const ctx = myChartCanvas.value.getContext('2d')
    new Chart(ctx, {
      type: 'pie',
      data: chartData.value,
      options: {
        plugins: {
          legend: {
            display: true,
            position: 'right',
            align: 'start'
          }
        }
      }
    })
  }
}

// Call the initializeChart function when the component is mounted
onMounted(() => {
  initializeChart()
})
</script>

<style scoped>

.container{
    display: flex;
    flex-direction: column;
}

.icon-container {
    position: relative;
    top: 30px;
    left: 10px;
    background-color: #1976d2;
    border-radius: 8px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
  }
  
  .card-icon {
    color: white;
    font-size: 24px;
  }
  
  .card-main {
    z-index: 0;
  }
  
  /* Mengurangi margin top pada teks Dashboard */
  .mt-1 {
    margin-top: 10px !important;
  }
  
  .title-first {
    display: flex;
    justify-content: end;
    color: #595959;
  }
  
  .title {
    display: flex;
    justify-content: end;
    color: #000000;
  }
  
  .diagram {
    max-width: 550px;
    max-height: 550px;
    margin-top: 20px;
    margin-left: 90px;
    margin-bottom: 40px;
  }
  
  .card-title {
    font-size: 9.5px;
    margin-left: 6px;
    margin-top: 6px;
    margin-bottom: 6px;
    margin-right: 6px;
    justify-items: center;
    align-items: center;
    display: flex;
  }
</style>
