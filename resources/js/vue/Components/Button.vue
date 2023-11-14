<template>
  <div>
    <button @click="handleClick">{{ buttonText }}</button>
  </div>
</template>

<script>
export default {
  props: {
    buttonText: {
      type: String,
      default: 'Click me', // Default text for the button
    },
    clickHandler: {
      type: Function,
      default: () => {}, // Default click handler is a no-op function
    },
  },
  methods: {
    handleClick() {
      // Call the click handler provided by the parent component
      this.clickHandler();
    },
  },
};
</script>

