import Vue from 'vue';
import vSelect from 'vue-select';

Vue.component('v-select', vSelect);

new Vue({
  el: 'div.vue-select',
  data: {
    selected: '',
    options: [
      'foo',
      'bar',
      'baz'
    ]
  }
});