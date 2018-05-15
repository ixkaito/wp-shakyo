<template>
  <li>function1()
    <ul>
      <function3 />
    </ul>
  </li>
</template>

<script>
  import function3 from './function3.vue'

  export default {
    name: 'app',
    components: {
      function3
    }
  }
</script>
