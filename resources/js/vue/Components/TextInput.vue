<template>
  <div>
    <!-- <label for="text">Enter Text:</label> -->
    <LabelInput :inputId="inputId" :labelText="labelText" />
    <input
      :type="inputType"
      :id="inputId"
      v-model="inputText"
      @input="$emit('update:modelValue', $event.target.value)"
      :class="styles.inputs"
      required
      />

    <!-- <p>You entered: {{ inputText }}</p> -->
  </div>
</template>

<script>
import LabelInput from './labelInput.vue';

export default {
  components: {
    LabelInput,
  },
  props: {
    inputId: {
      type: String,
      required: true,
    },
    labelText: {
      type: String,
      required: true,
    },
    inputType: {
      type: String,
      default: 'text',
    },
  },
  data() {
    return {
      inputText: '',
      styles: {
        inputs:
        `
          bg-gray-50
          border
          border-gray-300
          text-gray-900
          text-sm 
          rounded-lg
          focus:ring-blue-500 
          focus:border-blue-500 
          block 
          w-full 
          p-2.5 
          dark:bg-gray-700 
          dark:border-gray-600 
          dark:placeholder-gray-400 
          dark:text-white 
          dark:focus:ring-blue-500 
          dark:focus:border-blue-500
        `
      },
    };
  },
  emits: ['update:modelValue'], // Declare custom event
};
</script>


