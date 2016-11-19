<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>

        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                        <div class="col-md-6">
                           <?php if($result): ?>
                            <p>Данные изменены!</p>
                            <? else:?>
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>    
                                </ul>
                            <?php endif; ?>
                            <div class="singup-form card container-fluid">
                                <h2>Редактирование данных</h2>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <strong>Name</strong>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="<?php echo $name ;?>" placeholder="Имя">
                                    </div>
                                    <div class="form-group">
                                        <strong>Password</strong>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $password ;?>" placeholder="Пароль">
                                    </div>
                                    <div class="form-group col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="ok">Сохранить</button>
                                    </div>
                                </form>
                            </div>
                            <?php endif; ?>     
                        </div>                  
                </div>
            </div>
        </div>   
              
<?php include_once(__DIR__ . '/../layouts/footer_site.inc.php'); ?>