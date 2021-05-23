<!--inclusione function contenente head e navbar-->
<?php include_once("function.php"); ?>

<!DOCTYPE html>
<html>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<head>
    <?php head() ?>
    <title>Statistiche | BiblioFe</title>
</head>

<?php navbar() ?>

<br>
<h2>STATISTICHE SULLA BIBLIOTECA</h2>
<br>
<!--Grafico lingue-->
<div id="graphic" style="width: 40%">
    <p>5 Lingue più comuni in cui sono stati scritti i libri</p>
    <canvas id="graphCanvas"></canvas>
</div>
<br><br>
<!--Grafico autori-->
<div id="graphic" style="width: 40%">
    <p>Autore che ha scritto più libri</p>
    <canvas id="Canvas"></canvas>
</div>
<br><br>
<!--Grafico editori-->
<div id="graphic" style="width: 40%">
    <p>Editore che ha pubblicato più libri</p>
    <canvas id="GraphCanv"></canvas>
</div>
<br><br><br><br>
<?php footer() ?>
</body>
</html>

<script>
    $(document).ready(function() {
    //chiamate a funzioni
        showGraph1();
        showGraph2();
        showGraph3();
    });
    //definzione del grafico lingue utilizzando dati presi da lingue.php
    function showGraph1() {
        {
            $.post("lingue.php",function(data) {
                console.log(data);
                var LINGUA = [];
                var QUANTITA = [];
                for (var i in data) {
                    LINGUA.push(data[i].LINGUA);
                    QUANTITA.push(data[i].QUANTITA);
                    }
                var chartdata = {
                    labels: LINGUA,
                    datasets: [{
                    backgroundColor:["#FF6384",
                                     "#63FF84",
                                     "#84FF63",
                                     "#8463FF",
                                     "#6384FF",
                                     'rgba(255, 99, 132)',
                                     'rgba(54, 162, 235)',
                                     'rgba(255, 206, 86)',
                                     'rgba(75, 192, 192, 1)',
                                     'rgba(153, 102, 255, 1)'
                                    ],
                    borderColor: 'black',
                    borderWidth: 2,
                    hoverBorderColor: '#666666',
                    data: QUANTITA
                        }]
                    };


                var graphTarget = $("#graphCanvas");

                var barGraph = new Chart(graphTarget, {
                    type: 'pie',
                    data: chartdata
                });
            });
        }
    }
    //definzione del grafico autori utilizzando dati presi da autori.php
    function showGraph2() {
        {
            $.post("autori.php",function(data) {
                    console.log(data);
                    var NOMINATIVO = [];
                    var QUANTITA = [];

                    for (var i in data) {
                        NOMINATIVO.push(data[i].NOMINATIVO);
                        QUANTITA.push(data[i].QUANTITA);
                    }

                    var chartdata2 = {
                        labels: NOMINATIVO,
                        datasets: [{
                            backgroundColor:['rgba(255, 99, 132)',
                                             'rgba(54, 162, 235)',
                                             'rgba(255, 206, 86)',
                                             'rgba(75, 192, 192, 1)',
                                             'rgba(153, 102, 255, 1)',
                                             "#FF6384",
                                             "#63FF84",
                                             "#84FF63",
                                             "#8463FF",
                                             "#6384FF"
                                            ],
                            borderColor: 'black',
                            borderWidth: 2,
                            hoverBorderColor: '##666666',
                            data: QUANTITA
                        }]
                    };

                var graph = $("#Canvas");

                var pieChart = new Chart(graph, {
                    type: 'pie',
                    data: chartdata2
                });
            });
        }
    }


    //definzione del grafico editori utilizzando dati presi da editori.php
    function showGraph3() {
        {
            $.post("editori.php",function(data) {
                console.log(data);
                var NOME_E = [];
                var QUANTITA = [];

                for (var i in data) {
                    NOME_E.push(data[i].NOME_E);
                    QUANTITA.push(data[i].QUANTITA);
                    }

                var chartdata2 = {
                    labels: NOME_E,
                    datasets: [{
                        backgroundColor: [  "#FF6384",
                                            "#63FF84",
                                            "rgba(54, 162, 235)",
                                            "#8463FF",
                                            "#6384FF",
                                            'rgba(255, 99, 132)',
                                            'rgba(255, 206, 86)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            "#84FF63"         
                                        ],
                        borderColor: 'black',
                        borderWidth: 2,
                        hoverBorderColor: 'black',
                        data: QUANTITA
                        }]
                    };

                var graph = $("#GraphCanv");

                var pieChart = new Chart(graph, {
                    type: 'doughnut',
                    data: chartdata2
                    });
            });
        }
    }
</script>