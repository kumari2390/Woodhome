<?php require_once("classes/dbo.class.php");?>
<!DOCTYPE html>
<html lang="en">
  <?php include("inc/head.inc.php");?>
  <style>
  .single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a {padding: 12px 15px;}
  </style>
  <?php 
if(!isset($_GET['product']))
header("location:404.php");
$productId = base64_decode($_GET['product']);
$productq = "SELECT * FROM products WHERE product_id = $productId";
$productres = $db->get($productq);
$productrow = $productres[0];
$category_id = $productrow['category_id'];
$sel_category = "SELECT cat_nm FROM categories WHERE cat_id = $category_id";
$catresult = $db->get($sel_category);
?>
  <body class="cnt-home">
    <?php include("inc/nav.inc.php");?>
    <div class="breadcrumb">
      <div class="container">
        <div class="breadcrumb-inner">
          <ul class="list-inline list-unstyled">
            <li>
              <a href="index.php">Home
              </a>
            </li>
            <li>
              <!-- <a href="#"> -->
              <?php echo $catresult[0]['cat_nm'];?>
              <!-- </a> -->
            </li>
            <li class='active'>
              <?php echo $productrow['short_title'];?>
            </li>
          </ul>
        </div>
        <!-- /.breadcrumb-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
      <div class='container'>
        <div class='row single-product'>
          <div class='col-md-3 sidebar'>
            <div class="sidebar-module-container">
              <div class="home-banner outer-top-n">
                <!-- <img src="assets/images/5.jpg" alt="Image"> -->
              </div>		
              <!-- ============================================== HOT DEALS ============================================== -->
              <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
                <h3 class="section-title">hot deals
                </h3>
                <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
                  <?php
$sel_hot_deals = "SELECT product_id, image, short_title, offer_price, price, shipping_price FROM products WHERE product_id != ? AND status = ? AND featured = ? LIMIT 0, 6";
$all_datas = $db->get($sel_hot_deals, array($productId, 1, 1));
foreach($all_datas as $hot_data)
{
$product_id = $hot_data['product_id'];
$sel_review_counts = "SELECT count(*) AS tot_reviews, SUM(rate) AS tot_rate FROM `reviews` WHERE product_id = ?";
$review_data = $db->get($sel_review_counts, array($product_id));
$tot_reviews = $review_data[0]['tot_reviews'];
if($tot_reviews > 0) $tot_rate = $review_data[0]['tot_rate'] / $tot_reviews; else $tot_rate = 0;
$percent = 0;
if($hot_data['offer_price'] > 0)
$percent = (($hot_data['price'] - $hot_data['offer_price']) * 100) / $hot_data['price'];
?>
                  <div class="item">
                    <div class="products">
                      <div class="hot-deal-wrapper">
                        <div class="image">
                          <img src="uploads/<?php echo $hot_data['image'];?>" alt="">
                        </div>
                        <?php if($hot_data['offer_price'] > 0){?>
                        <div class="sale-offer-tag">
                          <span>
                            <?php echo number_format($percent,2);?>%
                            <br>off
                          </span>
                        </div>
                        <?php } ?>
                      </div>
                      <!-- /.hot-deal-wrapper -->
                      <div class="product-info text-left m-t-20">
                        <h3 class="name">
                          <a href="detail.php">
                            <?php echo $hot_data['short_title'];?>
                          </a>
                        </h3>
                        <div class="rating">
                          <a href="#">
                            <i class="fa fa-star">
                            </i>
                          </a>
                          <a href="#">
                            <i class="fa fa-star">
                            </i>
                          </a>
                          <a href="#">
                            <i class="fa fa-star">
                            </i>
                          </a>
                          <a href="#">
                            <i class="fa fa-star-o">
                            </i>
                          </a>
                          <a href="#">
                            <i class="fa fa-star-o">
                            </i>
                          </a>
                        </div>
                        <div class="product-price">	
                          <?php if($hot_data['offer_price'] > 0) {?>
                          <span class="price">
                            ₹
                            <?php echo number_format($hot_data['offer_price'], 2);?>
                          </span>
                          <span class="price-before-discount">₹
                            <?php echo number_format($hot_data['price'] , 2);?>
                          </span>
                          <?php } else {?>
                          <span class="price">
                            ₹
                            <?php echo number_format($hot_data['price'], 2);?>
                          </span>
                          <?php } ?>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <div class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                              <i class="fa fa-shopping-cart">
                              </i>													
                            </button>
                            <button class="btn btn-primary cart-btn" type="button" onclick="<?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) {?>deal_addtocart(<?php echo $product_id;?>, 1); <?php } else {?>goto_login();<?php } ?>">Add to cart
                            </button>
                          </div>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>	
                  </div>
                  <?php
}
?>
                </div>
                <!-- /.sidebar-widget -->
              </div>
              <!-- ============================================== HOT DEALS: END ============================================== -->					
              <!-- ============================================== NEWSLETTER ============================================== -->
              <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
                <h3 class="section-title">Newsletters
                </h3>
                <div class="sidebar-widget-body outer-top-xs">
                  <p>Sign Up for Our Newsletter!
                  </p>
                  <form>
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputEmail1">Email address
                      </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                    </div>
                    <button class="btn btn-primary">Subscribe
                    </button>
                  </form>
                </div>
                <!-- /.sidebar-widget-body -->
              </div>
              <!-- /.sidebar-widget -->
              <!-- ============================================== NEWSLETTER: END ============================================== -->
            </div>
          </div>
          <!-- /.sidebar -->
          <div class='col-md-9'>
            <div class="detail-block">
              <div class="row  wow fadeInUp">
                <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                  <div class="product-item-holder size-big single-product-gallery small-gallery">
                    <div id="owl-single-product">
                      <div class="single-product-gallery-item" id="slide1">
                        <a data-lightbox="image-1" data-title="Gallery" href="uploads/<?php echo $productrow['image']; ?>">
                          <img class="img-responsive" alt="" src="assets/images	/blank.gif" data-echo="uploads/<?php echo $productrow['image']; ?>" />
                        </a>
                      </div>
                      <!-- /.single-product-gallery-item -->
                    </div>
                    <!-- /.single-product-slider -->
                  </div>
                  <!-- /.single-product-gallery -->
                </div>
                <!-- /.gallery-holder -->        			
                <div class='col-sm-6 col-md-7 product-info-block'>
                  <div class="product-info">
                    <h1 class="name">
                      <?php echo $productrow['long_title']; ?>
                    </h1>
                    <div class="rating-reviews m-t-20">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="rating">
                            <a href="#">
                              <i class="fa fa-star">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star-o">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star-o">
                              </i>
                            </a>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="reviews">
                            <a href="#" class="lnk">(13 Reviews)
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- /.row -->		
                    </div>
                    <!-- /.rating-reviews -->
                    <div class="stock-container info-container m-t-10">
                      <div class="row">
                        <div class="col-sm-2">
                          <div class="stock-box">
                            <span class="label">Availability :
                            </span>
                          </div>	
                        </div>
                        <div class="col-sm-9">
                          <div class="stock-box">
                            <span class="value">In Stock
                            </span>
                          </div>	
                        </div>
                      </div>
                      <!-- /.row -->	
                    </div>
                    <!-- /.stock-container -->
                    <div class="description-container m-t-20">
                      <?php echo $productrow['description']; ?>
                    </div>
                    
                    <!-- /.description-container -->
                    <div class="price-container info-container m-t-20">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="price-box">
                            <span class="price">₹
                              <?php echo $productrow['offer_price']; ?>
                            </span>
                            <span class="price-strike">₹
                              <?php echo $productrow['price'] + $productrow['shipping_price']; ?>
                            </span>
                          </div>
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.price-container -->
                    <div class="quantity-container info-container">
                      <div class="row">
                        <div class="col-sm-2">
                          <span class="label">Qty :
                          </span>
                        </div>
                        <div class="col-sm-2">
                          <div class="cart-quantity">
                            <div class="quant-input">
                              <input id="quantity" type="number" value="1">
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-sm-3">
                          <div class="cart-quantity">
                            <div class="quant-input" style="width:100%">
                              <select class="form-control" style="border-radius:0;width:100%">
                              <option>kg</option>
                              	<option>Ton</option>
                              	<option>Quintal</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <a onclick="<?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) {?>add_to_cart(<?php echo $productId;?>);<?php } else {?>goto_login();<?php } ?>" class="btn btn-primary">
                            <i class="fa fa-shopping-cart inner-right-vs">
                            </i> ADD TO CART
                          </a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.quantity-container -->
                  </div>
                  <!-- /.product-info -->
                </div>
                <!-- /.col-sm-7 -->
              </div>
              <!-- /.row -->
            </div>
            <div class="product-tabs inner-bottom-xs  wow fadeInUp">
              <div class="row">
                <div class="col-sm-12">
                  <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                    <li class="active">
                      <a data-toggle="tab" href="#description">Product Details
                      </a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#storage">Storage & Uses
                      </a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#benefits">Packaging & Cultivation 
                      </a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#benefits">Shipping Service 
                      </a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#review">REVIEW
                      </a>
                    </li>
                  </ul>
                  <!-- /.nav-tabs #product-tabs -->
                </div>
                <div class="col-sm-9">
                  <div class="tab-content">
                    <div id="description" class="tab-pane in active">
                      <div class="product-tab">
                        <p class="text">
                          <?php echo $productrow['description']; ?>
                        </p>
                      </div>	
                    </div>
                    <div id="storage" class="tab-pane">
                      <div class="product-tab">
                        <p class="text">
                          <?php echo $productrow['storage_uses']; ?>
                        </p>
                      </div>  
                    </div>
                    <div id="benefits" class="tab-pane">
                      <div class="product-tab">
                        <p class="text">
                          <?php echo $productrow['benefits']; ?>
                        </p>
                      </div>  
                    </div>
                    <!-- /.tab-pane -->
                    <div id="review" class="tab-pane">
                      <div class="product-tab">
                        <div class="product-add-review">
                          <h4 class="title">Write your own review
                          </h4>
                          <div class="review-table">
                            <a href="#">
                              <i class="fa fa-star">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star-o">
                              </i>
                            </a>
                            <a href="#">
                              <i class="fa fa-star-o">
                              </i>
                            </a>
                          </div>
                          <!-- /.review-table -->
                          <div class="review-form">
                            <div class="form-container">
                              <form role="form" class="cnt-form">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="exampleInputName">Your Name 
                                        <span class="astk">*
                                        </span>
                                      </label>
                                      <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                      <label for="exampleInputSummary">Summary 
                                        <span class="astk">*
                                        </span>
                                      </label>
                                      <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                    </div>
                                    <!-- /.form-group -->
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleInputReview">Review 
                                        <span class="astk">*
                                        </span>
                                      </label>
                                      <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder="">
                                      </textarea>
                                    </div>
                                    <!-- /.form-group -->
                                  </div>
                                </div>
                                <!-- /.row -->
                                <div class="action text-right">
                                  <button class="btn btn-primary btn-upper">SUBMIT REVIEW
                                  </button>
                                </div>
                                <!-- /.action -->
                              </form>
                              <!-- /.cnt-form -->
                            </div>
                            <!-- /.form-container -->
                          </div>
                          <!-- /.review-form -->
                        </div>
                        <!-- /.product-add-review -->										
                      </div>
                      <!-- /.product-tab -->
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.product-tabs -->
            <!-- ============================================== UPSELL PRODUCTS ============================================== -->
            <section class="section featured-product wow fadeInUp">
              <h3 class="section-title">Similar Products
              </h3>
              <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
               
			   <?php 
			   $similar_q = "SELECT * FROM products WHERE category_id = ? LIMIT 4";
			   $srow = $db->get($similar_q,array($category_id));
			   foreach($srow as $s){
			   ?>
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">		
                      <div class="product-image">
                        <div class="image">
                          <a href="detail.php">
                            <img  src="uploads/<?php echo $s['image']?>" alt="">
                          </a>
                        </div>
                        <!-- /.image -->			
                        <div class="tag sale">
                          <span>sale
                          </span>
                        </div>            		   
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                        <h3 class="name">
                          <a href="detail.php"><?php echo $s['short_title'] ?>
                          </a>
                        </h3>
                        <div class="rating rateit-small">
                        </div>
                        <div class="description">
                        </div>
                        <div class="product-price">	
                          <span class="price">₹<?php echo $s['price'] ?>
                          </span>
                          <span class="price-before-discount">₹<?php echo $s['price'] ?>
                          </span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                <i class="fa fa-shopping-cart">
                                </i>													
                              </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart
                              </button>
                            </li>
                            <li class="lnk wishlist">
                              <a class="add-to-cart" href="detail.php" title="Wishlist">
                                <i class="icon fa fa-heart">
                                </i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
				<?php } ?>
              </div>
              <!-- /.home-owl-carousel -->
            </section>
            <!-- /.section -->
            <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
          </div>
          <!-- /.col -->
          <div class="clearfix">
          </div>
        </div>
        <!-- /.row -->
        
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	
      </div>
      <!-- /.container -->
    </div>
    <!-- /.body-content -->
    <!-- ============================================================= FOOTER ============================================================= -->
    <?php include('inc/footer.inc.php') ?>
    
	<?php include('inc/footerscript.inc.php') ?>
    
    <script type="text/javascript">
      function add_to_cart(pid)
      {
        var quantity = $('#quantity').val();
        var datas = "product="+btoa(pid)+"&quantity="+quantity;
        //alert(datas);
        $.ajax({
          type: "POST",
          url: "add_to_cart.php",
          data:datas,
          success: function(data){
            //alert(data);
            //$('#category').html(data);
            window.location = "";
          }
        }
              );
      }
      function deal_addtocart(pid, qty)
      {
        var datas = "product="+btoa(pid)+"&quantity="+qty;
        //alert(datas);
        $.ajax({
          type: "POST",
          url: "add_to_cart.php",
          data:datas,
          success: function(data){
            //alert(data);
            //$('#category').html(data);
            window.location = "";
          }
        }
              );
      }
      function goto_login()
      {
        alert("Please Logged in then add to cart make it...");
        window.location = "sign-in.php";
      }
    </script>
  </body>
 </html>
