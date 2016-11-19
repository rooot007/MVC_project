<?php include_once(__DIR__ . '/../layouts/header_site.inc.php'); ?>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                <div class="row">
                        <div class="card">
                            <?php echo $settings['about'];?>
                        </div>                  
                </div>
            </div>
        </div>        
                
        
        
        <footer class="footer footer-fix">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Mail: id.kharkov.ua@gmail.com
                            </a>
                        </li>
                       <!--  <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 Created by UTP Corporation.
                </p>
            </div>
        </footer>
        
    </div>   
</div>


</body>
<?php include_once(__DIR__ . '/../layouts/footer.inc.php'); ?>