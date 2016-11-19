<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row card">
                        <div class="col-lg-5 col-md-6">
                                <div class="header">
                                </div>
                                <div class="content">                                
                                    <div class="row card">
                                        <div class="bs-docs-section">
                                            <div class="bs-example center-block">

                                            <!--////////////////     carusel      //////////////////       -->

                                                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                  <!-- Indicators -->
                                                  <ol class="carousel-indicators">
                                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                    <?php for ($i=1, $k = count($image); $i <= $k; $i++): ?>
                                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"></li>
                                                     <?php endfor; ?>
                                                  </ol>

                                                  <!-- Wrapper for slides -->
                                                  <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="/template/img/<?php echo $image_0; ?>.jpg"><img src="/template/img/<?php echo $image_0; ?>.jpg" alt="slide"></a>
                                                      <div class="carousel-caption">
                                                      </div>
                                                    </div>
                                                     <?php foreach ($image as $picture): ?>
                                                    <div class="item">
                                                      <a href="/template/img/<?php echo $picture; ?>.jpg"><img src="/template/img/<?php echo $picture; ?>.jpg" alt=""></a>
                                                      <div class="carousel-caption">
                                                      </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                  </div>

                                                  <!-- Controls -->
                                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                  </a>
                                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                  </a>
                                                </div>         
                                                <!--///////////////////////////////////////////////-->

                                            </div>
                                        </div>
                                    </div>  
                                </div>
                        </div>
                        
                        <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="header">
                                <h4 class="title"><?php echo $product['name'] ;?></h4>
                                    <hr>
                                </div>
                                <div class="content">
                                    <?php echo nl2br($product['description']); ?>

                                </div>
                                <div class="footer col-md-3 col-md-push-9">
                                   <?php $total = round(
                                        ($product['price']*$settings['price_mod'])/10)*10;
                                    echo $total;

                                     ?>&nbsp;&nbsp; ГРН.
                                </div>
                        </div>                  
                    </div>
            </div>     
        </div>             
                
                    
        
       <?php include_once(__DIR__ . '/../layouts/footer_site.inc.php'); ?>