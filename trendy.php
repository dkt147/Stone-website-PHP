<br><div class="container">
                <div class="heading heading-center mb-3">

                        <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <blockquote class="testimonial text-center">
                            <h2 class="title text-center mb-3" ><b>Our Product
</b></h2><!-- End .title text-center -->
                                  
                            </blockquote><!-- End .testimonial -->
                            
                         
                </div>

                    <!-- <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trendy-all-link" data-toggle="tab" href="#trendy-all-tab" role="tab" aria-controls="trendy-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendy-fur-link" data-toggle="tab" href="#trendy-fur-tab" role="tab" aria-controls="trendy-fur-tab" aria-selected="false">Top Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendy-decor-link" data-toggle="tab" href="#trendy-decor-tab" role="tab" aria-controls="trendy-decor-tab" aria-selected="false">New Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendy-light-link" data-toggle="tab" href="#trendy-light-tab" role="tab" aria-controls="trendy-light-tab" aria-selected="false">Lighting Fresh</a>
                        </li>
                    </ul> -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>





                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {?>
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product-detail.php?id=<?php echo $output['product_id']?>">
                                        <img src="admin_area/product_images/<?php echo $output['product_img1']?>" alt="Product image" class="product-image">
                                        <img src="admin_area/product_images/<?php echo $output['product_img2']?>" alt="Product image" class="product-image-hover">
                                    </a>

                                   
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                <h3 class="product-title"><a href="product-detail.php?id=<?php echo $output['product_id']?>"><?php echo "Name: ".$output['product_title']?></a></h3><!-- End .product-title -->
                                   
                                </div><!-- End .product-body -->
                               
                            </div><!-- End .product -->



                            <?php

}}
?>


                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                 
                </div><!-- End .tab-content -->
            </div><!-- End .container -->