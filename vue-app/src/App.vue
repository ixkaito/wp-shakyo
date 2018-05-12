<template>
  <div id="app">
    <ul>
      wp-blog-header.php <button type="button" @click="expand">Expand</button>
      <WpBlogHeader v-if="expanded" />
    </ul>
  </div>
</template>

<script>
  import WpBlogHeader from './files/wp-blog-header.php.vue'

  export default {
    name: 'app',
    components: {
      WpBlogHeader
    },
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
