<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>
              <!--______________ content______________  -->     
                     
        <div class="content">
            <div class="container-fluid">
            <?php foreach ($categoryProducts as $product): ?>
                <?php $main_image = json_decode($product['image']); ?>
                <div class="row card">
                        <div class="col-lg-5 col-md-6">
                                   <img src="/template/img/<?php echo $main_image[0];?>.jpg" class="img-responsive" alt="pictire"/>
                        </div>
                        
                        <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="header">
                                    <h4 class="title"><?php echo $product['name'];?></h4>
                                    <hr>
                                </div>
                                <div class="content">
                                        <p class="category"><?php echo $product['short_description'];?></p>
                                <div class="footer col-md-3 col-md-push-9">
                                    <?php $total = round(
                                        ($product['price']*$settings['price_mod'])/10)*10;
                                    echo $total;
                                     ?>&nbsp;&nbsp; ГРН.
                                </div>      
                                    <div class="footer">
                                        <div class="legend">
                                            <a href="/product/<?php echo $product['id']; ?>">Подробнее>></a>
                                        </div>                          
                                    </div>
                                </div>
                        </div>          
                </div>
            <?php endforeach; ?>     
            </div>        
        </div> 
        
        
      <?php include_once(__DIR__ . '/../layouts/footer_site.inc.php'); ?>