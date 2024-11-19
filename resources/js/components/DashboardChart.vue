<template>
    <div>
        <h1>Vue.js aqui</h1>
        <div id="vue-dashboard">
            <CanvasJSChart :options="options" :style="styleOptions" @chart-ref="chartInstance" />
        </div>
    </div>
</template>

<script>
export default {
    name: 'DashboardChart',
    data() {
        return {
            chart: null,
            options: {
                zoomEnabled: true,
                title: {
                    text: "Try Zooming & Panning"
                },
                data: [{
                    type: "line",
                    dataPoints: this.generateRandomData()
                }]
            },
            styleOptions: {
                width: "100%",
                height: "360px"
            }
        };
    },
    methods: {
        generateRandomData() {
            let y = 1000;
            const dps = [];
            for (let i = 0; i < 1000; i++) {
                y += Math.round(Math.random() * 10 - 5);
                dps.push({ y });
            }
            return dps;
        },
        chartInstance(chart) {
            this.chart = chart;
        }
    }
};
</script>
