import Vue from 'vue';
import vSelect from 'vue-select';

Vue.directive('init', {
  bind: function (el, binding, vnode) {
    vnode.context[binding.arg] = binding.value
  }
})

Vue.component('v-select', {
  extends:vSelect,
  props: ['options'],
  mounted () {
    data: [
      {
      selected: null,
      options: this.options
      }
    ]
  }
})

new Vue({
  el: 'div.vue-select',
})