<template>
    <div id="postContainer">
        <input type="text" v-model="search" placeholder="search blogs">
        <div id="Posts" v-for="post in filteredPosts.slice().reverse()" v-bind:key="post.id">
          <img v-bind:src="'/storage/'+ post.image" />
          <h2>{{post.title}}</h2>
          <p>{{post.body}}</p>
          </div>

    </div>
</template>

<script>
export default {
    name: "posts",
    data: function() {
    return { posts: [],
        search: '',
    };
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
  computed: {
      filteredPosts: function(){
          return this.posts.filter((post) => {
              return post.title.match(this.search);
          });
      },
      products() {
        return this.$store.getters.products;
    }
  }
}
</script>

<style scoped>

</style>
