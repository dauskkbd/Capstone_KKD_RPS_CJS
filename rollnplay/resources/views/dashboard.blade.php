<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Document</title>
    
</head>
<body>
    @include("layouts/admin_navbar")
    <canvas id="chart-line"></canvas>
    <script>
        const dataLine = {
            type: "line",
            data: {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday"],
            datasets: [{
                label: "Traffic",
                data: [3234, 2234, 3234, 1234],
                borderColor: "#4285F4",
                backgroundColor: "#4285F4",
                fill: false,
            }, ],
            },
        };
        
        new mdb.Chart(document.getElementById("chart-line"), dataLine);
    </script>


    @include("layouts/footer")
    @include("layouts/script")
</body>
</html>