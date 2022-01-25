<br><div class="container">
                <div class="heading heading-center mb-3">

                <main class="main">
                <h2 class="title text-center mb-3" ><b>Certificates
</b></h2><!-- End .title text-center -->
            <div class="page-content">
                <div class="container">
        			<div class="toolbox">
        				
                        <div class="toolbox-center">
                            <div class="toolbox-info">



                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-center -->

        				
        			</div><!-- End .toolbox -->

                    <div class="products">
                        <div class="row">
                             <?php
                             include 'config.php';
                            $sql = "SELECT * FROM certificate";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {?>
                            <div class="col-6 col-md-6 col-lg-6 col-xl-6" style="height: 100%;">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product-detail.php?id=<?php echo $output['id']?>">
                                            <img src="<?php echo "admin_area/product_images/".$output['image']?>" alt="Product image" class="product-image">
                                        </a>

                                       
                                    </figure><!-- End .product-media -->

                                   
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
<?php

                            }
                        }

?>
                        </div><!-- End .row -->

                    </div><!-- End .products -->

                    
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

                        </div><!-- End .owl-carousel -->
                        <div class="more-container text-center">
                    <a href="allcertificate.php" class="btn btn-outline-darker btn-more"><span>View Details</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->  
                        
                    </div><!-- .End .tab-pane -->
                 
                </div><!-- End .tab-content -->
            </div><!-- End .container -->