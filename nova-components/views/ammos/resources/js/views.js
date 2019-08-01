
Nova.booting((Vue, router) => {

    const registeredViews =  JSON.parse('{"detail":{"route":"detail","component":"Detail","name":"ammos-detail-view"}}')
    Object.keys(registeredViews).forEach(function(key) {
        Vue.component(registeredViews[key]['name'], require('./views/' + registeredViews[key]['component']))
    })
    Vue.component('detail-custom-has-many-field', require('./components/CustomHasManyField'))
    Vue.component('custom-resource-index', require('./components/CustomResourceIndex'))
    Vue.component('custom-create-resource-buttons', require('./components/CustomCreateResourceButton'))
})
