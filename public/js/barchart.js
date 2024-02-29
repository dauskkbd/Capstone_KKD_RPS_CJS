var ctx = document.getElementById("chart1").getContext("2d");
function getColorFromString(str) {
    var hash = 0;
    for (var i = 0; i < str.length; i++) {
        hash = str.charCodeAt(i) + ((hash << 5) - hash);
    }
    var color = "#";
    for (var i = 0; i < 3; i++) {
        var value = (hash >> (i * 8)) & 0xff;
        color += ("00" + value.toString(16)).substr(-2);
    }
    return (
        "rgba(" +
        parseInt(color.substr(1, 2), 16) +
        "," +
        parseInt(color.substr(3, 2), 16) +
        "," +
        parseInt(color.substr(5, 2), 16) +
        ", 1)"
    );
}

var myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: chartData.labels,
        datasets: [
            {
                label: "Profit",
                data: chartData.data,
                backgroundColor: function (context) {
                    var date = context.chart.data.labels[context.dataIndex];
                    return getColorFromString(date);
                },
                borderColor: "rgba(75, 192, 192, 1)",
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
