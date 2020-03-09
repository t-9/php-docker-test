import Vue from 'vue';
import vSelect from 'vue-select';

Vue.component('v-select', vSelect);

new Vue({
  el: '#app',
  data: {
    options: ['options']
  }
});