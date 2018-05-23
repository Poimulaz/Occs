<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OCW</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Link css -->
    <link href="Public/css/style.css" rel="stylesheet" >
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <?php include 'card.php'; ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <!-- <script src="Public/js/chart.js"></script> -->

    <script>new Chart(document.getElementById("bar-chart"),{
            type: 'doughnut',
            responsive: true,
            data: {
                labels: ["Espace utilisé", "Espace libre"],
                datasets: [{
                    label: 'Memoire (' . <?php $total ?> .  ')',
                    backgroundColor: ["#3e95cd"],
                    data: [<?php $occupe ?>, <?php $libre ?> ]
                }]
            },
            options: {
                title: {
                    display: false,
                    text: 'Predicted world population (millions) in 2050'
                }
            }
        });

        Chart.defaults.global.responsive = true;</script>
    
</body>
</html>