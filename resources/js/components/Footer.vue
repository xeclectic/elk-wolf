<template>
  <div>
    <div id="accent"></div>
    <img
      id="barnImage"
      class="lax"
      data-lax-preset="blurInOut"
      src="https://i.etsystatic.com/7293334/r/il/ad21c2/1674277939/il_1588xN.1674277939_38vw.jpg"
    />

    <div class="row">
      <p class="col s12 m12 l12 center-align" id="footer-border">Elk and Wolf Ⓒ 2020</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer",
  mounted: function() {
    var image = document.getElementById("barnImage");
    new simpleParallax(image);
  }
};
</script>

<style scoped>
#footer-border {
  position: relative;
  background: #1b262d;
  width: 100%;
  height: 150px;
  top: 60vh;
  color: white;
  font-size: 30px;
}

#barnImage {
  position: relative;
  top: 60vh;
  width: 100%;
  height: 80vh;
}

#accent {
  position: relative;
  background: #d99d4e;
  width: 100%;
  height: 60vh;
  top: 20vh;
  transform-origin: top right;
  transform: skewY(4deg);
}
</style>
