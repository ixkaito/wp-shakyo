<template>
  <div id="app">
    <button type="button" @click="onButtonClick">Click me to add the example2 component</button>
    <example2 v-if="show_example2"></example2>
  </div>
</template>

<script>
  export default {
    name: 'app',
    data() {
      return {
        show_example2: false
      }
    },
    methods: {
      onButtonClick() {
        this.show_example2 = true
      }
    }
  }
</script>
