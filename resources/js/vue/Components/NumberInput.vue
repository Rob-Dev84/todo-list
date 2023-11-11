<template>
  <div>
    <label for="number">Enter Number:</label>
    <input type="number" id="number" v-model="numericValue" />
    <p>You entered: {{ numericValue }}</p>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        numericValue: null,
      };
    },
  };
</script>
