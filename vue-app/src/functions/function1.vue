<template>
  <li>function1() <button type="button" @click="expand">Expand</button>
    <ul>
      <function3 v-if="expanded" />
    </ul>
  </li>
</template>

<script>
  import function3 from './function3.vue'

  export default {
    name: 'app',
    components: {
      function3
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
