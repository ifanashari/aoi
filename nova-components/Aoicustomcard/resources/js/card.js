Nova.booting((Vue, router, store) => {
    Vue.component('aoicustomcard', require('./components/Card'))
    Vue.component('f-chart', require('./components/chart/FChart'))
})
