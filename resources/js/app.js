require('./bootstrap');

window.Vue = require('vue');

Vue.component('Root', require('./components/Root.vue').default);
Vue.component('posts', require('./components/posts.vue').default);
Vue.component('Photography', require('./components/Photography.vue').default);


window.onload = function() {
  lax.setup(); // init

  const updateLax = () => {
    lax.update(window.scrollY);
    window.requestAnimationFrame(updateLax);
  };

  window.requestAnimationFrame(updateLax);
};
const app = new Vue({
    el: '#app',
});
