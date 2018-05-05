<template>
  <div class="file">
    <h1>{{ filename }}</h1>
    <button type="button" @click="s">show</button><br>
    <template v-if="show">
      test
    </template>
  </div>
</template>

<script>
export default {
  name: 'File',
  props: {
    filename: String,
    show: {
      type: Boolean,
      default: false
    }
  },
  methods: {
    s: function() {
      this.show = true
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
