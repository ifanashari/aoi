Nova.booting((Vue, router, store) => {
    Vue.component('card-value-dashboard', require('./components/CardValue'))
    
    Vue.component('i-user', require('./components/icons/IUser'))
    Vue.component('i-star', require('./components/icons/IStar'))
    Vue.component('i-files', require('./components/icons/IFiles'))
})
