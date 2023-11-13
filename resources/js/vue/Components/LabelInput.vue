<!-- LabelInput.vue -->
<template>
  <label :for="inputId">{{ labelText }}</label>
</template>

<script>
export default {
  props: {
    inputId: {
      type: String,
      required: true,
    },
    labelText: {
      type: String,
      required: true,
    },
  },
};
</script>