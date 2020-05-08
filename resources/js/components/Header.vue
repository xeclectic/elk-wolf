<template>
  <div>
    <!-- header images -->
    <section class="zoom">
        <img id="logo-text" class="responsive-img" src="https://66.media.tumblr.com/5c03e5cb678297fc76f2040816b372a4/22674703c4808015-f0/s640x960/74b99aea6ca5124ab2b1e781f6099c9ddddb0689.png" alt="logo text">
        <!-- <img id="tree-left" class="responsive-img" src="https://66.media.tumblr.com/5bab565be890515d4fab33a6927e1f9a/e8a43a089cad3ad1-2b/s400x600/789d44d05abfb1d132135479c630fd535b26b1c4.png" alt="rider">
        <img id="tree-right" class="responsive-img" src="https://66.media.tumblr.com/8eb32ed91cf03c5e51a358e86ab07a32/e8a43a089cad3ad1-9d/s1280x1920/4245917b79a2bb87b24a7fec5964fcae2139637e.png" alt="horse"> -->
    </section>
    <section>
        <!-- header links -->
    <div class="row">
      <div class="col s2 m2 l2 center-align">
        <a class="link-color" href="/aboutUs">About Us</a>
      </div>

      <div class="col s1 m1 l1 center-align">
        <a class="link-color" href="/posts">Posts</a>
      </div>

      <div class="col s1 m1 l1 right-align">
        <a class="link-color" href="/contact">Contacts</a>
      </div>

      <div class="col s7 m7 l7 right-align">
        <a class="link-color" href="/photography">Photography</a>
      </div>
      <div id="header-banner">
          <img id="banner-logo" class="responsive-img" src="https://66.media.tumblr.com/9c196dfe5f1a07bcded480cec6412386/d2c643bb508b2b27-7a/s250x400/fb633f808c6cadc93bd66305f16bfe363eb4c445.png" alt="timber-ranch">
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
    name: "Header",

    created(){
        window.addEventListener('scroll', this.handleScroll);
    },
    mounted() {
        window.addEventListener('scroll', this.handleScroll)
        this.handleScroll;
        var treeLeft = document.getElementById('tree-left');
        scroll = window.pageYOffset;
        document.addEventListener('scroll',
        function (e) {
            var offset = window.pageYOffset;
            scroll = offset;
            treeLeft.style.width = (100 + scroll/5) + '%'
        });
        var treeRight = document.getElementById('tree-right')
    scroll = window.pageYOffset;
    document.addEventListener('scroll',
    function (e) {
        var offset = window.pageYOffset;
        scroll = offset;
        treeRight.style.width = (100 + scroll/5) + '%';
        treeRight.style.right = scroll/50 + '%';
    });
    }
};
</script>

<style scoped>
    body{
        margin: 0;
        padding: 0;
    }

    /* back image header */
    .zoom{
        width: 110%;
        height: 1000px;
        position: relative;
        overflow: hidden;
        background: url(https://static.photocdn.pt/images/articles/2018/03/09/articles/2017_8/landscape_photography.jpg);
        background-size: cover;
    }

    .zoom::before{
        content: '';
        position: absolute;
        bottom: 0;
        width: 100%;
        height:200px;
        z-index: 1000;
        background: linear-gradient(transparent, #1B262D)
    }

    /* parallax images */

    #logo-text{
        position: absolute;
        top: 0;
        right: 33vw;
        width: 50%;
        opacity: 0.9;
    }

    #tree-left{
        position: absolute;
        top: 0;
        left: 10%;
        width: 55%;
        transform: translateX(-50%);
    }

    #tree-right{
        position: absolute;
        bottom: 10px;
        right: 0;
        width: 65%;
    }

    /* Header banner */

    #header-banner{
        background-color:#1B262D;
        width: 100%;
        height: 30vh;
    }

    #banner-logo{
        position: sticky;
        width: 300px;
        height: 350px;
        left: 37vw;
    }
    .row{
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
  background: #1B262D;
  color: white;
  left: 10vh;
}

.fa-instagram {
  background: #1B262D;
  color: white;
}


@media only screen and (max-width: 1023px) {
    #tree-left {
        display: none;
    }
    #tree-right {
        display: none;
    }
}
</style>
