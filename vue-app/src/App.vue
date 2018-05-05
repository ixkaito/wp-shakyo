<template>
  <div id="app">
    <File filename="wp-blog-header.php"/>
  </div>
</template>

<script>
import File from './components/File.vue'

export default {
  name: 'app',
  components: {
    File
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
