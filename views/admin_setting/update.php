<?php include_once(__DIR__ . '/../layouts/head.inc.php'); ?>
<div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                        <li>
                           <h3>UTP Corporation<sup>&copy;</sup></h3>
                        </li> 
                    </ul>    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="/admin">Назад
                                <i class="fa fa-reply-all"></i>
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
                <div class="col-xs-5 col-md-offset-1"><ol>
                        <h4>Редактирование общих настроек</h4>
                
                <br/>
                    <form role="form" action="#" method="post">
                        <div class="form-group">
                        <p>Заголовок</p>
                        <textarea class="form-control" name="logo"><?php echo $settings['logo']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>Текст под заголовком</p>
                        <textarea class="form-control" name="under_logo"><?php echo $settings['under_logo']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>Tелефоны, адрес</p>
                        <textarea class="form-control" type="text" name="header"><?php echo $settings['header']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>Курс доллара</p>
                        <input class="form-control" type="number" step="any" name="price_mod" placeholder="" value="<?php echo  $settings['price_mod']; ?>">
                        </div>
                        <div class="form-group">
                        <p>Контакты</p>
                        <textarea class="form-control" name="contacts"><?php echo $settings['contacts']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>О нас</p>
                        <textarea class="form-control" name="about"><?php echo $settings['about']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>Оплата и доставка</p>
                        <textarea class="form-control" name="delivery"><?php echo $settings['delivery']; ?></textarea>
                        </div>
                        <br/><br/>
                        <input type="submit" name="submit" class="btn btn-warning"value="Обновить">
                        <br/><br/>
                    </form>
                    <div class="row">
                        <div class="col-md-6 card">
                        <h5>Изменение иконки сайта:</h5>
                        <h5>pасширением .ico</h5>
                        <br/>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="file" name="favicon_change">
                                    <br/>
                                    <input type="submit" class="btn btn-warning" name="change_icon" value="изменить">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 card">
                        <br/><br/>
                        <h5>Изменение картинки боковой панели:</h5>
                        <br/>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="file" name="menubar_image">
                                    <br/>
                                    <input type="submit" class="btn btn-warning" name="menu_image" value="изменить">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>     
        </div> 
</div>


</body>

<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>