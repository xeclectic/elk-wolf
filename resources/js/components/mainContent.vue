<template>
  <div>
    <div class="row">
      <div
        class="col s12 m7 l6 center-align"
        v-for="post in posts.slice().reverse()"
        v-bind:key="post.id"
      >
        <div id="app" class="container">
          <img id="imageSize" v-bind:src="'/storage/'+ post.image" />
          <h1 class="card-title">{{post.title}}</h1>
          <p slot="content">{{post.description}}</p>
          <a v-bind:href="'/viewPost/' + post.id">Read More</a>
          <div class="sharethis-inline-share-buttons"></div>
          <br />
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data: function() {
    return { posts: [] };
  },

  getters: {
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
  computed: {
    products() {
      return this.$store.getters.products;
    }
  }
};
</script>

<style scoped>
/* Post cards */
.container {
  background: #f7f7ef;
  width: 60vh;
}
#imageSize {
  width: 450px;
  height: 400px;
}
#backgroundIMG {
  position: relative;
  top: 300vh;
}
</style>
