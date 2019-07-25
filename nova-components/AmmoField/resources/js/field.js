Nova.booting((Vue, router, store) => {
    Vue.component('index-AmmoField', require('./components/IndexField'))
    Vue.component('detail-AmmoField', require('./components/DetailField'))
    Vue.component('form-AmmoField', require('./components/FormField'))
})
