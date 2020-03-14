import Vue from 'vue';
import vSelect from 'vue-select';

Vue.component('v-select', vSelect);

Vue.component('v-sel', {
  data() {
    return {
      selected: null
    }
  },
  props: ['opts', 'sel', 'nm', 'rq'],
  template: `<v-select v-bind:options="opts" v-model="selected" v-on="setInitialValue(sel)" :reduce="label => label.code" label="label">
  <template #search="{attributes, events}">
  <input :name="nm" class="vs__search" :required="rq == true" v-bind="attributes" v-on="events" v-model="selected" />
  </template>
  </v-select>`,
  methods: {
    setInitialValue: function (val) {
      this.selected = this.selected || val;
    }
  }
})

new Vue({
  el: '.vue-select',
})