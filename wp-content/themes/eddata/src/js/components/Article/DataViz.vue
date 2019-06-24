<template>
    <div class="dataviz">
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
            type: 'bar',
            data: {
                labels: ['2013', '2014', '2015', '2016', '2017', '2018'],
                datasets: [{
                    label: 'âge moyen des professeurs en REP',
                    data: [39.2, 39.2, 39.4, 39.9, 39.6, 39.6],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }, {
                    label: 'âge moyen des professeurs hors REP',
                    data: [41.9, 42.1, 42, 42.2, 44, 44.9],
                    backgroundColor: [
                        'rgba(255, 124, 157, 0.4)',
                        'rgba(54, 167, 240, 0.4)',
                        'rgba(255, 211, 91, 0.4)',
                        'rgba(80, 197, 192, 0.4)',
                        'rgba(158, 107, 255, 0.4)',
                        'rgba(255, 164, 69, 0.4)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
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
                scales: {
                    xAxes: [{
                        // barPercentage: 0.5,
                        // barThickness: 6,
                        // maxBarThickness: 8,
                        minBarLength: 2,
                        gridLines: {
                            offsetGridLines: true
                        }
                    }],
                    yAxes: [{
                        maxBarLength: 60,
                        barPercentage: 0.5,
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1,
                            min: 35,
                            max: 45,
                            fontSize: 18
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

.dataviz
    height 400px
    margin-top 50px
    margin-bottom 50px

    canvas#viz
        margin auto
        width: 76vw !important;
        // height:600px !important;

</style>
