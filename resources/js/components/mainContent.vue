<template>
<div>

  <div id="row" class="row">
    <div class="col s12 m7">
      <div v-for="post in posts.slice().reverse()" v-bind:key="post.id" class="card">
        <div class="card-image">
          <img v-bind:src="'/storage/'+ post.image" />
        </div>
        <div class="card-content">
            <h1 class="card-title">{{post.title}}</h1>
          <p>{{post.description}}</p>
        </div>
        <div class="card-action">
          <a v-bind:href="'/viewPost/' + post.id">Read More</a>
          <div class="sharethis-inline-share-buttons"></div>
        </div>
      </div>
    </div>
  </div></div>
</template>


<script>
export default {
  data: function() {
    return { posts: []}
  },

  getters:{
      products: state => {
          return state.products.slice().reverse();
      }
  },

  mounted() {
    axios.get("/pagePosts").then(response => {
      console.log(response);
      this.posts = response.data.posts;
    });
  },
  computed:{
       products() {
        return this.$store.getters.products;
    }
  }
};
</script>

<style scoped>
/* Post cards */
.card {
  width: 450px;
  height: 500px;
}
</style>
