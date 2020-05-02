<template>
  <div>
    <!-- header images -->
    <section class="zoom">
        <img id="logo-text" src="https://66.media.tumblr.com/5c03e5cb678297fc76f2040816b372a4/22674703c4808015-f0/s640x960/74b99aea6ca5124ab2b1e781f6099c9ddddb0689.png" alt="logo text">
        <img id="tree-left"  src="https://66.media.tumblr.com/5bab565be890515d4fab33a6927e1f9a/e8a43a089cad3ad1-2b/s400x600/789d44d05abfb1d132135479c630fd535b26b1c4.png" alt="rider">
        <img id="tree-right"  src="https://66.media.tumblr.com/8eb32ed91cf03c5e51a358e86ab07a32/e8a43a089cad3ad1-9d/s1280x1920/4245917b79a2bb87b24a7fec5964fcae2139637e.png" alt="horse">
    </section>
    <section>
        <!-- header links -->
    <div class="row">
      <div class="col s2 m2 l2 right-align">
        <a class="link-color" href="#link-aboutUs">About Us</a>
      </div>

      <div class="col s2 m2 l2 right-align">
        <a class="link-color" href="#connect-banner">Blog</a>
      </div>

      <div class="col s6 m4 l5 right-align">
        <a class="link-color" href="#feature-banner">Photography</a>
      </div>

      <div class="col s2 m2 l2 right-align">
        <a class="link-color" href="#">Shop</a>
      </div>
      <div>
          <p>A good horse will change your life. Truly great ones define it.</p>
      </div>
      </div>
    </section>
    <section class="content">
        <h2> this is the header for content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis sed odio morbi quis commodo. Est velit egestas dui id ornare. Dignissim suspendisse in est ante in nibh. Quis blandit turpis cursus in hac habitasse platea dictumst. Quis vel eros donec ac odio tempor orci dapibus ultrices. Ut eu sem integer vitae justo eget. Dapibus ultrices in iaculis nunc sed. Nisl purus in mollis nunc sed id. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Pellentesque habitant morbi tristique senectus et netus. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Sed euismod nisi porta lorem mollis aliquam ut porttitor leo. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Dui faucibus in ornare quam viverra orci sagittis eu volutpat.

Pretium viverra suspendisse potenti nullam ac. Molestie at elementum eu facilisis sed. In metus vulputate eu scelerisque felis imperdiet proin. Lacinia at quis risus sed vulputate odio ut. Odio ut enim blandit volutpat. Consequat id porta nibh venenatis. Augue lacus viverra vitae congue eu. Eu facilisis sed odio morbi quis. Pellentesque habitant morbi tristique senectus et. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Non enim praesent elementum facilisis leo. Malesuada fames ac turpis egestas sed. Turpis massa sed elementum tempus egestas. Blandit cursus risus at ultrices mi tempus. Pretium viverra suspendisse potenti nullam. Arcu ac tortor dignissim convallis. Arcu non sodales neque sodales ut etiam. Nulla pellentesque dignissim enim sit. Quam lacus suspendisse faucibus interdum posuere.

Vel quam elementum pulvinar etiam non quam lacus suspendisse. Parturient montes nascetur ridiculus mus mauris. Aenean et tortor at risus viverra adipiscing at in. Porttitor rhoncus dolor purus non. Maecenas sed enim ut sem viverra aliquet eget sit amet. Aenean sed adipiscing diam donec adipiscing tristique risus. Nisi scelerisque eu ultrices vitae auctor eu augue. Non tellus orci ac auctor augue mauris augue. Nulla pellentesque dignissim enim sit amet venenatis. Auctor eu augue ut lectus arcu bibendum at varius. Commodo viverra maecenas accumsan lacus vel facilisis volutpat. In iaculis nunc sed augue lacus viverra vitae congue. Convallis a cras semper auctor neque vitae tempus quam. Sem viverra aliquet eget sit. Elementum integer enim neque volutpat ac. Porttitor lacus luctus accumsan tortor posuere ac. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna. Dignissim cras tincidunt lobortis feugiat. Semper risus in hendrerit gravida rutrum quisque non. Integer feugiat scelerisque varius morbi.</p>
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
        background: linear-gradient(transparent, #222222)
    }

    /* parallax images */
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

    #logo-text{
        position: absolute;
        top: 0;
        right: 33vw;
        width: 50%;
    }

</style>
