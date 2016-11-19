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
                           <a href="/admin/category">Назад  
                                <i class="fa fa-reply-all"></i>
                            </a>
                        </li>
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
                
                <h4>Добавление категории</h4>
                <br/>
                    <form role="form" action="#" method="post" enctype="multipart/form-data">
                        <p>Название категории</p>
                        <textarea class="form-control" name="name"></textarea>
                        <br/><br/>
                        <!-- <iframe name="icon" src="http://fontawesome.io/icons/" width="400" height="300"></iframe>
                        <p>Вид отображения</p>
                        <input type="text" class="form-control" name="status"
                        placeholder="Должен быть подобного вида: fa fa-desktop"> -->
                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-warning" value="Добавить">
                        <br/><br/>

                    </form>
                </div>    
            </div>     
        </div> 
</div>


</body>
<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>