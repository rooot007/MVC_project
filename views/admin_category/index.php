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
                </div>
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
                <div class="col-xs-6 col-md-offset-1 col-md-6">
                    <ol>
                        <li class="active">Управление категориями</li>
                    </ol>
                    <h5><a href="/admin/category/create"><i class="fa fa-plus"></i>Добавить категории</a></h5>
                <h4>Список категорий</h4>
                <br/>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID категории</th>
                            <th>номер в списке</th>
                            <th>Название категории</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($categoryList as $category): ?>
                        <tr>
                            <td><?php echo $category['id']; ?></td>
                            <td><form action="#" method="post"><input type="number" name="category_position" value="<?php echo $category['list_category']; ?>">
                            <input type="hidden" name="id_category" value="<?php echo $category['id']; ?>">
                            <input type="submit" name="submit" value="Ok">
                            </form></td>
                            <td><?php echo $category['name']; ?></td>
                            <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>     
        </div> 
</div>


</body>
<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>