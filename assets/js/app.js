import Vue from 'vue';
import vuetify from '../../src/plugins/vuetify.js';
import App from "./views/App.vue";

new Vue({
  el: '#app',
  vuetify,
  components: {
    App
  }
});