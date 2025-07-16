<template>
  <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg p-4 max-w-lg w-full">
      <slot></slot>
      <button @click="$emit('close')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Close</button>
    </div>
  </div>
</template>
