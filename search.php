<?php 
require_once("classes/dbo.class.php");
$usr_cnt = 0;
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) $usr_cnt = 1;
$search = $_REQUEST['search'];
$search_subcat = "SELECT sub_category_id FROM products WHERE short_title LIKE '%$search%' GROUP BY sub_category_id";
$sub_datas = $db->get($search_subcat);
$sel_brands = "SELECT category_id, sub_category_id, brands FROM products WHERE short_title LIKE '%$search%' GROUP BY brands";
$brand_datas = $db->get($sel_brands);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php");?>
<body class="cnt-home">
<?php include("includes/header.php");?>
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
		
		  
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Search</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
		
		
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                  <?php 
                  $sub_ids = "";
                  foreach($sub_datas AS $sub_cat_data) {
                    if($sub_ids == "") $sub_ids = $sub_cat_data['sub_category_id'];
                    else $sub_ids .= ",".$sub_cat_data['sub_category_id'];
                   }
                   if($sub_ids != '')
                   {
                    $sel_sub_cats = "SELECT sub_id, sub_nm FROM sub_categories WHERE sub_id IN ($sub_ids)";
                    $all_sub_cats = $db->get($sel_sub_cats);
                    foreach($all_sub_cats AS $sub_cat_datas)
                    {
                    ?>
                    <div class="accordion-heading"> <a href="search.php?search=<?php echo $_REQUEST['search']."&cat_id=".$sub_cat_datas['sub_id'];?>" class="accordion-toggle collapsed"><?php echo $sub_cat_datas['sub_nm'];?></a> </div>
                    <?php
                    }
                   }
                   ?>
                   <!-- <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="accordion-toggle collapsed"> Dairy Products </a> </div> -->
                </div>
              </div>
            </div>
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
             
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Brands</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <?php
                  $br_cnt = 0;
                  foreach($brand_datas AS $brand_data)
                  {
                    $cat_id = $brand_data['category_id'];
                    $sub_cat_id = $brand_data['sub_category_id'];
                    $br_cnt++;
                  ?>
                  <li><input type="checkbox" id="brand_id<?php echo $br_cnt;?>" onclick="get_brand_products(<?php echo $cat_id;?>, <?php echo $sub_cat_id;?>, '<?php echo $_REQUEST['search'];?>');" value="<?php echo $brand_data['brands'];?>" class="form-group mar-r" /><?php echo $brand_data['brands'];?></li>
                  <?php
                  }
                  ?>
                  <input type="hidden" id="all_brands" value="<?php echo $br_cnt;?>" />
                  <!-- <li><a href="#"><input type="checkbox" class="form-group mar-r" />Arvind Parekh</a></li>
                  <li><a href="#"><input type="checkbox" class="form-group mar-r" />Maneklal </a></li>
                  <li><a href="#"><input type="checkbox" class="form-group mar-r" />John Doe</a></li>
                  <li><a href="#"><input type="checkbox" class="form-group mar-r" />Prashant</a></li> -->
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>--> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            
           
            <!-- /.sidebar-widget --> 
         
            <!-- ============================================== Testimonials: END ============================================== -->
            
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class="col-md-9"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
       
   
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row" id="all_datas">
                  <?php
                  $sel_search_prods = "SELECT product_id, short_title, offer_price, price, shipping_price, image, feature_type FROM products WHERE short_title LIKE '%".$_REQUEST['search']."%' AND status = 1 ORDER BY short_title ASC";
                  $get_all_prods = $db->get($sel_search_prods);
                  foreach ($get_all_prods AS $prod_data) 
                  {
                  ?>
                  <div class="col-sm-6 col-md-4 wow fadeInUp animated pro-box" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.php?product=<?php echo base64_encode($prod_data['product_id']);?>"><img src="uploads/<?php echo $prod_data['image'];?>" alt=""></a> </div>
                          <div class="tag new"><span><?php echo $prod_data['feature_type'];?></span></div>
                        </div>
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php"><?php echo $prod_data['short_title'];?></a></h3>
                          <div class="description"></div>
                          <div class="product-price">
                            <span class="price"> ₹ <?php if($prod_data['offer_price'] > 0) echo number_format($prod_data['offer_price']+$prod_data['shipping_price'], 2); else echo number_format($prod_data['price']+$prod_data['shipping_price'], 2);?> </span>
                            <?php if($prod_data['offer_price'] > 0) {?>
                            <span class="price-before-discount">₹ <?php echo number_format($prod_data['price']+$prod_data['shipping_price'], 2);?></span> 
                            <?php } ?>
                          </div>
                        </div>
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a <?php if($usr_cnt == 0){?>onclick="goto_login();"<?php } else { ?>href="add_to_cart.php?action=search&product=<?php echo base64_encode($prod_data['product_id'])."&search=".$_REQUEST['search']; ?>"<?php } ?>><button class="btn btn-primary icon" type="button"> <i class="fa fa-shopping-cart"></i> </button></a>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" <?php if($usr_cnt == 0){?>onclick="goto_login();"<?php } else {?>onclick="add_wishlist(<?php echo $prod_data['product_id'];?>);"<?php } ?> title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
           
          </div>
       
        </div>
        <!-- /.search-result-container --> 
        
      </div>
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 
<?php include("includes/footer.php");?>

<?php include("includes/scripts.php");?>
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
function get_brand_products(cat_id, sub_cat_id, search)
{
  var all_brands = $('#all_brands').val();
  var chked_brands = "";
  for(var b=1; b<=all_brands; b++)
  {
    if($("#brand_id"+b).prop('checked') == true){
      if(chked_brands == "") chked_brands = $("#brand_id"+b).val();
      else chked_brands = chked_brands+","+$("#brand_id"+b).val();
    }
  }
  var datas = "brands="+chked_brands+"&cat_id="+cat_id+"&sub_cat_id="+sub_cat_id+"&search="+search;
  //alert(datas);
  if(chked_brands != "")
  {
    $.ajax({
      type: "POST",
      url: "get_brand_datas.php",
      data:datas,
      success: function(data){
          //alert(data);
          $('#filter_options').hide();
          $('#all_datas').html(data);
      }
    });
  }
  else
    window.location = "";
}
</script>
</body>

<!-- Mirrored from www.themesground.com/flipmart-demo/V6/category.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jul 2018 10:22:35 GMT -->
</html>