<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="/template/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>INDUSTRIAL DEVICES</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    
    <!-- Bootstrap core CSS     -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Animation library for notifications   -->
    <link href="/template/css/animate.min.css" rel="stylesheet" type="text/css"/>
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="/template/css/light-bootstrap-dashboard.css" rel="stylesheet" type="text/css"/>
    
    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/template/css/demo.css" rel="stylesheet" type="text/css"/>
    
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/template/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="/template/js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    
</head>
<body> 

<div class="wrapper">
    <div class="sidebar" data-image="/template/img/sidebar_00.png">   
    
    
    	<div class="sidebar-wrapper">
            <div class="logo">
                <div class="logo_name">
                    <a href="/" class="simple-text">
                     <?php echo $settings['logo']; ?>
                    </a>
                </div>
                <div class="under_logo"><?php echo $settings['under_logo'];?></div>
            </div>
                       
            <ul class="nav">
            <?php foreach($categories as $categoryItem): ?>
                <li>
                    <a href="/category/<?php echo $categoryItem['id']; ?>">
                       <!--  <i class="<?php echo $categoryItem['status']; ?>"></i>  -->
                        <p><?php echo nl2br($categoryItem['name']); ?></p>
                    </a>            
                </li>
            <?php endforeach; ?>  

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
                    <!-- <a class="navbar-brand" href="#">Dashboard</a> -->
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>  -->
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Дополнительно
                                    <b class="caret"></b>
                              </a>
                            <ul class="dropdown-menu">
                                <li><a href="/contacts/">Контакты</a></li>
                                <li class="divider"></li>
                                <li><a href="/about/">О Нас</a></li>
                                <li class="divider"></li>
                                <li><a href="/delivery/">Оплата и Доставка</a></li>
                            </ul>
                        </li> -->
                        <li><a href="/contact/">Оставить сообщение</a></li>
                        <li><a href="/contacts/">Контакты</a></li>
                        <li><a href="/about/">О Нас</a></li>
                        <li><a href="/delivery/">Оплата и Доставка</a></li>
                       <!--  <?php if(isset($_SESSION['user'])): ?>
                        <li>
                            <a href="/cabinet/"><i class="fa fa-user"></i>Аккаунт</a>
                        </li>    
                        <li>
                            <a href="/user/logout/"><i class="fa fa-unlock"></i>Выход</a>
                        </li>
                        <?php else: ?>
                        <li>
                           <a href="/user/register"><i class="fa fa-key"></i>Регистрация</a>
                        </li>
                        <li>
                            <a href="/user/login"><i class="fa fa-lock"></i>Войти</a>
                        </li>
                        <?php endif; ?>  -->
                    </ul>
                    <p class="head-contact"><?php echo $settings['header']; ?></p>
                </div>
            </div>
        </nav>