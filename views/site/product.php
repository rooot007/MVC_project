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
    <div class="sidebar" data-color="blue" data-image="/template/img/sidebar-8.png">    
    
    <!--   
        
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" 
        Tip 2: you can also add an image using data-image tag
        
    -->
    
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                   <strong>TechnoPort</strong>
                </a>
            </div>
                       
            <ul class="nav">
                <li>
                    <a href="<!-- dashboard.html -->">
                        <i class="pe-7s-graph"></i> 
                        <p>Услуги</p>
                    </a>            
                </li>
                <li>
                    <a href="<!-- user.html -->">
                        <i class="pe-7s-user"></i> 
                        <p>Товары</p>
                    </a>
                </li>
                
               
            </ul> 
    	</div>
    </div>
    
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">       
                    <ul class="nav navbar-nav navbar-left">



                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li> 
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Дополнительно
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Контакты</a></li>
                                <li class="divider"></li>
                                <li><a href="#">О Нас</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Оплата и Доставка</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="/views/site/register.php">
                               Регистрация
                            </a>
                        </li>
                        <li>
                            <a href="/views/site/login.php">
                                Войти
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Email Statistics</h4>
                                    <hr>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="content">                                
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                                    
                                    <div class="footer">
                                        <div class="legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Bounce
                                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>                        
                </div>
                    
                
                
        
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Mail: site@technoport.esy
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2015 Created by UTP Corporation.
                </p>
            </div>
        </footer>
        
    </div>   
</div>


</body>

    <!--   Core JS Files   -->
    <script src="/template/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/views/layouts/js/bootstrap.min.js" type="text/javascript"></script>
    
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
    
    <script type="text/javascript">
    	// $(document).ready(function(){
        	
     //    	demo.initChartist();
        	
     //    	$.notify({
     //        	icon: 'pe-7s-gift',
     //        	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
            	
     //        },{
     //            type: 'info',
     //            timer: 4000
     //        });
            
    	// });
	</script>
    
</html>