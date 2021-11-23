<template>
  <div class="container">
    <Header :title="title" />
    <h1>test</h1>
  </div>
</template>

<script>
import Header from './Header.vue';
import Header from './Movies/MoviesList.vue';

export default {
  name: "App",
  components: {
    Header
  },
  data(){
      return {
          title : 'Boolpress'
      }
  }
};
</script>

<style lang="scss">


</style>