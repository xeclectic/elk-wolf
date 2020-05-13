<template>
  <div>
    <section>
      <!-- header links -->
      <div id="header-banner">
        <div id="headerColor"></div>
        <div class="row">
          <div class="col s2 m2 l2 center-align">
            <a class="link-color" href="/aboutUs">About Us</a>
          </div>

          <div class="col s1 m1 l1 center-align">
            <a class="link-color" href="/posts">Blog Posts</a>
          </div>

          <div class="col s1 m1 l1 right-align">
            <a class="link-color" href="/contact">Contacts</a>
          </div>

          <div class="col s7 m7 l7 right-align">
            <a class="link-color" href="/photography">Photography</a>
          </div>
          <img
            id="banner-logo"
            class="responsive-img"
            src="https://66.media.tumblr.com/9c196dfe5f1a07bcded480cec6412386/d2c643bb508b2b27-7a/s250x400/fb633f808c6cadc93bd66305f16bfe363eb4c445.png"
            alt="timber-ranch"
          />
        </div>
      </div>
    </section>
    <div class="row center-align">
      <input type="text" v-model="search" placeholder="search blogs" />
      <div id="Posts" v-for="post in filteredPosts.slice().reverse()" v-bind:key="post.id">
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
    <div class="row">
      <p class="col s12 m12 l12 center-align" id="footer-border">Elk and Wolf Ⓒ 2020</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "posts",
  data: function() {
    return { posts: [], search: "" };
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
    filteredPosts: function() {
      return this.posts.filter(post => {
        return post.title.match(this.search);
      });
    },
    products() {
      return this.$store.getters.products;
    }
  }
};
</script>

<style scoped>
#headerColor {
  position: relative;
  background-color: #d96940;
  width: 100%;
  top: 12vh;
  height: 2vw;
}

#header-banner {
  position: absolute;
  z-index: 1;
  background-color: #334746;
  width: 100%;
  height: 13vh;
  top: 5vh;
  /* background: linear-gradient(transparent,#334746 10%); */
}

#banner-logo {
  position: relative;
  width: 200px;
  height: 250px;
  left: 40vw;
  bottom: 5vh;
}
.row {
  position: sticky;
  bottom: 50vh;
}

/* Post cards */
.container {
  background: #f5f5f5;
  width: 97%;
}
#imageSize {
  width: 950px;
  height: 850px;
}
#footer-border {
  position: relative;
  background: #1b262d;
  width: 100%;
  height: 150px;
  top: 60vh;
  color: white;
  font-size: 30px;
}
</style>
