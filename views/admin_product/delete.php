<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/template/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>TECHNO-PORT</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    
    <!-- Bootstrap core CSS     -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/template/css/animate.min.css" rel="stylesheet"/>
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="/template/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    
    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/template/css/demo.css" rel="stylesheet" />
    
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/template/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
</head>
<body>
<div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Dashboard</a> -->
                </div>
                <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                        <li>
                           <h3>UTP Corporation<sup>&copy;</sup></h3>
                        </li> 
                    </ul>    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="/admin">Админка 
                                <i class="fa fa-user-plus"></i>
                            </a>
                        </li>
                        <li>
                           <a href="/">Перейти на сайт 
                                <i class="fa fa-desktop"></i>
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-offset-1">
                    <ol>
                        <li class="active">Удалить товар</li>
                    </ol>
                <h4 class="bg-danger">Удалить товар с ID#<?php echo $id; ?></h4>
                <br/>
                <p>Вы точно хотите удалить товар?</p>
                <form method="post">
                    <input class="btn btn-danger" type="submit" name="submit" value="DELETE">
                </form>
                </div>
            </div>     
        </div> 
</div>


</body>

    <!--   Core JS Files   -->
    <script src="/template/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/template/js/bootstrap.min.js" type="text/javascript"></script>
    
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="/template/js/bootstrap-checkbox-radio-switch.js"></script>
    
    <!--  Charts Plugin -->
    <script src="/template/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/template/js/bootstrap-notify.js"></script>
    
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="/template/js/light-bootstrap-dashboard.js"></script>
    
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="/template/js/demo.js"></script>
    
</html>