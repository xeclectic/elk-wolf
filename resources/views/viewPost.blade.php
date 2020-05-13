<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view posts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
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

      <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
                <img src="/storage/{{ $post->image }}">
            </div>
            <div class="card-content">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </div>
            <div class="card-action">
                <div class="sharethis-inline-share-buttons"></div>
            </div>
          </div>
        </div>
      </div>


</body>
<style>
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
      /* background: linear-gradient(transparent,#334746 10%); */
    }

    #banner-logo {
      position: relative;
      width: 200px;
      height: 250px;
      left: 40vw;
      bottom: 5vh;
    }


    /* Post cards */
    .card{
        width: 90vw;
        left: 5vw;
    }
    </style>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5eba10346fa8080012c687aa&product=inline-share-buttons" async="async"></script>
</html>
