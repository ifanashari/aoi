Nova.booting((Vue, router, store) => {
    Vue.component('chart-dashboard', require('./components/Card'))

    Vue.component('chart-bar', require('./components/charts/ChartBar'))
    Vue.component('chart-doughnut', require('./components/charts/ChartDoughnut'))
})
