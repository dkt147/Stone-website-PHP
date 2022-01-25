<div class="container">
                <div class="heading heading-center mb-6">
                    <h2 class="title">Recent Arrivals</h2><!-- End .title -->
<!-- 
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab" aria-controls="top-fur-tab" aria-selected="false">Top Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab" aria-controls="top-decor-tab" aria-selected="false">New Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab" aria-controls="top-light-tab" aria-selected="false">Lighting Fresh</a>
                        </li>
                    </ul> -->



                </div><!-- End .heading -->

                <div class="tab-content">
                    
              
                
                
                <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {?>  
                            <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-11 mt-v3 text-center">
                                        <figure class="product-media">
                                            <a href="product-detail.php?id=<?php echo $output['product_id']?>">
                                            <img src="admin_area/product_images/<?php echo $output['product_img1']?>" alt="Product image" class="product-image">
                                        <img src="admin_area/product_images/<?php echo $output['product_img2']?>" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="wishlist.php?p_id=<?php echo $output['product_id']?>&c_id=<?php echo $_SESSION['id']?>" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product-detail.php?id=<?php echo $output['product_id']?>"><?php echo $output['product_title']?></a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $<?php echo $output['product_price']?>
                                            </div><!-- End .product-price -->

                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="cart.php?p_id=<?php echo $output['product_id']?>&c_id=<?php echo $_SESSION['id']?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <?php

}}
?>
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->




                </div><!-- End .tab-content -->




                <!-- <div class="more-container text-center">
                    <a href="#" class="btn btn-outline-darker btn-more"><span>Load more products</span><i class="icon-long-arrow-down"></i></a>
                </div> -->
            </div><!-- End .container -->
