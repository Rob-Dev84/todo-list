<template>
  <div>
    <label for="file">Select File:</label>
    <input type="file" id="file" @change="handleFileChange" />
    <p>Selected File: {{ selectedFileName }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedFileName: null,
    };
  },
  methods: {
    handleFileChange(event) {
      const file = event.target.files[0];
      this.selectedFileName = file ? file.name : null;
      // Process the file as needed
    },
  },
};
</script>
