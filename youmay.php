<h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
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
                            $counter = 0;
                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {
                                $counter = $counter + 1;
                                
                                if ($counter==5){
                                break;
                            }
                                ?>
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new"><?php 
                                        
                                        if($output['product_id']%2==0){
                                            echo "NEW";
                                        }
                                        else{
                                            echo "HOT";
                                        }
                                        
                                        ?></span>
                                        <a href="category.php">
                                            <img src="admin_area/product_images/<?php echo $output['product_img1']?>" alt="Product image" class="product-image">
                                        </a>

                                       

                                     
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        
                                        <h3 class="product-title"><a href="category.php"><?php echo $output['product_title']?></a></h3><!-- End .product-title -->
                                       
                                      
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <?php

}}
?>


                            </div><!-- End .owl-carousel -->