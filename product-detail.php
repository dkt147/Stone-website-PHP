<!DOCTYPE html>
<html lang="en">


<!-- molla/product-sidebar.html  22 Nov 2019 10:03:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TerraResources - Product Detail</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <div class="page-wrapper">
      <?php include 'header.php'?>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                    </ol>

                    
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="product-details-top">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="product-gallery">
                                        <?php
                            include 'config.php';
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                            }
                            $sql = "SELECT * FROM products where product_id=$id";
                            $result = mysqli_query($con,$sql) or die("Failed");

                            if (mysqli_num_rows($result) > 0) {

                            while (	$output = mysqli_fetch_assoc($result))
                            {?>
                                            <figure class="product-main-image">
                                              
                                                
                                                <img id="product-zoom" src="<?php echo "admin_area/product_images/".$output['product_img1']?>" data-zoom-image="<?php echo "admin_area/product_images/".$output['product_img1']?>" alt="product image">

                                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                    <i class="icon-arrows"></i>
                                                </a>
                                            </figure><!-- End .product-main-image -->

                                            <div id="product-zoom-gallery" class="product-image-gallery">
                                                <a class="product-gallery-item active" href="#" data-image="<?php echo "admin_area/product_images/".$output['product_img1']?>" data-zoom-image="<?php echo "admin_area/product_images/".$output['product_img1']?>">
                                                    <img src="<?php echo "admin_area/product_images/".$output['product_img1']?>" alt="product side">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="<?php echo "admin_area/product_images/".$output['product_img2']?>" data-zoom-image="<?php echo "admin_area/product_images/".$output['product_img2']?>">
                                                    <img src="<?php echo "admin_area/product_images/".$output['product_img2']?>" alt="product cross">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="<?php echo "admin_area/product_images/".$output['product_img3']?>" data-zoom-image="<?php echo "admin_area/product_images/".$output['product_img3']?>">
                                                    <img src="<?php echo "admin_area/product_images/".$output['product_img3']?>" alt="product with model">
                                                </a>
                                            </div><!-- End .product-image-gallery -->

                            
                                        </div><!-- End .product-gallery -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-4">
                                        <div class="product-details product-details-sidebar">
                                            <h1 class="product-title"><?php echo $output['product_title']?></h1><!-- End .product-title -->

                                         
                                           

                                            <div class="product-content">
                                                <p><?php echo $output['product_keywords']?></p>
                                            </div><!-- End .product-content -->

                                           

                                           

                                           

                                           
                                        </div><!-- End .product-details -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .product-details-top -->

                            <div class="product-details-tab">
                                <ul class="nav nav-pills justify-content-center" role="tablist">
                                  
                                   
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                        <div class="product-desc-content">
                                            <p><?php echo $output['product_desc']?></p><br>
                                            <h3><?php if(!$output['product_keywords']==""){
                                                echo "Uses";
                                                }?></h3>
                                            <p><?php echo $output['product_keywords']?></p><br> 
                                            <h3><?php if(!$output['product_keywords']==""){
                                                echo "Classification";
                                                }?></h3>
                                            <p><?php echo $output['product_label']?></p><br> 
                                            
                                            </div><!-- End .product-desc-content -->
                                    </div><!-- .End .tab-pane -->
                                    
                                   
                                </div><!-- End .tab-content --><br>
                                <div class="more-container text-center">
                    <a href="category.php" class="btn btn-outline-darker btn-more"><span>Explore All</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->  
                            </div><!-- End .product-details-tab -->
                            <?php
                            }
                        }
                        ?>
                        </div><!-- End .col-lg-9 -->

                    
                    </div><!-- End .row -->

                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php include 'footer.php'?>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/product-sidebar.html  22 Nov 2019 10:03:37 GMT -->
</html>