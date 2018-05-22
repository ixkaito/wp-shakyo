<template>
  <li>function1() <button type="button" @click="expand">Expand</button>
    <ul>
      <function3 v-if="expanded" />
    </ul>
  </li>
</template>
