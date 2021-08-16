// Set new default font family and font color to mimic Bootstrap's default styling

(Chart.defaults.global.defaultFontFamily = "Metropolis"),
'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";


function hexToRGB(hex, alpha) {
    var r = parseInt(hex.slice(1, 3), 16),
        g = parseInt(hex.slice(3, 5), 16),
        b = parseInt(hex.slice(5, 7), 16);

    if (alpha) {
        return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")";
    } else {
        return "rgb(" + r + ", " + g + ", " + b + ")";
    }
}

// Pie Chart Example
function createPie(json, element){
    var ctx = document.getElementById(element);

    json = JSON.parse(json);

    var hovercol = json.colors.map(function(e) {
        e = hexToRGB(e, 0.4);
        return e;
    });

    var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: json.labels,
            datasets: [{
                data: json.data,
                backgroundColor: json.colors,
                hoverBackgroundColor: hovercol,
                hoverBorderColor: "rgba(255,255,255, .03)"
            }]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });
}

