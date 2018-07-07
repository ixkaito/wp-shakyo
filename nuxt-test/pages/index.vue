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
      setTimeout(function () {
        resolve({ name: 'world' })
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