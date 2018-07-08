<template>
  <div class="container">
    <p>Hello {{ name }}</p>
    <NuxtLink to="/about">
      Go To /about
    </NuxtLink>
  </div>
</template>

<script>
export default {
  asyncData () {
    return new Promise(resolve => {
      setTimeout(() => {
        resolve({ name: 'world' })
      }, 1000)
    })
  }
}
</script>

<style scoped>
.container {
  font-size: 20px;
  text-align: center;
  padding-top: 100px;
}
</style>