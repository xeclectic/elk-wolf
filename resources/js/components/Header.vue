<template>
  <div>
    <!-- header images -->
    <section class="zoom">
      <img
        class="lax"
        data-lax-translate-y="0 0, 400 -400"
        src="https://static.photocdn.pt/images/articles/2018/03/09/articles/2017_8/landscape_photography.jpg"
      />
      <img
        id="logo-text"
        data-aos="fade-up"
        src="https://66.media.tumblr.com/5c03e5cb678297fc76f2040816b372a4/22674703c4808015-f0/s640x960/74b99aea6ca5124ab2b1e781f6099c9ddddb0689.png"
        alt="logo text"
      />
    </section>
    <img
      id="treeImage"
      class="lax"
      data-lax-translate-y="0 0, 600 -300"
      src="https://66.media.tumblr.com/1c0ac7badeb0f4badf0b6f72c5e6e113/21f503bbd23a4d7d-ae/s1280x1920/0bc9bc5e9de90c32c27f0cf7f32630a851b93c5f.png"
    />
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
        <!-- social icons -->
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
    </section>
  </div>
</template>


<script>
AOS.init();
</script>
<script>
export default {
  name: "Header",

  created() {},
  mounted() {
    // Sticky header JS

    var sticky = document.getElementById("header-banner");

    window.onscroll = function() {
      if (window.pageYOffset > 950) {
        sticky.style.position = "fixed";
        sticky.style.top = 0;
      } else {
        // sticky.style.position = "absolute";
        sticky.style.position = "relative"; //fixed
        sticky.style.top = 100;
      }
    };
  }
};
</script>

<style scoped>
body {
  margin: 0;
  padding: 0;
}

/* back image header */
.zoom {
  width: 100%;
  height: 1000px;
  position: relative;
  /* z-index: 1000; */
  overflow: hidden;
  background: linear-gradient(transparent, #334746);
}

.zoom::before {
  background: linear-gradient(transparent, #334746);
}
#treeImage {
  position: absolute;
  width: 100%;
  top: 60vh;
  opacity: 0.9;
}
/* parallax images */

#logo-text {
  position: absolute;
  top: 0;
  right: 25vw;
  width: 50%;
  opacity: 0.9;
}

/* Header banner */

#headerColor {
  position: relative;
  background-color: #d96940;
  width: 100%;
  top: 12vh;
  height: 2vw;
}

#header-banner {
  position: fixed;
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
  background: #334746;
  color: white;
  left: 10vh;
  bottom: 30vh;
  background: linear-gradient(#334746 30%, transparent);
}

.fa-instagram {
  background: #334746;
  color: white;
  bottom: 30vh;
  background: linear-gradient(#334746 30%, transparent);
}

@media only screen and (max-width: 1023px) {
  #banner-logo {
    position: relative;
    left: 15vw;
  }
  #header-banner {
    position: fixed;
    bottom: 500vh;
    height: 30vh;
  }
  #treeImage {
    position: absolute;
    bottom: 50vh;
  }
}
</style>
