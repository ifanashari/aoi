<template>
    <div class="c-card-value-dashboard flex justify-between items-center">
        <div class="c-value-item" v-for="(value, index) in values" :key="index">
            <div class="media media--1">
                <component
                    :is="value.icon"
                />
            </div>

            <div class="body">
                <div class="value">{{value.value}}</div>
                <div class="label">{{value.label}}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['card'],

    data(){
        return{
            values: []
        }
    },

    mounted(){
        this.setValues()
    },

    methods: {
        setValues(){
            let $this = this
            let tmpArr = Object.keys(this.card.data_value)
            let tmpValues = []
            let counter = 1
            let icon = ''

            tmpArr.forEach((arr) => {
                if(arr === 'Debitur Aktif'){
                    icon = 'i-user'
                } else if(arr === 'Dokumen Kurang (ELO)'){
                    icon = 'i-files'
                } else if(arr === 'Data Debitur Baru'){
                    icon = 'i-user'
                } else if(arr === 'Data Fasilitas Baru'){
                    icon = 'i-star'
                }


                $this.values.push(
                    {
                        icon: icon,
                        color: 'media--' + counter,
                        label: arr,
                        value: $this.card.data_value[arr]
                    }
                )

                counter++
            })
        }
    }
}
</script>