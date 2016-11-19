<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                            <div class="card col-md-6 col-md-offset-3">
                                <form role="form" action="#" method="post">

                                        <?php if(isset($errors) && is_array($errors)): ?>
                                            <ul>
                                        <?php foreach ($errors as $error): ?> 
                                                <li><p class="bg-danger"> - <?php echo $error; ?></p></li>
                                        <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><strong>Email</strong></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value="<?php echo $email ;?>" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><strong>Пароль</strong></label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $password ;?>" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="ok">Войти</button>
                                    </div>
                                </form>
                            </div>                
                </div>
            </div>
        </div>    
                
        
        
        <?php include_once(__DIR__ . '/../layouts/footer_site.inc.php'); ?>