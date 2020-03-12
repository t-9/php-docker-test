import Vue from 'vue';
import { Line } from 'vue-chartjs'

Vue.component('line-chart', {
  extends: Line,
  props: ['data'],
  mounted () {
    this.renderChart({
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label: 'Data One',
          backgroundColor: '#f87979',
          data: this.data
        }
      ]
    }, {responsive: true, maintainAspectRatio: false})
  }
  
})

var vm = new Vue({
  el: '.line-chart'
})
