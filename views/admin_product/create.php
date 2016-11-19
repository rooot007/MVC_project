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
                        <li class="active">Добавление товара</li>
                    </ol>
                
                <h4>Список товаров</h4>
                <br/>
                    <form role="form" action="#" method="post" enctype="multipart/form-data">
                        <p>Название товара</p>
                        <input class="form-control" type="text" name="name" placeholder="" value="">
                        <p>Категория</p>
                        <select name="category_id">
                            <?php if(is_array($categoriesList)): ?>
                                <?php foreach($categoriesList as $category) :?>
                                <option value="<?php echo $category['id']; ?>">
                                    <?php echo $category['name']; ?>
                                </option> 
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <br/>
                        <p>Загрузить изображение1 товара</p>
                        <input type="file" name="image1" placeholder="" value="">
                        <br/>
                        <p>Загрузить изображение2 товара</p>
                        <input type="file" name="image2" placeholder="" value="">
                        <p>Загрузить изображение3 товара</p>
                        <input type="file" name="image3" placeholder="" value="">
                        <br/>
                        <p>Загрузить изображение4 товара</p>
                        <input type="file" name="image4" placeholder="" value="">
                        <p>Kороткое описание</p>
                        <textarea class="form-control" name="short_description"></textarea>

                        <br/><br/>

                        <p>Полное описание </p>
                        <textarea class="form-control" name="description"></textarea>
                        <br/><br/>

                        <p>Цена товара</p>
                        <input type="number" step="any" class="form-control" name="price" placeholder="В долларах!">
                        <br/><br/>

                        <p>Статус отображения</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображать</option>
                            <option value="0">Скрыт</option>
                        </select>
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