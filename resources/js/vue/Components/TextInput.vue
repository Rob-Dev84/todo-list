<template>
  <div>
    <label for="text">Enter Text:</label>
    <input type="text" id="text" v-model="inputText" />
    <p>You entered: {{ inputText }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      inputText: '',
    };
  },
};
</script>


