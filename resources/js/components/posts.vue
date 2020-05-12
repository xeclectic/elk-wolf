<template>
    <div>
        <div v-for="post in posts" v-bind:key="post.id">
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
    return { posts: [] };
  },

  mounted() {
    axios.get("/pagePosts").then(response => {
      console.log(response);
      this.posts = response.data.posts;
    });
  }
}
</script>

<style scoped>

</style>
