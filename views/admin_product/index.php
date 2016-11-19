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
                <div class="col-xs-7 col-md-7">
                    <ol>
                        <li class="active">Управление товарами</li>
                    
                    <h5><a href="/admin/product/create"><i class="fa fa-plus"></i>Добавить товар</a></h5>
                <h4>Список товаров</h4>
                <br/>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID товара</th>
                            <th>Позиция товара в списке</th>
                            <th>Название</th>
                            <th>Состояние на главной</th>
                            <th>Статус</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($productsList as $product): ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><form action="#" method="post"><input type="number" name="list_item" value="<?php echo $product['list']; ?>">
                            <input type="hidden" name="id_item" value="<?php echo $product['id']; ?>">
                            <input type="submit" name="list" value="Ok">
                            </form></td>
                            <td><?php echo $product['name']; ?></td>
                            <td>
                                <form action="#" method="post">
                                    <?php if($product['availablity']):?>
                                    <input type="hidden" name="id_item" value="<?php echo $product['id']; ?>">
                                    <input type="hidden" name="main_status" value="0">
                                    <input class="btn btn-warning" type="submit" name="main_list" value="Скрыть">
                                    <?php else:?>
                                        <input type="hidden" name="id_item" value="<?php echo $product['id']; ?>">
                                    <input type="hidden" name="main_status" value="1">
                                    <input class="btn btn-success" type="submit" name="main_list" value="Отображать">
                                    <?php endif;?>
                                </form>
                            </td>
                            <td><?php if($product['availablity']):?>
                            <i class="fa fa-check"></i>
                                <?php else: ?>
                            <i class="fa fa-times"></i></td>
                             <?php endif;?>
                            <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                 <br/>
                    <li class="active">Редактирование товаров в категориях</li>
                    <br/>
                    <p>Категория</p>
                        <form role="form" action="#" method="post">
                            <select name="category_id">
                                <?php if(is_array($categoriesList)): ?>
                                    <?php foreach($categoriesList as $category) :?>
                                    <option value="<?php echo $category['id'];?>"<?php if(isset($productsList_in_category) && $productsList_in_category[0]['category_id'] == $category['id']) echo "selected" ;?>>
                                        <?php echo $category['name']; ?>
                                    </option> 
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                            <input type="submit" name="submit" value="Ok">
                        </form>

                          <!--   <select onchange="getCategoryList(this.value)">
                                <?php if(is_array($categoriesList)): ?>
                                    <?php foreach($categoriesList as $category) :?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option> 
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>

                        <br/><br/>
                         -->
                        <!-- товары по категориям    -->

                        <?php if(isset($productsList_in_category)):?>
                            <h4>Товары в категории</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID товара</th>
                                    <th>Позиция товара в списке по категориям</th>
                                    <th>Название</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="categoryList">
                                <?php foreach($productsList_in_category as $product_in_category): ?>
                                <tr>
                                    <td><?php echo $product_in_category['id']; ?></td>
                                    <!-- <td><form action="#" method="post">
                                            <input type="number" name="code" value="<?php echo $product_in_category['code']; ?>">
                                            <input type="hidden" name="id_item" value="<?php echo $product_in_category['id']; ?>">
                                            <input type="submit" name="listInCategory" value="Ok">
                                        </form></td> -->

                                <td>
                                    <input onchange="numberPosition(this.value)" type="number" value="<?php echo $product_in_category['code']; ?>">
                                    <input id="getIdCategory" type="hidden" name="id_item" value="<?php echo $product_in_category['id']; ?>">
                                    <input id="getIdCategoryOfItem" type="hidden" name="id_category_of_item" value="<?php echo $product_in_category['category_id']; ?>"></td>
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php endif;?>
                    </ol>
                </div>
            </div>     
        </div> 
        <!-- <?php var_dump($productsList_in_category[0]['category_id']);?> -->
</div>
<script type="text/javascript">

    function numberPosition(position){
        var id = $("#getIdCategory").val();
        var id_category_of_item = $("#getIdCategoryOfItem").val();
        var str = "position="+position+"&id="+id+"&id_category_of_item="+id_category_of_item;
        $.ajax({
            url: "#",
            type: "POST",
            data: str,
            success: function(msg){
                $("#categoryList").html(msg);
            }
        })
    }

</script>
<!--<script type="text/javascript">
        $(document).ready(function(){
            
            demo.initChartist();
            
            $.notify({
            icon: 'pe-7s-attention',
            message: "На этой странице ведутся ремонтные работы, просьба статусы временно НЕ ИЗМЕНЯТЬ!!!"
                
            },{
                type: 'warning',
                timer: 3000
            });
            
        });
    </script>-->

</body>

<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>