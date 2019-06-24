<template>
    <div class="dataviz-circle">
        <canvas width="400" height="400" style="height: 400px; width: 400px;" ref="viz" id="viz"></canvas>
    </div>
</template>

<script>
import Chart from 'chart.js'

export default {
    name: 'DataViz',
    mounted () {
        const ctx = this.$refs.viz.getContext('2d')
        const chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['élèves se sentant en insécurité', 'élèves se sentant en sécurité'],
                datasets: [
                    {
                        label: 'propotion des élèves se sentant en insécurité',
                        data: [33, 66],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'propotion des élèves se sentant en insécurité',
                        data: [25, 75],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                labels: {
                    fontSize: 35
                },
                // responsive: false,
                maintainAspectRatio: false,
                title: {
                    fontSize: 35
                },
                gridLines: {
                    display: false,
                    drawTicks: false,
                    offsetGridLines: false,
                    zeroLineWidth: 0
                },
                scales: {
                    xAxes: [{
                        // barPercentage: 0.5,
                        // barThickness: 6,
                        // maxBarThickness: 8,
                        display: false,
                        minBarLength: 2,
                        gridLines: {
                            display: false,
                            offsetGridLines: false,
                            zeroLineWidth: 0,
                            drawBorder: false,
                            drawOnChartArea: false
                        }
                    }],
                    yAxes: [{
                        display: false,
                        maxBarLength: 60,
                        barPercentage: 0.5,
                        gridLines: {
                            display: false,
                            offsetGridLines: false,
                            zeroLineWidth: 0,
                            drawBorder: false,
                            drawOnChartArea: false
                        },
                        ticks: {
                            beginAtZero: true,
                            fontSize: 0
                        }
                    }]
                }
            }
        })
        chart.resize().render()
        window.onresize = () => {
            chart.resize().render()
        }
        // this.$refs.viz.width = 400
        // this.$refs.viz.height = 400
    }
}
</script>

<style lang="stylus" scoped>

.dataviz-circle
    height 400px
    margin-top 50px
    margin-bottom 50px

    canvas#viz
        margin auto
        // width: 78vw !important;
        // height:600px !important;

</style>
