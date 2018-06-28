<template>
  <div class="container">
    <div class="file">
      <header class="file-header">
        <h1><i class="fa fa-file-text-o"></i></h1>
        <!-- <p class="toggle-all js-toggle-all">Expand all</p> -->
      </header>
      <article class="file-body">
        <nuxt/>
      </article>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  async asyncData ({}) {
    const { data: user } = await axios.get(`https://api.github.com/users/ixkaito`)
    return {
      user
    }
  }
}
</script>

<style lang="scss">
@import "~assets/scss/variables";
@import "~assets/scss/mixins";
@import "~assets/scss/editorstyles/github";

html, *, *:before, *:after {
  box-sizing: border-box;
}

.file {
  // @include outer-container;
  border: 1px solid #d8d8d8;
  border-radius: 3px;
  margin: auto;
  max-width: 960px;

  blockquote {
    padding-right: 0;
  }

  .file-header {
    background: #f5f5f5;
    border-bottom: 1px solid #d8d8d8;
    display: flex;
    justify-content: space-between;
    padding: 9px 10px 10px;

    h1,
    .toggle-all {
      border-bottom: 0;
      font-size: 14px;
      line-height: 17px;
      margin: 0;
      padding: 0;
    }

    .toggle-all {
      color: #4078c0;
      cursor: pointer;

      &:hover {
        text-decoration: underline;
      }
    }
  }

  .file-body {
    padding: 45px;
  }

  .content {

    .content {
      border-left: $blockquote-border-color $blockquote-border-style $blockquote-border-width;
      color: $blockquote-text-color;
      margin: 0 0 $margin-base-vertical;
      padding-left: $padding-base-horizontal;

      > :first-child {
        margin-top: 0;
      }

      > :last-child {
        margin-bottom: 0;
      }
    }

    b,
    strong,
    .include {
      @include fontawesome;

      font-size: 14px;
      font-weight: bolder;

      &:before {
        content: "\f0f6\20";
        font-weight: normal;
      }
    }

    .toggler {
      cursor: pointer;
      padding: 0.2em .5em;

      &:hover {
        color: #4078c0;
      }
    }
  }
}
</style>

