<template>
<div>

  <div class="row">
    <div class="col s12 m7">
      <div v-for="post in posts" v-bind:key="post.id" class="card">
        <div class="card-image">
          <img v-bind:src="'/storage/'+ post.image" />
          <span class="card-title">{{post.title}}</span>
        </div>
        <div class="card-content">
          <p>{{post.body}}</p>
        </div>
        <div class="card-action">
          <a v-bind:href="'/viewPost/' + post.id">Read More</a>
        </div>
      </div>
    </div>
  </div></div>
</template>


<script>
export default {
  data: function() {
    return { posts: [] };
  },

  mounted() {
    axios.get("/pagePosts").then(response => {
      console.log(response);
      this.posts = response.data.posts;
    });
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
