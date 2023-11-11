<template>
  <div>
    <label for="select">Select Option:</label>
    <select id="select" v-model="selectedOption">
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
    </select>
    <p>You selected: {{ selectedOption }}</p>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        selectedOption: null,
      };
    },
  };
</script>

