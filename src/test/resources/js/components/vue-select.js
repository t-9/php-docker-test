import Vue from 'vue';
import vSelect from 'vue-select';

Vue.component('v-select', vSelect);

Vue.component('v-sel', {
  data() {
    return {
      selected: null
    }
  },
  props: {
    options: {
      type: Array,
      required: true
    },
    value: {
      type: String,
      required: false
    },
    name: {
      type: String,
      required: true
    },
    required: {
      type: Boolean,
      required: false
    }
  },
  template: `<v-select v-bind:options="options" v-model="selected" v-on="setInitialValue(value)" :reduce="label => label.value" label="label">
  <template #search="{attributes, events}">
  <input :name="name" class="vs__search" :required="required == true" v-bind="attributes" v-on="events" v-model="selected" />
  </template>
  </v-select>`,
  methods: {
    setInitialValue: function (val) {
      this.selected = this.selected || val;
    }
  }
})