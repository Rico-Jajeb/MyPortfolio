<template>
    <div v-if="showToast" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg w-80">
        <div class="flex justify-between items-center">
            <span>{{ successMessage }}</span>
            <button @click="closeToast" class="text-white text-lg font-bold">
                &times;
            </button>
        </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        showToast: this.$page.props.flash.success ? true : false,
        successMessage: this.$page.props.flash.success,
        toastTimer: null
      };
    },
    mounted() {
      if (this.showToast) {
        // Set a timer to automatically hide the toast after 5 seconds
        this.toastTimer = setTimeout(this.closeToast, 20000);
      }
    },
    methods: {
      closeToast() {
        this.showToast = false;
        // Clear the timer if the toast is closed manually before the timer runs out
        if (this.toastTimer) {
          clearTimeout(this.toastTimer);
        }
      }
    },
    watch: {
      // Watch for changes to the flash.success message from the server
      '$page.props.flash.success'(newMessage) {
        if (newMessage) {
          this.successMessage = newMessage;
          this.showToast = true;
          // Reset the timer when the message changes
          if (this.toastTimer) {
            clearTimeout(this.toastTimer);
          }
          this.toastTimer = setTimeout(this.closeToast, 20000);
        }
      }
    }
  };
  </script>
  
  <style scoped>
  button {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 0.25rem; /* Adds space between message and close button */
  }
  </style>
  