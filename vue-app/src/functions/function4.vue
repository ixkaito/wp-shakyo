<template>
  <li>function4() <button type="button" @click="expand">Expand</button>
    <ul>
      <function2 v-if="expanded" />
    </ul>
  </li>
</template>
