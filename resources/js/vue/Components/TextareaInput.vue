<template>
  <div>
    <label for="textarea">Enter Text:</label>
    <textarea id="textarea" v-model="inputText"></textarea>
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

