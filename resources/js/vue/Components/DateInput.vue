<template>
  <div>
    <label for="date">Select Date:</label>
    <input type="date" id="date" v-model="selectedDate" />
    <p>You selected: {{ selectedDate }}</p>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        selectedDate: null,
      };
    },
  };
</script>

