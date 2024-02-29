<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>RollNPlay-Dashboard</title>
    <link rel="stylesheet" href="/css/admin_dashboard.css">
</head>
<body>
    @include("layouts/navbar_admin")
    <div class="container admin-dashboard-container">
        <div class="row">
            <h1>Admin Dashboard</h1>
            <div class="col-lg-6">
                <canvas id="chart1"></canvas>
            </div>
            {{-- <div class="col-lg-6">
                <canvas id="chart2"></canvas>
            </div> --}}
        </div>
    </div>

    <div class="container admin-card-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Best Seller</h5>
                      <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Product ID</th>
                            <th>Product Sold</th>
                        </tr>
                        @foreach($user_cart as $uc)
                        <tr>
                            <td>{{$uc -> name}}</td>
                            <td>{{$uc -> product_id}}</td>
                            <td>{{$uc -> product_count}}</td>
                        </tr>
                        @endforeach()
                      </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    @include("layouts/footer")
    @include("layouts/script")
</body>

<script>
    var ctx = document.getElementById('chart1').getContext('2d');
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
{{-- <script>
     var ctx = document.getElementById('chart2').getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($prod_data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($prod_data['prod_data']),
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
    </script> --}}

</html>