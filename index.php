<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Météo map</title>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css"/>
        <script src="assets/js/angular.min.js"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <div id="map">
        </div>
        <div class="sidebar">
            <div class="details">
                <div class="header block-icon">
                    <div class="img">                        
                        <i class="icon icon-cloud medium"></i>
                    </div>
                    <div class="title">
                        <h3>saint-denis</h3>
                    </div>
                    <div class="subtitle">
                        <h4>orages / eclaires</h4>
                    </div>
                </div>
                <div clss="body">
                    <div class="temp">
                        <p>12°</p>
                    </div>
                </div>
                <div class="footer">
                    <div class="wind block-icon">
                        <div class="img">
                            <i class="icon icon-wind small"></i>
                        </div>
                        <div class="title">
                            <h3>saint-denis</h3>
                        </div>
                        <div class="subtitle">
                            <h4>orages / eclaires</h4>
                        </div>
                    </div>
                    <div class="humidity block-icon">                        
                        <div class="img">
                            <i class="icon icon-humidity small"></i>
                        </div>
                        <div class="title">
                            <h3>saint-denis</h3>
                        </div>
                        <div class="subtitle">
                            <h4>orages / eclaires</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="date">
                <h4>
                    <i class="icon icon-angle-left small"></i>
                    15 SEPT 2015
                    <i class="icon icon-angle-right small"></i>
                </h4>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="note block-icon">                                 
            <div class="img">   
                <i class="icon icon-cloud small"></i>
            </div>
            <div class="title">
                <h3>saint-denis</h3>
            </div>
            <div class="subtitle">
                <h4>12°</h4>
                <a class="show">voir détails</a>
            </div>
        </div>
    </body>
</html>
