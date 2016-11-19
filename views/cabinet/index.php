<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>

        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <?php if($user['is_admin'] === "1"): ?>
                                    <?php header('Location: /admin'); ?>
                                <?php else: ?>
                                     <h1>Кабинет пользователя</h1>
                                    <h3>Привет, <?php echo $user['name'];?> !</h3>   
                                    <li><a href="/cabinet/edit">Редактировать данные</a></li>
                                    <!-- <li><a href="/contact/">Написать письмо</a></li> -->
                                <?php endif ;?>
                            </ul>
                        </div>                  
                </div>
            </div>
        </div>   
            
<?php include_once(__DIR__ . '/../layouts/footer_site.inc.php'); ?>