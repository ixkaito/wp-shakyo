<template>
  <div id="app">
    <button type="button" @click="expand">Expand</button>
    <wp-blog-header.php v-if="expanded" />
  </div>
</template>

<script>
  export default {
    name: 'app',
    data() {
      return {
        expanded: false
      }
    },
    methods: {
      expand() {
        this.expanded = true
      }
    }
  }
</script>
