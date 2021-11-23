<template>
  <div class="row">
      <div class="col-3">
          
      </div>
  </div>
</template>

<script>

export default {
  name: "MoviesList",
  data(){
      return {
          movies : [],
          baseUri : 'http://127.0.0.1:8000',
      }
  },
  methods: {
      getMoviesList(){
          axios.get(`${this.baseUri}/api/movies`)
          .then((res) => {
              console.log(res);
          })
          .catch((err) => {
              console.error(err);
          });
      }
  },
  mounted(){
      this.getMoviesList();
  }
}

</script>

<style lang="scss">


</style>