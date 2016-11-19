<?php include_once(__DIR__ . '/../layouts/head.inc.php'); ?>
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
                <ul>
                    <li><a href="/admin/product">Управление товарими</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li><a href="/admin/setting/update">Управление настройками</a></li>
                </ul>
                </div>
            </div>     
        </div> 
</div>
<!--<script type="text/javascript">
        $(document).ready(function(){
            
            demo.initChartist();
            
            $.notify({
            icon: 'pe-7s-attention',
            message: "На сайте ведутся ремонтные работы, просьба временно ничего НЕ ИЗМЕНЯТЬ!!!"
                
            },{
                type: 'warning',
                timer: 3000
            });
            
        });
    </script>-->

</body>

<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>