<template>
  <div>
    {{ $store.commit('titleis', 'wp-blog-header.php') }}
    <nuxt-link class="file" to="/wp-load.php">wp-load.php</nuxt-link>
  </div>
</template>
