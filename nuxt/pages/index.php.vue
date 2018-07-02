<template>
  <div class="content">
    <!-- <include /> -->
    <!-- <nuxt-link class="file" to="/wp-blog-header.php">wp-blog-header.php</nuxt-link> -->
    <p class="include">wp-blog-header.php</p>
    <!-- <div class="content" v-html="content"></div> -->
  </div>
</template>

<script>
export default {
  async asyncData({ $axios }) {
    const content = await $axios.$get('/wp-blog-header.php')
    // const data = $axios.$get('/wp-blog-header.php')

    const html = new DOMParser().parseFromString(content, 'text/xml')

    console.log(html)
    // const this.c = { content }
    // return this.c
  }

  // async asyncData ({ params }) {
  //   const content = await import(`~/pages/wp-blog-header.php.vue`)
  //   return { content }
  // }
}
</script>
