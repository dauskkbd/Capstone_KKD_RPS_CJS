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
    var ctx = document.getElementById('bar_chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Profit',
                data: @json($data['data']),
                backgroundColor: ['rgba(75, 192, 192, 1)',
                'rgba(100, 192, 0, 1)',
                'rgba(20, 0, 192, 1)',
                'rgba(100, 192, 61, 1)'],
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