<?php
echo'


<canvas id="myChart" width="100%" height="100%"></canvas>
<script>
var ctx = document.getElementById("myChart");
var scatterChart = new Chart(ctx, {
    type: 'line',
    fill: 'False',
    data: {
        datasets: [{
            label: 'Scatter Dataset',
            data: [{
                x: -10,
                y: 0
            }, {
                x: 0,
                y: 10
            }, {
                x: 10,
                y: 5
            }]
        }]
    },
    options: {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        }
    }
});
</script>



?>
