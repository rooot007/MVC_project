<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                        <div class="col-md-12">
                            <div class="card col-md-6 col-md-offset-3">
                                <form role="form" action="#" method="post">
                                <?php if($result): ?>
                            <p class="bg-success">Вы зарегистрированы !</p>
                         <?php else: ?>   
                        <?php if(isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $errors): ?>
                                    <li><p class="bg-danger"> - <?php echo $errors; ?></p></li>
                                <?php endforeach; ?>    
                            </ul>
                        <?php endif; ?>
                                <div class="form-group">
                                        <label><strong>Name</strong></label>
                                        <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo $name; ?>">
                                    </div>
                                  <div class="form-group">
                                        <label for="exampleInputEmail1"><strong>Email</strong></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><strong>Пароль</strong></label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password1" value="<?php echo $password1; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2"><strong>Подтвердить пароль</strong></label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password2" value="<?php echo $password2; ?>">
                                    </div>
                                    <div class="form-group col-md-6 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="ok">Зарегистрироваться</button>
                                  </div>
                                </form>
                            </div>
                         <?php endif; ?>   
                        </div>                 
                </div>
            </div>
        </div>        
                
        
        
<?php include_once(__DIR__ . '/../layouts/footer_site.inc.php'); ?>