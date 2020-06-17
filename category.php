
<?php 
require_once("classes/dbo.class.php");
$usr_cnt = 0;
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) $usr_cnt = 1;
if(isset($_REQUEST['btnNotify']))
{
  //print_r($_REQUEST);die;
  $user_id = $_SESSION['user_id'];
  $notifyMe = $_REQUEST['notifyMe'];
  $product_id = $_REQUEST['notify_product_id'];
  $sel_notify = "SELECT COUNT(*) FROM notify_products WHERE user_id = ? AND product_id = ?";
  $notify_count = $db->count($sel_notify, array($user_id, $product_id));
  if($notify_count == 0)
  {
    $cr_date = date('Y-m-d H:i:s');
    $ins_notify = "INSERT INTO notify_products (user_id, product_id, notifyMe, created_date, status) VALUES (?, ?, ?, ?, ?)";
    $notify = $db->dml($ins_notify, array($user_id, $product_id, $notifyMe, $cr_date, 0));
    echo '<script>alert("You will Notify Shortly");window.location = "";</script>';
  }
  else
  {
    echo '<script>alert("Already You added");window.location = "";</script>';
  }
}
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:58:35 GMT -->
<?php include("includes/head.php"); ?>
    <body>
       
         <?php include("includes/header.php"); ?> 


       
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="shop.php">Categories</a></li>
                    <li class="active">Furniture</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
        
        <!-- All Product Side Bar Area Start -->
        <div class="section-padding-sm">
            <div class="container">
			
                <div class="row mb-n30">
                    
                    <div class="col-lg-9 col-12 order-lg-2 mb-30">
                    
						<div class="page-category-banner mb-30"><img src="img/slider/1.png" alt="" /></div>
						
                        <!--Shop Toolbar Start-->
						<div class="shop-toolbar">
                               
                            <!-- Nav tabs -->
                            <ul class="shop-tab-list nav">
                                <li><a href="#grid" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                <li><a href="#list" data-toggle="tab" class="active"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                                
                            <!--Shop Filters-->
                            <div class="shop-filters">
                                <div class="filter">
                                    <label>Sort by</label>
                                    <select>
                                        <option selected="selected">By Latest</option>
                                        <option>Price: Lowest first</option>
                                        <option>Price: Highest first</option>
                                        <option>Product Name: A to Z</option>
                                        <option>Product Name: Z to A</option>
                                        <option>In stock</option>
                                        <option>Reference: Lowest first</option>
                                        <option>Reference: Highest first</option>
                                    </select>
                                </div>
                                <div class="filter">
                                    <label>Show</label>
                                    <select>
                                        <option selected="selected">6</option>
										<option>12</option>
										<option>18</option>
										<option>24</option>
										<option>30</option>
                                    </select>
                                </div>
                            </div>
                            
						</div><!--Shop Toolbar End-->
                        
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane" id="grid">
								<div class="row mb-n30">
									<div class="col-md-4 col-12 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="product-details.html" title="Printed Dress">
														<img src="img/featured/1.jpg" alt="">
													</a>                                            
												</div>
												<span class="new-label">New</span>
												<!--Product Action-->
												<div class="product-action">
													<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
													<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
													</a>
													<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
													</a>
													<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
												</div>
											</div>
											<div class="product-content">
												<h5><a href="product-details.html" title="Printed Dress">Modular Cupboards with lofts												</a></h5>
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
													<span class="new-price">£ 61.19</span>
												</div>
											</div>
										</div>									
									</div>
									<div class="col-md-4 col-12 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="product-details.html" title="Printed Summer Dress">
														<img src="img/featured/2.jpg" alt="">
													</a>                                            
												</div>
												<span class="new-label">New</span>
												<span class="sale-label">Sale!</span>
												<!--Product Action-->
												<div class="product-action">
													<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
													<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
													</a>
													<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
													</a>
													<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
												</div>
											</div>
											<div class="product-content">
												<h5><a href="product-details.html" title="Printed Summer Dress">Slimline 3 Door M1 Steel Almirah												</a></h5>
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
													<span class="new-price">£ 34.78</span>
													<span class="old-price">£ 36.61</span>
												</div>
											</div>
										</div>								
									</div>
									<div class="col-md-4 col-12 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="product-details.html" title="Printed Summer Dress">
														<img src="img/featured/3.jpg" alt="">
													</a>                                            
												</div>
												<span class="new-label">New</span>
												<!--Product Action-->
												<div class="product-action">
													<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
													<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
													</a>
													<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
													</a>
													<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
												</div>
											</div>
											<div class="product-content">
												<h5><a href="product-details.html" title="Printed Summer Dress">Lewis Three Door Hinged Wardrobe</a></h5>
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
													<span class="new-price">£ 36.60</span>
												</div>
											</div>
										</div>								
									</div>
									<div class="col-md-4 col-12 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="product-details.html" title="Printed Chiffon Dress">
														<img src="img/featured/4.jpg" alt="">
													</a>                                            
												</div>
												<span class="new-label">New</span>
												<!--Product Action-->
												<div class="product-action">
													<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
													<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
													</a>
													<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
													</a>
													<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
												</div>
											</div>
											<div class="product-content">
												<h5><a href="product-details.html" title="Printed Chiffon Dress">Printed Chiffon </a></h5>
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
													<span class="new-price">£ 21.65</span>
													<span class="old-price">£ 24.60</span>
												</div>
											</div>
										</div>								
									</div>
									<div class="col-md-4 col-12 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="product-details.html" title="Printed Dress">
														<img src="img/featured/2.jpg" alt="">
													</a>                                            
												</div>
												<span class="new-label">New</span>
												<!--Product Action-->
												<div class="product-action">
													<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
													<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
													</a>
													<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
													</a>
													<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
												</div>
											</div>
											<div class="product-content">
												<h5><a href="product-details.html" title="Printed Dress">Lewis Three Door Hinged Wardrobe</a></h5>
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
													<span class="new-price">£ 31.20</span>
												</div>
											</div>
										</div>									
									</div>
									<div class="col-md-4 col-12 mb-30">
										<div class="single-product">
											<!--product Content-->
											<div class="product-img-content">
												<!--Product Image-->
												<div class="product-img">
													<a href="product-details.html" title="Blouse">
														<img src="img/featured/6.jpg" alt="">
													</a>                                            
												</div>
												<span class="new-label">New</span>
												<!--Product Action-->
												<div class="product-action">
													<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
													<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
													</a>
													<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
													</a>
													<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
												</div>
											</div>
											<div class="product-content">
												<!--Product Name-->
												<h5><a href="product-details.html" title="Blouse">Blouse</a></h5>
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
													<span class="new-price">£ 32.40</span>
												</div>
											</div>
										</div>								
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane active" id="list">
								<div class="row mb-n30">
									<div class="single-shop-product col-12 mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-12 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="product-details.html" title="Printed Summer Dress">
														<img src="img/featured/2.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-12 mb-20">
												<div class="deal-product-content ">
													<h5><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">£ 34.78</span>
														<span class="old-price">£ 36.61</span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													
													<div class="deal-product-action">
														<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
														<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
														</a>
														<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
														</a>
														<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
													</div>
												</div>
											</div>
										</div>											
									</div>
									<div class="single-shop-product col-12 mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-12 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="product-details.html" title="Blouse">
														<img src="img/featured/3.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-12 mb-20">
												<div class="deal-product-content ">
													<h5><a href="product-details.html" title="Blouse">Blouse</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">£ 32.40 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													
													<div class="deal-product-action">
														<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
														<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
														</a>
														<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
														</a>
														<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
													</div>
												</div>
											</div>
										</div>											
									</div>
									<div class="single-shop-product col-12 mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-12 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="product-details.html" title="Printed Dress">
														<img src="img/featured/4.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-12 mb-20">
												<div class="deal-product-content ">
													<h5><a href="product-details.html" title="Printed Dress">Printed Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">£ 32.20 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<!--Product Action-->
													
													<div class="deal-product-action">
														<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
														<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
														</a>
														<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
														</a>
														<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
													</div>
												</div>
											</div>
										</div>											
									</div>
									<div class="single-shop-product col-12 mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-12 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="product-details.html" title="Printed Summer Dress">
														<img src="img/featured/6.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-12 mb-20">
												<div class="deal-product-content ">
													<h5><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">£ 34.61 </span>
														<span class="old-price">£ 36.78 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
													</div>
													<!--Product Action-->
													
													<div class="deal-product-action">
														<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
														<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
														</a>
														<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
														</a>
														<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
													</div>
												</div>
											</div>
										</div>											
									</div>
									<div class="single-shop-product col-12 mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-12 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="product-details.html" title="Printed Summer Dress">
														<img src="img/featured/7.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-12 mb-20">
												<div class="deal-product-content ">
													<h5><a href="product-details.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">£ 36.60</span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
													</div>
													<!--Product Action-->
													
													<div class="deal-product-action">
														<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
														<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
														</a>
														<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
														</a>
														<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
													</div>
												</div>
											</div>
										</div>											
									</div>
									<div class="single-shop-product col-12 mb-30">
										<div class="row mb-n20">
											<div class="col-md-4 col-12 mb-20">
											   <div class="left-item">
													<!--Product Image-->
													<a href="product-details.html" title="Printed Summer Dress">
														<img src="img/featured/4.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="col-md-8 col-12 mb-20">
												<div class="deal-product-content ">
													<h5><a href="product-details.html" title="Printed Dress">Blouse</a></h5>
													<!--Product Price-->
													<div class="product-price">
														<span class="new-price">£ 32.40 </span>
													</div>
													<!--Product Rating-->
													<div class="rating-icon">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star" style="color:rgb(182, 179, 179)"></i>
													</div>
													<!--Product Action-->
													
													<div class="deal-product-action">
														<a href="cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
														<a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
														</a>
														<a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
														</a>
														<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
													</div>
												</div>
											</div>
										</div>											
									</div>
								</div>
							</div>
						</div>
                        
                   
                        
					</div>
                   
                    <!--Shop Sidebar Start-->
                    <div class="col-lg-3 col-12 mb-30">
                        
                        <!--Sidebar Wrap Start-->
                        <div class="sidebar-wrap border p-3">
                       
                            <!--Sidebar Area Title Start-->
                            <h5 class="sidebar-area-title">SHOP BY</h5><!--Sidebar Area Title End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar bg-light p-3">
                               
                                <h6 class="sidebar-title">Category filters:</h6>
                                
                                <ul class="sidebar-filters">
                                    <li>Showcase Units <a href="#" class="remove"><i class="fa fa-remove"></i></a></li>
									<li>Home Appliances <a href="#" class="remove"><i class="fa fa-remove"></i></a></li>
									<li>Wooden Flooring <a href="#" class="remove"><i class="fa fa-remove"></i></a></li>
									<li>Sofas <a href="#" class="remove"><i class="fa fa-remove"></i></a></li>
									<li>Daining tables  <a href="#" class="remove"><i class="fa fa-remove"></i></a></li>
									<li>Price: £ 36.09 - £ 61.00</li>
                                </ul>
                                
                            </div><!--Sidebar End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar">
                               
                                <h6 class="sidebar-title">Price</h6>
                                
                                <div class="sidebar-price">
                                    <span class="price-label">Range: <span class="price-amount"></span></span>
                                    <div class="price-range-wrap">
                                        <div id="price-range"></div>
                                    </div>
                                </div>
                                
                            </div><!--Sidebar End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar">
                               
                                <h6 class="sidebar-title">Primary Material</h6>
                                
                                <div class="sidebar-selects">
                                    <ul>
                                        <li><a href="#" class="active">Solid Wood</a></li>
                                        <li><a href="#">Metal</a></li>
                                        <li><a href="#">Softwoods</a></li>
                                    </ul>
                                </div>
                                
                            </div><!--Sidebar End-->
                            
                            <!--Sidebar Start-->
                            <div class="sidebar">
                               
                                <h6 class="sidebar-title">Brand</h6>
                                
                                <div class="sidebar-selects">
                                    <ul>
                                        <li><a href="#" class="active">Greenply</a></li>
                                        <li><a href="#">Ikea</a></li>
                                        <li><a href="#">Godrej Interio</a></li>
                                        <li><a href="#">Natflex</a></li>
                                       
                                    </ul>
                                </div>
                                
                            </div><!--Sidebar End-->
                            
                        </div><!--Sidebar Wrap End-->
                        
                        <div class="banner-image">
                            <a href="#"><img alt="" src="img/banner/28.jpg"></a>
							
                        </div>
						   
                        <div class="banner-image">
                            <a href="#"><img alt="" src="img/banner/28.jpg"></a>
                        </div>
						   
                        <div class="banner-image">
                            <a href="#"><img src="img/featured/4.jpg" alt="">
                        </div>
				
                        
                    </div><!--Shop Sidebar End-->
               
                </div>
            </div>
        </div>
        <!-- All Product Side Bar Area End -->
		

		
<?php include("includes/footer.php");
include("includes/scripts.php"); 
?>
    </body>

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:58:35 GMT -->
</html>