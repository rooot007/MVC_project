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
                           <a href="/admin/product">Назад  
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
                     <h4>Редактирование товара ID <?php echo $id;?></h4>
                <br/>
                    <div class="card">
                        <!-- <?php for($i=0, $c = count($images); $i<$c; $i++ ):?>
                           <img width="50px" src="/template/img/<?php echo $images[$i];?>.jpg" alt="picture">
                        <?php endfor;?> -->

                         <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                        <form id="uploadForm" method="post" action="upload.php">
                            <div id="gallery"></div><div style="clear: both;"></div><br/>

                            <div class="col-md-4" align="right">
                                <label>Upload Image</label>
                            </div>
                            <div class="col-md-4">
                                <input name="files[]" type="file" multiple />
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="Submit" />
                            </div>
                            <div style="clear: both"></div>
                            
                        </form>

                        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    </div>
                    <form role="form" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <p>Название товара</p>
                        <textarea class="form-control" type="text" name="name"><?php echo $product['name']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>Категория</p>
                        <select name="category_id">
                            <?php if(is_array($categoriesList)): ?>
                                <?php foreach($categoriesList as $category) :?>
                                <option value="<?php echo $category['id']; ?>"<?php if($category['id'] == $product['category_id']) echo "selected";?>>
                                    <?php echo $category['name']; ?>
                                </option> 
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        </div>
                        <div class="form-group">
                        <p>Загрузить изображение товара1</p>
                        <input type="file" name="image1" placeholder="" value="">
                        </div>
                        <div class="form-group">
                        <p>Загрузить изображение товара2</p>
                        <input type="file" name="image2" placeholder="" value="">
                        </div>
                        <div class="form-group">
                        <p>Загрузить изображение товара3</p>
                        <input type="file" name="image3" placeholder="" value="">
                        </div>
                        <div class="form-group">
                        <p>Загрузить изображение товара4</p>
                        <input type="file" name="image4" placeholder="" value="">
                        </div>
                        <div class="form-group">
                        <p>Kраткое описание</p>
                        <textarea class="form-control" name="short_description"><?php echo $product['short_description']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>Полное описание </p>
                        <textarea class="form-control" name="description"><?php echo $product['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                        <p>Цена товара</p>
                        <input class="form-control" type="number" step="any" name="price" placeholder="" value="<?php echo $product['price']; ?>">
                        </div>
                        <div class="form-group">
                        <p>Статус отображения</p>
                        <select name="status">
                        <?php if($product['status']):?>
                            <option value="1" selected>Отображено</option>
                            <option value="0">Скрыть</option>
                            <?php else: ?>
                           <option value="1">Отображать</option>
                           <option value="0" selected>Скрыт</option>
                            <?php endif;?>
                        </select>
                         </div>
                        <br/><br/>
                        <div class="col-md-3 col-md-offset-1">
                        <input type="submit" name="submit1" class="btn btn-warning btn-lg btn-block" value="Сохранить">
                        </div>
                        <br/><br/>
                             <!-- <?php if($product['availablity']):?>
                                    <button class="btn btn-warning" type="button" name="status" value="0">Скрыть</button>
                                    <?php else:?>
                                    <button class="btn btn-success" type="button" name="status" value="1">Отображать</button>
                                    <?php endif;?> -->
                    </form>
                </div>    
            </div>     
        </div> 
</div>

<script>
    $(document).ready(function(){
        $('#uploadForm').on('submit', function(e){

            e.preventDefault();

            $.ajax({
                url: 'upload.php',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $("#gallery").html(data);
                    alert("Image Uploaded");
                }
            });
        });
    });
</script>


</body>

<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>