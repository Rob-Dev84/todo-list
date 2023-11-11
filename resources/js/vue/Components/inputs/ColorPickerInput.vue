<template>
  <div>
    <label for="color">Select Color:</label>
    <input type="color" id="color" v-model="selectedColor" />
    <p>Selected Color: {{ selectedColor }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedColor: '#ff0000', // Initial color value
    };
  },
};
</script>
