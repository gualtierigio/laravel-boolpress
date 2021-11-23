<template>
  <div class="container">
    <Header :title="title" />
  </div>
</template>

<script>
import Header from './Header.vue';
import MoviesList from './Movies/MoviesList.vue';

export default {
  name: "App",
  components: {
    Header,
    MoviesList
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