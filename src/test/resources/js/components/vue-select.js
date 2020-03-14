import Vue from 'vue';
import vSelect from 'vue-select';

Vue.component('v-select', vSelect);

new Vue({
  el: '.vue-select-surname',
  data: {
    selected: null,
    options: []
  },
  methods: {
    setInitialValue: function (val) {
      if (this.selected == null) {
        this.selected = val;
      }
    }
  }
})

new Vue({
  el: '.vue-select-given-name',
  data: {
    selected: null,
    options: []
  },
  methods: {
    setInitialValue: function (val) {
      if (this.selected == null) {
        this.selected = val;
      }
    }
  }
})