
<?php 
require_once("classes/dbo.class.php");
$usr_cnt = 0;
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) $usr_cnt = 1;
?>

<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:56:19 GMT -->
<?php include("includes/head.php"); ?>


<body>

  <?php include("includes/header.php"); ?> 



    <!--Slider Area Start-->
    <div class="slider-area">
        <div class="slider-area">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <a href="#"><img src="img/slider/1.png" alt=""/></a>
                    <a href="#"> <img src="img/slider/2.jpg" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
    <!--Slider Area End-->
	 

    <!--Service Area Start-->
    <div class="service-area section-padding">
        <div class="container">
            <div class="row mb-n20">

                <div class="col-md-4 col-12 mb-20">
                    <div class="service">
                        <!--<i class="pe-7s-download"></i>-->
                        <h4>Quality</h4>
                        <p>100% You Can Trust</p>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-20">
                    <div class="service">
                        <!--<i class="pe-7s-refresh-2"></i>-->
                        <h4>Free Shipping</h4>
                        <p>Shipping on orders over ₹10000</p>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-20">
                    <div class="service">
                        <!--<i class="pe-7s-chat"></i>-->
                        <h4>Factory to Door Step</h4>
                        <p>Wide Range of Furnitures</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Service Area End-->

    <!--Featured Area Start-->
    <div class="featured-area section-padding">
        <div class="container">

            <div class="section-title title-shape text-center">
                <h4 class="title">EXPLORE OUR FURNITURE RANGE</h4>
            </div>

            <div class="row">
                <!--Product Slider Start-->
                <div class="product-slider indicator-style">
				    <?php 
                  $newq = "SELECT product_id as id,product_code as code,short_title as title,price,offer_price, shipping_price, image, feature_type FROM products WHERE status=1 ORDER BY product_id DESC LIMIT 0, 8";
                  $newres = $db->get($newq);
                  //print_r($newres);die;
                  foreach($newres as $newrow){
                ?>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php?product=<?php echo base64_encode($newrow['id']); ?>" title="Printed Dress">
											<img src="uploads/<?php echo $newrow['image'] ?>" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"  style="color:gray"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php?product=<?php echo base64_encode($newrow['id']); ?>" title="Printed Dress"><?php echo $newrow['title'] ?></a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ <?php echo number_format($newrow['offer_price'], 2); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                 
					 <?php } ?>

                </div>
                <!--Product Slider End-->
            </div>
        </div>
    </div>
    <!--Featured Area End-->

    <!--Deal Area Start-->
    <div class="deal-area section-padding">
        <div class="container">

            <div class="section-title white title-shape text-center">
                <h4 class="title">Deal of the day</h4>
            </div>

            <div class="row">
			  
			 
                <div class="product-slider-2 indicator-button">
				  <?php 
                  $newq = "SELECT product_id as id,product_code as code,short_title as title,price,offer_price, shipping_price, image, feature_type FROM products WHERE status=1 ORDER BY product_id DESC LIMIT 14,20 ";
                  $newres = $db->get($newq);
                  //print_r($newres);die;
                  foreach($newres as $newrow){
                ?>

                    <!--Deal Single Product -->
                    <div class="deal-single-product">
                        <div class="row">
				      <div class="col-md-6 col-12">
                                <div class="left-item">
                                    <!--Product Image-->
                                    <a href="product-details.php?product=<?php echo base64_encode($newrow['id']); ?>" title="Printed Summer Dress">
											<img src="uploads/<?php echo $newrow['image'] ?>" alt="">
										</a>
                                    <span class="new-label">New</span>
                                    <span class="sale-label">Sale!</span>
                                    <!--Product Cuntdown-->
                                    <div class="product-cuntdown">
                                        <div class="timer">
                                            <div data-countdown="2021/06/01"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-product-content col-md-6 col-12">
                                <h5><a href="product-details.php?product=<?php echo base64_encode($newrow['id']); ?>" title="Printed Dress"><?php echo $newrow['title'] ?></a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <p style="font-size: 30px;">Shop Now</p>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ <?php echo number_format($newrow['offer_price'], 2); ?></span>
                          
                                </div><br><br>
                                <!--Product Action-->
                                <div class="deal-product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
						
                    </div>


       

               <?php } ?>

                </div>
				 
            </div>
        </div>
    </div>
    <!--Deal Area End-->
	
	
	
	
	

    <!--New products Area Start-->
    <div class="new-product-area section-padding">
        <div class="container">

            <div class="section-title title-shape text-center">
                <h4 class="title">NEW ARRIVALS</h4>
            </div>

            <div class="row">
                <!--Product Slider Start-->
                <div class="product-slider indicator-style">

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Dress">
											<img src="img/featured/NewArrival/1.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Dress">Wooden Flooring</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 61.19</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Dress">
											<img src="img/featured/NewArrival/2.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Dress">Showcase Units</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 61.19</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Summer Dress">
											<img src="img/featured/NewArrival/3.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <span class="sale-label">Sale!</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Summer Dress">Pooja Room doors-with Teak</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 34.78</span>
                                    <span class="old-price">₹ 36.61</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Summer Dress">
											<img src="img/featured/NewArrival/4.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Summer Dress">Sofas</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 36.60</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Chiffon Dress">
											<img src="img/featured/NewArrival/5.jpeg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Chiffon Dress">Leather Sofas</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 21.65</span>
                                    <span class="old-price">₹ 24.60</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Dress">
											<img src="img/featured/NewArrival/6.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Dress">Single Seater Sofas</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 31.20</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Dress">
											<img src="img/featured/NewArrival/7.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Dress">Home Appliances</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 31.20</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Single Product -->
                    <div class="col-12">
                        <div class="single-product">
                            <!--product Content-->
                            <div class="product-img-content">
                                <!--Product Image-->
                                <div class="product-img">
                                    <a href="product-details.php" title="Printed Dress">
											<img src="img/featured/NewArrival/8.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
										</a>
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="product-details.php" title="Printed Dress">living room furniture</a></h5>
                                <!--Product Rating-->
                                <div class="rating-icon">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
                                </div>
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="new-price">₹ 31.20</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Product Slider End-->
            </div>
        </div>
    </div>
    <!--New products Area End-->

    <!--Banner Area Start-->
    <div class="banner-area section-padding pt-0">
        <div class="container">
            <div class="row mb-n30">
                <div class="col-md-4 col-12 mb-30">
                    <div class="banner-image mb-30">
                        <a href="#">
								<img src="img/banner/1.jpg" alt="">
							</a>
                    </div>
                    <div class="banner-image">
                        <a href="#">
								<img src="img/banner/2.jpeg" alt="">
							</a>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-30">
                    <div class="banner-image">
                        <a href="#">
								<img src="img/banner/3.jpg" alt="">
							</a>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-30">
                    <div class="banner-image">
                        <a href="#">
								<img src="img/banner/4.jpg" alt="">
							</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner Area End-->

    <!--Category Product Area Start-->
    <div class="category-product section-padding pt-0">
        <div class="container">
            <div class="row mb-n30">

                <div class="col-md-4 col-12 mb-30">
                    <div class="block-title">
                        <h5 class="title">Modular Kitchens</h5>
                    </div>
                    <div class="product-slider-3">
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Faded Short Sleeves T-shirt">
                                                <img src="img/ModularKitchens/Modular-Kitchen/1.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Faded Short Sleeves T-shirt">Modular Kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Blouse">
                                                <img src="img/ModularKitchens/Modular-Kitchen/2.png" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Blouse">Modular Kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/ModularKitchens/Modular-Kitchen/3.png" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">Modular Kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/ModularKitchens/Modular-Kitchen/4.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">Modular Kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price">₹ 173,555.00</span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/ModularKitchens/Modular-Kitchen/5.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">Modular Kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 109,000.00 </span>
                                            <span class="old-price">₹ 175,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/ModularKitchens/Straight-kitchen/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">Straight kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 69,000.00 </span>
                                            <span class="old-price">₹ 150,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                        </div>
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Chiffon Dress">
                                                <img src="img/ModularKitchens/Straight-kitchen/2.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Chiffon Dress">Straight kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/ModularKitchens/Straight-kitchen/3.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">Straight kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 20.00 </span>
                                            <span class="old-price">₹ 100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/ModularKitchens/L-Shaped-Kitchen/1.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">L Shaped Kitchen</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 109,000.00 </span>
                                            <span class="old-price">₹ 175,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-30">
                    <div class="block-title">
                        <h5 class="title">Dressing Units</h5>
                    </div>
                    <div class="product-slider-3">
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Faded Short Sleeves T-shirt">
                                                <img src="img/DressingUnits/Crystaldressingtable/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Faded Short Sleeves T-shirt">Crystal dressing table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 20.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Blouse">
                                                <img src="img/DressingUnits/Crystaldressingtable/2.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Blouse">Crystal dressing table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/DressingUnits/Crystaldressingtable/3.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">Crystal dressing table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/DressingUnits/ninadressingtable/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">nina-dressing-table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/DressingUnits/ninadressingtable/2.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">nina-dressing-table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/DressingUnits/amatodressingtable/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">amato-dressing-table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                        </div>
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Chiffon Dress">
                                                <img src="img/DressingUnits/amatodressingtable/2.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Chiffon Dress">amato-dressing-table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/DressingUnits/woodwaysolidwooddressingtable/1.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">woodway-solid-wood-dressing-table</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/DressingUnits/elementdressingtableinwhite/1.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">element-dressing-table-in-white</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-30">
                    <div class="block-title">
                        <h5 class="title">Wooden Flooring</h5>
                    </div>
                    <div class="product-slider-3">
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Faded Short Sleeves T-shirt">
                                                <img src="img/WoodenFlooring/Laminatedwoodenflooring/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Faded Short Sleeves T-shirt">Laminated wooden flooring</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 20.00 </span>
                                            <span class="old-price">₹ 100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Blouse">
                                                <img src="img/WoodenFlooring/Laminatedwoodenflooring/2.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Blouse">Laminated wooden flooring</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 20.00 </span>
                                            <span class="old-price">₹ 100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/WoodenFlooring/Laminatedwoodenflooring/3.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">Laminated wooden flooring</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 20.00</span>
                                            <span class="old-price">₹ 100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/WoodenFlooring/Woodenfloor/1.jpeg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">Wooden floor</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/WoodenFlooring/Solidwoodenfloor/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">Solid wooden floor</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 20.00 </span>
                                            <span class="old-price">₹ 100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/WoodenFlooring/Solidwoodenfloor/2.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">Solid wooden floor</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 20.00 </span>
                                            <span class="old-price">₹ 5.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                        </div>
                        <div class="single-p-item mb-n25">
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Chiffon Dress">
                                                <img src="img/WoodenFlooring/Woodenflooringservice/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Chiffon Dress">Wooden flooring service</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Dress">
                                                <img src="img/WoodenFlooring/Solutiawoodenflooring/1.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Dress">Solutia wooden flooring</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product row mb-3">
                                <div class="col-lg-4 col-md-12 col-4 mb-2">
                                    <div class="product-img">
                                        <a href="product-details.php" title="Printed Summer Dress">
                                                <img src="img/WoodenFlooring/Solutiawoodenflooring/2.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-8 mb-2">
                                    <div class="product-content d-flex flex-column">
                                        <h5><a href="product-details.php" title="Printed Summer Dress">Solutia wooden flooring</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price"> ₹ 173,555.00 </span>
                                            <span class="old-price">₹ 200,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Category Product Area End-->

   

    <!--Blog Area Start-->
    <div class="blog-area section-padding">
        <div class="container">

            <div class="section-title title-shape text-center">
                <h4 class="title">Top Selling</h4>
                <h5>----Bring Something extra special to your beautiful homes---</h5>
            </div>


            <div class="row">
                <div class="blog-slider indicator-style">

                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/1.jpeg" alt="">
                                    </a>


                            </div>


                             <div class="content">
                                    <h5 class="title"><a href="product-details.php"> Modular Cupboards with lofts </a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                   <!-- <div class="desc">
                                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                    </div>-->
                                </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/2.jpeg" alt="">
                                    </a>

                            </div>
                            <div class="content">
                                    <h5 class="title"><a href="product-details.php">Modular Kitchens</a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                    <!--<div class="desc">
                                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                    </div>-->
                                </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/3.jpg" alt="">
                             
                                </div>
								
						
                                <div class="content">
                                    <h5 class="title"><a href="product-details.php">walk-In Wardrobes</a></h5>
                                <span class="date">2015-12-28 04:28:04</span>
                                <!--<div class="desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/4.jpeg" alt="">
								
                                    </a>
                            </div>
                           <div class="content">
                                    <h5 class="title"><a href="product-details.php">Dressing Units</a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                    <!--<div class="desc">
                                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                    </div>-->
                                </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/5.jpg" alt="">
										
                                    </a>
                            </div>
                            <div class="content">
                                    <h5 class="title"><a href="product-details.php">Designer Cots with Lamp Tables</a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                    <!--<div class="desc">
                                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                    </div>-->
                                </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/6.jpg" alt="">
										
                                    </a>
                            </div>
                            <div class="content">
                                    <h5 class="title"><a href="product-details.php">Entertainment / TV Units</a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                    <!--<div class="desc">
                                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                    </div>-->
                                </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/7.jpg" alt="">
										
                                    </a>
                            </div>
                            <div class="content">
                                    <h5 class="title"><a href="product-details.php">Crockery Units</a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                    <!--<div class="desc">
                                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                    </div>-->
                                </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/8.jpg" alt="">
										
                                    </a>
                            </div>
                            <div class="content">
                                    <h5 class="title"><a href="product-details.php">Chest of Drawers</a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                   <!--<div class="desc">
                                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                    </div>-->
                                </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="blog">
                            <div class="image">
                                <a href="product-details.php">
                                        <img src="img/blog/9.jpg" alt="">
										
                                    </a>
                            </div>
                            <div class="content">
                                    <h5 class="title"><a href="product-details.php">Study Table with Book Shelfs</a></h5>
                                    <span class="date">2015-12-28 04:28:04</span>
                                   
                                </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>




    <!--Blog Area End-->

<?php include("includes/footer.php");
include("includes/scripts.php"); 
?>
<script type="text/javascript">
function goto_login()
{
  alert("Please Logged in then add to cart make it...");
  window.location = "sign-in.php";
}
function add_wishlist(pid)
{
  var datas = "action=add&product="+btoa(pid);
  //alert(datas);
  $.ajax({
      type: "POST",
      url: "add_to_wishlist.php",
      data:datas,
      success: function(data){
          alert(data);
          //window.location = "";
      }
  });
}
</script>
  
</body>

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:57:30 GMT -->

</html>