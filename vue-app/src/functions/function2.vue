<template>
  <li>function2() <button type="button" @click="expand">Expand</button>
    <ul>
      <function3 v-if="expanded" />
    </ul>
  </li></li>
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
