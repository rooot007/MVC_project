<?php include_once(__DIR__ . '/../layouts/head.inc.php'); ?>
<div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
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
                        <li class="active">Удаление категории</li>
                    </ol>
                <h4 class="bg-danger">Удалить категорию с ID#<?php echo $id; ?></h4>
                <br/>
                <p>Вы точно хотите удалить категорию?</p>
                <form method="post">
                    <input class="btn btn-danger" type="submit" name="submit" value="DELETE">
                </form>
                </div>
            </div>     
        </div> 
</div>


</body>

<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>