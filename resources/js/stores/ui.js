import { defineStore } from 'pinia'

export const useUIStore = defineStore('ui', {
  state: () => ({
    isModalOpen: false,
  }),
  actions: {
    toggleModal() {
      this.isModalOpen = !this.isModalOpen;
    },
  },
});
