<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Water Quality Map</title>

    <!-- JavaScript and CSS -->
    <?php include 'include.php'; ?>

    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript' src='js/heatmap.js'></script>
    
    <link href="css/theme.css" rel="stylesheet">
</head>

<body>
    <?php include 'theme/nav_fixed.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Charts
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- The Charts -->
            <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ammonium Nitrate Concentrations </h1><hr>
            <div id="chart_div" style="width: 900px; height: 500px;"></div>

            <div style="height: 30px"></div>
            <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Heavy Metal Concentrations </h1><hr>
            <div id="metals_chart" style="width: 900px; height: 500px;"></div>
        </div>

        <!-- Useless Filler -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Popular Views</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300">
                </a>
            </div>
        </div>
        <!-- Useless Filler -->

    </div>
    <!-- /.container -->

    <div class="container">
        <hr>
    </div>

</body>

</html>