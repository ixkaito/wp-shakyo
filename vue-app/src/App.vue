<template>
  <div id="app">
    <ul>
      <function1 />
      <function2 />
    </ul>

<!--     <ul>
      wp-blog-header.php <button type="button" @click="expand">Expand</button>
      <WpBlogHeader v-if="expanded" />
    </ul>
 -->  </div>
</template>

<script>
  import function1 from './functions/function1.vue'
  import function2 from './functions/function2.vue'
  import function3 from './functions/function3.vue'

  export default {
    name: 'app',
    components: {
      function1,
      function2,
      function3
    }
  }
  // import WpBlogHeader from './files/wp-blog-header.php.vue'

  // export default {
  //   name: 'app',
  //   components: {
  //     WpBlogHeader
  //   },
  //   data() {
  //     return {
  //       expanded: false
  //     }
  //   },
  //   methods: {
  //     expand() {
  //       this.expanded = true
  //     }
  //   }
  // }
</script>
