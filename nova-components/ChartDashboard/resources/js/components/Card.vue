<template>
    <card class="chart-dashboard">
        <div class="chart-title">{{this.card.chart_name}}</div>
        <component
            v-if="dataLabels.length > 0 && dataValue.length > 0"
            :is="card.chart_type"
            :dataLabels="dataLabels"
            :dataValue="dataValue"
            :chartName="this.card.chart_name"
        />
    </card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    data(){
        return{
            dataLabels: [],
            dataValue: []
        }
    },

    mounted() {
        this.setChartData()
    },

    methods:{
        setChartData(){
            let $this = this

            let tmpArray = Object.keys(this.card.data_chart)
            tmpArray.forEach(arr => {
                $this.dataLabels.push(arr)
                $this.dataValue.push($this.card.data_chart[arr])
            })
        }
    }
}
</script>
