<script>
import { Bar } from 'vue-chartjs'

export default {
    extends: Bar,

    props: [
        'dataLabels',
        'dataValue',
        'chartName',
    ],
    
    data(){
        return{
            chartdata: {
                labels: [],
                datasets: [
                    {
                        label: '',
                        backgroundColor: ['#f8607f', '#487efa'],
                        data: []
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        }
    },

    mounted(){
        this.setChartData()
    },

    methods: {
        setChartData(){
            let $this = this

            this.dataLabels.forEach(label => {
                $this.chartdata.labels.push(label)
            })

            this.dataValue.forEach(value => {
                $this.chartdata.datasets[0].data.push(value)
            })

            this.chartdata.datasets[0].label = this.chartName

            this.renderChart(this.chartdata, this.options)
        },

    }
}
</script>