<template>
  <div id="app">
    <ul>
      wp-blog-header.php <button type="button" @click="expand">Expand</button>
      <wp-blog-header.php v-if="expanded" />
    </ul>
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
