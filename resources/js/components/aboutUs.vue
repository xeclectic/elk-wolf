<template>
  <div>
    <section>
      <!-- header links -->
      <div class="row">
        <div class="col s2 m2 l2 center-align">
          <a class="link-color" href="#">About Us</a>
        </div>

        <div class="col s1 m1 l1 center-align">
          <a class="link-color" href="#">Posts</a>
        </div>

        <div class="col s1 m1 l1 right-align">
          <a class="link-color" href="#">Contacts</a>
        </div>

        <div class="col s7 m7 l7 right-align">
          <a class="link-color" href="#">Shop</a>
        </div>
        <div id="header-banner">
          <img
            id="banner-logo"
            class="responsive-img"
            src="https://66.media.tumblr.com/9c196dfe5f1a07bcded480cec6412386/d2c643bb508b2b27-7a/s250x400/fb633f808c6cadc93bd66305f16bfe363eb4c445.png"
            alt="timber-ranch"
          />
        </div>
        <!-- social icons -->
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "aboutUs"
};
</script>

<style scoped>
body {
  margin: 0;
  padding: 0;
}

/* Header banner */

#header-banner {
  background-color: #1b262d;
  width: 100%;
  height: 30vh;
}

#banner-logo {
  position: sticky;
  width: 300px;
  height: 350px;
  left: 37vw;
}
.row {
  position: sticky;
  bottom: 30vh;
}

/* social media icons */
.fa {
  position: relative;
  padding: 20px;
  font-size: 30px;
  bottom: 15vh;
  left: 20vw;
}

.fa:hover {
  opacity: 0.7;
}
.fa-youtube {
  background: #1b262d;
  color: white;
  left: 10vh;
}

.fa-instagram {
  background: #1b262d;
  color: white;
}
</style>
