<template>
  <div>
    <label for="checkbox">Check this:</label>
    <input type="checkbox" id="checkbox" v-model="isChecked" />
    <p>Checked: {{ isChecked }}</p>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        isChecked: false,
      };
    },
  };
</script>

