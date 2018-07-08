<template>
  <div class="container">
    <p>About Page</p>
    <p>It should take 5 seconds for the loader to disappear</p>
    <p>
      It should take 5 seconds for the route to change after you
      <span class="link" @click="goToFinal">
        click here
      </span>
    </p>
  </div>
</template>

<script>
export default {
  loading: false,
  asyncData () {
    return new Promise(resolve => {
      setTimeout(() => {
        resolve({})
      }, 1000)
    })
  },
  mounted () {
    setTimeout(() => {
      this.$nuxt.$loading.finish()
    }, 5000)
  },
  methods: {
    goToFinal () {
      this.$nuxt.$loading.start()
      setTimeout(() => {
        this.$router.push('/final')
      }, 5000)
    }
  }
}
</script>

<style scoped>
.link {
  cursor: pointer;
  text-decoration: underline;
}
.container {
  font-size: 20px;
  text-align: center;
  padding-top: 100px;
}
</style>