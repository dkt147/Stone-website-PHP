<br><div class="container">
                <div class="heading heading-center mb-3">

                <main class="main">
                <h2 class="title text-center mb-3" ><b>Featured Product
</b></h2><!-- End .title text-center -->
            <div class="page-content">
                <div class="container">
        			<div class="toolbox">
        				
                        <div class="toolbox-center">
                            <div class="toolbox-info">

                            <?php
                             include 'config.php';
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($con,$sql) or die("Failed");
                            	$output = mysqli_fetch_assoc($result);
                                $total = mysqli_num_rows($result);
                                $showing = mysqli_num_rows($result); 
                                ?>
                                Showing <span><?php echo $showing?> of <?php echo $total?></span> Products


                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-center -->

        				
        			</div><!-- End .toolbox -->

                    <div class="products">
                        <div class="row">
                             <?php
                             include 'config.php';
                            $sql = "SELECT * FROM products where cat_id=6";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {?>
                            <div class="col-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-new">Featured</span>
                                        <a href="product-detail.php?id=<?php echo $output['product_id']?>">
                                            <img src="<?php echo "admin_area/product_images/".$output['product_img1']?>" alt="Product image" class="product-image">
                                        </a>

                                       
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#"><?php echo "Variety: ".$output['product_url']?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-detail.php?id=<?php echo $output['product_id']?>"><?php echo "Name: ".$output['product_title']?></a></h3><!-- End .product-title -->
                                    
                                      
                                    </div><!-- End .product-body -->
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
                    <a href="category.php" class="btn btn-outline-darker btn-more"><span>Explore All</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->  
                        
                    </div><!-- .End .tab-pane -->
                 
                </div><!-- End .tab-content -->
            </div><!-- End .container -->