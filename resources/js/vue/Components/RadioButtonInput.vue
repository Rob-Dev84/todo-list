<template>
  <div>
    <label>
      <input type="radio" :value="option1" v-model="selectedOption" /> Option 1
    </label>
    <label>
      <input type="radio" :value="option2" v-model="selectedOption" /> Option 2
    </label>
    <p>Selected Option: {{ selectedOption }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedOption: null,
      option1: 'Option 1',
      option2: 'Option 2',
    };
  },
};
</script>


