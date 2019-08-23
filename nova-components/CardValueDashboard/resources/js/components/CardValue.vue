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
            values: [
                {
                    icon: 'i-user',
                    color: 'media--1',
                    label: 'alpha',
                    value: 1
                }
            ]
        }
    },

    methods: {

    }
}
</script>