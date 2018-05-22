new Chart(document.getElementById("bar-chart"),{
    type: 'doughnut',
    responsive: true,
    data: {
        labels: ["Espace utilisé", "Espace libre"],
        datasets: [{
            label: "Population (millions)",
            backgroundColor: ["#3e95cd"],
            data: [154 , 310  ]
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Predicted world population (millions) in 2050'
        }
    }
});

Chart.defaults.global.responsive = true;