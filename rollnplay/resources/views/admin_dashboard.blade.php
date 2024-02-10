<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
    <style>
        .admin-dashboard-container{
            margin-top: 10%;
            margin-bottom: 10%;
        }
    </style>
</head>
<body>
    @include("layouts/navbar_admin")
    <div class="container admin-dashboard-container">
        <div class="row">
            <div class="col-lg-10">
                <h1>Admin Dashboard</h1>
                <canvas id="bar_chart"></canvas>
            </div>
        </div>
    </div>
    @include("layouts/footer")
    @include("layouts/script")
</body>
<script>
// Your Chart initialization code
var ctx = document.getElementById('bar_chart').getContext('2d');

// Function to generate a color based on a string input
function getColorFromString(str) {
    var hash = 0;
    for (var i = 0; i < str.length; i++) {
        hash = str.charCodeAt(i) + ((hash << 5) - hash);
    }
    var color = '#';
    for (var i = 0; i < 3; i++) {
        var value = (hash >> (i * 8)) & 0xFF;
        color += ('00' + value.toString(16)).substr(-2);
    }
    return 'rgba(' + parseInt(color.substr(1, 2), 16) + ',' + parseInt(color.substr(3, 2), 16) + ',' + parseInt(color.substr(5, 2), 16) + ', 1)';
}

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: @json($data['labels']),
        datasets: [{
            label: 'Profit',
            data: @json($data['data']),
            backgroundColor: function(context) {
                var date = context.chart.data.labels[context.dataIndex];
                return getColorFromString(date); // Generate color based on the date
            },
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</html>