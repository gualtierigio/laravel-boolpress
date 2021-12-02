<template>
  <div class="row">
      <!-- <div class="col-12" id="map" style="width: 100px; height: 100px;"></div> -->
      <h2 class="text-center col-12 mb-3">Tutti i Movie</h2>
        <form method="GET" class="form-inline col-12 mb-3">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" v-model="search">
            <button class="btn btn-outline-success my-2 my-sm-0" @click.prevent="getMoviesList()">Search movies</button>
        </form>
        <div v-for="movie in movies" :key='movie.id' class="card col-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{movie.title}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
  </div>
</template>

<script>
// import tt from '@tomtom-international/web-sdk-maps';

export default {
  name: "MoviesList",
  data(){
      return {
          movies : [],
          baseUri : 'http://127.0.0.1:8000',
          search: ''
      }
  },
  methods: {
      getMoviesList(){
          console.log(this.search);
          axios.get(`${this.baseUri}/api/movies/`, )
          .then((res) => {
              this.movies = res.data.movies
          })
          .catch((err) => {
              console.error(err);
          }).then(() => {

          });
      },
    // _var: map=tt.map({
    //   key: 'wgMmMk891fpxAmk55UGPaIsCdPoqmKQt',
    //   container: 'map'
    // }),
    //     get var() {
    //       return this._var;
    //     },
    //     set var(value) {
    //       this._var=value;
    //     },
  },
  mounted(){
      this.getMoviesList();
  }
}

</script>

<style lang="scss">


</style>