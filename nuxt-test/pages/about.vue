<template>
  <div>
    <p>Hi from {{ name }}</p>
    <n-link to="/">
      Home page
    </n-link>
  </div>
</template>

<script>
export default {
  layout: 'dark',
  asyncData ({ req }) {
    return {
      name: req ? 'server' : 'client'
    }
  }
}
</script>
