<aside class="col-lg-3">
                            <div class="sidebar sidebar-product">
                                <div class="widget widget-products">
                                    <h4 class="widget-title">Related Product</h4><!-- End .widget-title -->

                                    <div class="products">

                                    <?php
                            include 'config.php';
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($con,$sql) or die("Failed");
                            $counter = 0;
                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {
                                $counter = $counter + 1;
                                
                                if ($counter==5){
                                break;
                            }
                                ?>
                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="category.php">
                                                    <img src="admin_area/product_images/<?php echo $output['product_img1']?>" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="category.php"><?php echo $output['product_title']?></a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$<?php echo $output['product_price']?></span>
                                                    <span class="old-price">$<?php echo $output['product_price'] + 90?></span>
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->



                                        <?php

}}
?>
                                    </div><!-- End .products -->

                                    <a href="category.php" class="btn btn-outline-dark-3"><span>View More Products</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .widget widget-products -->

                            
                            </div><!-- End .sidebar sidebar-product -->
                        </aside><!-- End .col-lg-3 -->