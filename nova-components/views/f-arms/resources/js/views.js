
Nova.booting((Vue, router) => {

    const registeredViews =  JSON.parse('{"index":{"route":"index","component":"Index","name":"f-arms-index-view"}}')
    Object.keys(registeredViews).forEach(function(key) {
        Vue.component(registeredViews[key]['name'], require('./views/' + registeredViews[key]['component']))
    })
    Vue.component('custom-create-resource-button', require('./components/CustomCreateResourceButton'))
})
