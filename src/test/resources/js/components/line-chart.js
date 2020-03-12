import Vue from 'vue';
import { Line } from 'vue-chartjs'

Vue.component('line-chart', {
  extends: Line,
  mounted () {
    this.renderChart({
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label: 'Data One',
          backgroundColor: '#f87979',
          data: [44, 39, 40, 30, 32, 50, 80]
        }
      ]
    }, {responsive: true, maintainAspectRatio: false})
  }
  
})

var vm = new Vue({
  el: '.line-chart'
})
