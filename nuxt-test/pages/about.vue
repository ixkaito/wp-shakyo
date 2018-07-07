<template>
  <div class="container">
    <p>About Page</p>
    <NuxtLink to="/">
      Go To /
    </NuxtLink>
  </div>
</template>

<script>
export default {
  asyncData () {
    return new Promise(resolve => {
      setTimeout(function () {
        resolve({})
      }, 1000)
    })
  }
}
</script>

<style>
.container {
  text-align: center;
  margin-top: 150px;
  font-size: 20px;
}
</style>