import Vue from 'vue';
import { Pie } from 'vue-chartjs'

Vue.component('pie-chart', {
  extends: Pie,
  props: ['data', 'bgColor', 'labels'],
  mounted () {
    this.renderChart({
      labels: this.labels,
      datasets: [
        {
          backgroundColor: this.bgColor,
          data: this.data
        }
      ]
    }, {responsive: true, maintainAspectRatio: false})
  }
  
})