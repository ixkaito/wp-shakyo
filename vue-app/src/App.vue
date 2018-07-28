<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </div>
    <router-view/>
    <ul>
      <function1 />
      <function2 />
      <function4 />
      <router-view></router-view>
    </ul>
  </div>
</template>
