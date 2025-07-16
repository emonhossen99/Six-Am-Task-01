<template>
  <DashboardLayout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-white rounded-lg shadow p-4">
        <!-- Card 1 content -->
      </div>
      <div class="bg-white rounded-lg shadow p-4">
        <!-- Card 2 content -->
      </div>
      <div class="bg-white rounded-lg shadow p-4">
        <!-- Card 3 content -->
      </div>
    </div>

    <!-- Modal Example -->
    <Modal v-if="showModal" @close="showModal = false">
      <!-- Modal Content -->
    </Modal>
  </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { ref } from 'vue';

const showModal = ref(false);
</script>

<style scoped>
/* Custom CSS for exact Figma matching if Tailwind utility classes are insufficient */
</style>
