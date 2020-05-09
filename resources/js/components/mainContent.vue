<template>
  <div>
    <div v-for="post in posts" v-bind:key="post.id">
        <img src="post.image">
        <p>{{post.title}}</p>
        <p>{{post.body}}</p>
        </div>
  </div>
</template>


<script>
export default {
  data: function() {
    return {posts: []}
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
#cardOne {
  width: 400px;
  height: 400px;
}

#cardTwo {
  width: 400px;
  height: 400px;
}

#cardThree {
  width: 400px;
  height: 400px;
}

#cardFour {
  width: 400px;
  height: 400px;
}
</style>
