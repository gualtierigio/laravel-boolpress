<template>
  <div class="row">
        <div v-for="movie in movies" :key='movie.id' class="card col-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{movie.title}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <!-- <a href="{{ route('movie->id') }}" class="btn btn-primary">Go to Movie</a> -->
            </div>
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
          axios.get(`${this.baseUri}/api/movies/`)
          .then((res) => {
              this.movies = res.data.movies
          })
          .catch((err) => {
              console.error(err);
          }).then(() => {

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