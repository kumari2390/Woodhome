<?php 
require_once("classes/dbo.class.php");
?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:56:19 GMT -->

<?php include("includes/head.php"); ?>

<body>

     <?php include("includes/header.php"); ?> 


		 
		 
  <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                   <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Hot Deals</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->


		

    <!--Featured Area Start-->
    <div class="featured-area section-padding">
        <div class="container">
            <div class="row">
			    <?php
                  $sel_sp_deals = "SELECT quantity, product_id, image, short_title, offer_price, price FROM products WHERE status = ? AND special_deal = ? ORDER BY product_id DESC";
                  $all_sp_datas = $db->get($sel_sp_deals, array(1, 1));
                  ?>
			
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
											<img src="img/featured/1.jpg" alt="">
										</a>
                                </div>
                                <span class="new-label">New</span>
                                <!--Product Action-->
                                <div class="product-action">
                                    <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="combo.php" title="Add to Wishlist"><i class="fa fa-star"></i>
										</a>
                                    <a href="#" title="Add to Compare"><i class="fa fa-files-o"  style="color:gray"></i>
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
                                    <i class="fa fa-star"></i>
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
											<img src="img/featured/2.jpg" alt="">
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
                                <h5><a href="product-details.php" title="Printed Summer Dress">Showcase Units</a></h5>
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
											<img src="img/featured/3.jpg" alt="">
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
                                    <a href="product-details.php" title="Printed Dress">
											<img src="img/featured/8.jpg" alt="">
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
    <!--Featured Area End-->





   

    
<?php include("includes/footer.php"); ?>

<!--Modal-->
<div class="modal notify-modal fade in" id="notify-modal" role="dialog" >
  <form method="post" action="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h5 class="modal-title">Notify On Stock Availability</h5></div>
            <div class="modal-body">
                <p>Notify me on</p>
                <div role="form">
                    <div class="radio">
                        <label><input type="radio" name="notifyMe" value="1" checked="checked">Email</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="notifyMe" value="2">Mobile</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="notifyMe" value="3">Both</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="notify_product_id" id="notify_product_id" value="" />
            <div class="modal-footer">
                <button type="Submit" name="btnNotify" class="btn btn-default yellow-btn">NOTIFY ME</button>
                <button type="button" class="btn btn-default gray-btn" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
  </form>
</div>
<?php include("includes/scripts.php"); ?>
</body>

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:57:30 GMT -->

</html>