<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                        <div class="container-fluid">
                           <?php if($result): ?>
                            <p class="bg-success">Сообщение отправлено! Ответ прийдет на вашу почту!</p>
                            <? else:?>
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>    
                                </ul>
                            <?php endif; ?>
                            <div class="singup-form card col-lg-6 col-md-8">
                                <h2>Обратная связь</h2>
                                <h5>Возник вопрос? Напишите нам</h5>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><strong> Ваш еmail</strong></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" name="userEmail" value="<?php echo $userEmail; ?>">
                                    </div>
                                    <div class="form-group">
                                        <strong>Сообщение</strong>
                                        <input type="text" class="form-control" name="userText" value="<?php echo $userText ;?>" placeholder="Сообщение">
                                    </div>
                                    <div class="form-group col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="ok">Отправить</button>
                                    </div>
                                </form>
                            </div>
                            <?php endif; ?>  
                        </div>                  
                </div>
            </div>
        </div>   
                
        
        
 <?php include_once(__DIR__ . '/../layouts/footer_site.inc.php'); ?>