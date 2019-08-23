Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'card-value-dashboard',
            path: '/card-value-dashboard',
            component: require('./components/Tool'),
        },
    ])
})
