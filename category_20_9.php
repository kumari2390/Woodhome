<?php 
require_once("classes/dbo.class.php");
$usr_cnt = 0;
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) $usr_cnt = 1;
?>
<!DOCTYPE html>
<html lang="en">
<?php include("inc/head.inc.php");?>
<body class="cnt-home">
<?php include("inc/nav.inc.php");?>
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed"> Agricultural Products </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">Product 1</a></li>
                          <li><a href="#">Product 2</a></li>
                          <li><a href="#">Product 3</a></li>
                          <li><a href="#">Product 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed"> Dairy Products </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                        <li><a href="#">Product 1</a></li>
                          <li><a href="#">Product 2</a></li>
                          <li><a href="#">Product 3</a></li>
                          <li><a href="#">Product 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed"> Farm Products </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                        <li><a href="#">Product 1</a></li>
                          <li><a href="#">Product 2</a></li>
                          <li><a href="#">Product 3</a></li>
                          <li><a href="#">Product 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed"> Dry Fruits </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                        <li><a href="#">Product 1</a></li>
                          <li><a href="#">Product 2</a></li>
                          <li><a href="#">Product 3</a></li>
                          <li><a href="#">Product 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed"> Fruits and Vegetables </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                        <li><a href="#">Product 1</a></li>
                          <li><a href="#">Product 2</a></li>
                          <li><a href="#">Product 3</a></li>
                          <li><a href="#">Product 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed"> Frozen Foods </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                        <li><a href="#">Product 1</a></li>
                          <li><a href="#">Product 2</a></li>
                          <li><a href="#">Product 3</a></li>
                          <li><a href="#">Product 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group --> 
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
            
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Supplier</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li><a href="#"><input type="checkbox" class="form-group mar-r" />Arvind Parekh</a></li>
                  <li><a href="#"><input type="checkbox" class="form-group mar-r" />Maneklal </a></li>
                  <li><a href="#"><input type="checkbox" class="form-group mar-r" />John Doe</a></li>
                  <li><a href="#"><input type="checkbox" class="form-group mar-r" />Prashant</a></li>
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
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
       
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <!-- <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li> -->
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                        <?php 
                        if(!isset($_REQUEST['sort_by'])) echo "Position";
                        else
                        {
                          if($_REQUEST['sort_by'] == 1) echo "Price : Lowest First";
                          else if($_REQUEST['sort_by'] == 2) echo "Price : Highest First";
                          else if($_REQUEST['sort_by'] == 3) echo "Product Name : A to Z";
                          else if($_REQUEST['sort_by'] == 4) echo "Prouduct Name : Z to A";
                        }
                        ?>
                        <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a onclick="sort_by(0);">Position</a></li>
                        <li role="presentation"><a onclick="sort_by(1);">Price:Lowest first</a></li>
                        <li role="presentation"><a onclick="sort_by(2);">Price:Highest first</a></li>
                        <li role="presentation"><a onclick="sort_by(3);">Product Name:A to Z</a></li>
                        <li role="presentation"><a onclick="sort_by(4);">Product Name:Z to A</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"><?php if(!isset($_SESSION['page_rows'])) echo "6"; else echo $_SESSION['page_rows'];?><span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a onclick="disp_page(6);">6</a></li>
                        <li role="presentation"><a onclick="disp_page(12);">12</a></li>
                        <li role="presentation"><a onclick="disp_page(18);">18</a></li>
                        <li role="presentation"><a onclick="disp_page(24);">24</a></li>
                        <li role="presentation"><a onclick="disp_page(30);">30</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <!--<ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>-->
                <?php
                if(!isset($_SESSION['page_rows'])) $showRecordPerPage = 6;
                else $showRecordPerPage = $_SESSION['page_rows'];
                if(isset($_GET['page']) && !empty($_GET['page'])){
                $currentPage = $_GET['page'];
                }else{
                $currentPage = 1;
                }
                $cat_id = base64_decode($_REQUEST['cat_id']);
                ?>
                <input type="hidden" id="cat_id" value="<?php echo $_REQUEST['cat_id'];?>" />
                <input type="hidden" id="sub_cat_id" value="<?php if(isset($_REQUEST['sub_cat']) && $_REQUEST['sub_cat'] != "") echo $_REQUEST['sub_cat']; else echo "";?>" />
                <?php
                $cond = "category_id = ? AND ";
                $page_cond = "&cat_id=".$_REQUEST['cat_id'];
                if(isset($_REQUEST['sub_cat']) && $_REQUEST['sub_cat'] != "")
                {
                  $sub_cat_id = base64_decode($_REQUEST['sub_cat']);
                  $cond .= " sub_category_id = ? AND "; 
                  $page_cond .= "&sub_cat=".$_REQUEST['sub_cat'];
                }
                if(isset($_REQUEST['sort_by']) && $_REQUEST['sort_by'] > 0) 
                  $page_cond .= "&sort_by=".$_REQUEST['sort_by'];
                $page_query = "SELECT COUNT(*) FROM products WHERE $cond status = ?";
                if(isset($_REQUEST['sub_cat']) && $_REQUEST['sub_cat'] != "")
                {
                  $total_records = $db->count($page_query, array($cat_id, $sub_cat_id, 1));
                }
                else
                  $total_records = $db->count($page_query, array($cat_id, 1));
                //$total_records = mysqli_num_rows($page_result);
                $total_pages = ceil($total_records / $showRecordPerPage);
                $lastPage = ceil($total_records / $showRecordPerPage);
                $firstPage = 1;
                $nextPage = $currentPage + 1;
                $previousPage = $currentPage - 1;
                if($total_records > 0)
                {
                ?>
                <ul>
                  <?php if($currentPage != $firstPage) { ?>
                  <li class="page-item">
                  <a class="page-link" href="?page=<?php echo $firstPage.$page_cond ?>" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">First</span>
                  </a>
                  </li>
                  <?php } ?>
                  <?php if($currentPage >= 2) { ?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage.$page_cond ?>"><?php echo $previousPage ?></a></li>
                  <?php } ?>
                  <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage.$page_cond ?>"><?php echo $currentPage ?></a></li>
                  <?php if($currentPage != $lastPage) { ?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage.$page_cond ?>"><?php echo $nextPage ?></a></li>
                  <li class="page-item">
                  <a class="page-link" href="?page=<?php echo $lastPage.$page_cond ?>" aria-label="Next">
                  <span aria-hidden="true">Last</span>
                  </a>
                  </li>
                  <?php } ?>
                </ul>
                <?php } ?>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                  <?php
                  $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
                  $orderby = "";
                  if(isset($_REQUEST['sort_by']) && $_REQUEST['sort_by'] > 0)
                  {
                    if($_REQUEST['sort_by'] == 1) $orderby = " ORDER BY price ASC";
                    else if($_REQUEST['sort_by'] == 2) $orderby = " ORDER BY price DESC";
                    else if($_REQUEST['sort_by'] == 3) $orderby = " ORDER BY short_title ASC";
                    else if($_REQUEST['sort_by'] == 4) $orderby = " ORDER BY short_title DESC";
                  }
                  if(!isset($_REQUEST['sub_cat']))
                  {
                    $sel_prods = "SELECT product_id, short_title, offer_price, price, shipping_price, image, feature_type FROM products WHERE category_id = ? AND status = ? $orderby LIMIT $startFrom, $showRecordPerPage";
                    $get_all_prods = $db->get($sel_prods, array($cat_id, 1));
                  }
                  else
                  {
                    $sel_prods = "SELECT product_id, short_title, offer_price, price, shipping_price, image, feature_type FROM products WHERE category_id = ? AND sub_category_id = ? AND status = ? $orderby LIMIT $startFrom, $showRecordPerPage";
                    $get_all_prods = $db->get($sel_prods, array($cat_id, $sub_cat_id, 1));
                  }
                  foreach ($get_all_prods AS $prod_data) 
                  {
                  ?>
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.php?product=<?php echo base64_encode($prod_data['product_id']);?>"><img  src="uploads/<?php echo $prod_data['image'];?>" alt=""></a> </div>
                          <?php if($prod_data['feature_type'] != "") {?>
                          <div class="tag new"><span><?php echo $prod_data['feature_type'];?></span></div>
                          <?php } ?>
                        </div>
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php"><?php echo $prod_data['short_title'];?></a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price">
                            <span class="price"> ₹ <?php if($prod_data['offer_price'] > 0) echo number_format($prod_data['offer_price'], 2); else echo number_format($prod_data['price']+$prod_data['shipping_price'], 2);?> </span>
                            <?php if($prod_data['offer_price'] > 0) {?>
                            <span class="price-before-discount">₹ <?php echo number_format($prod_data['price']+$prod_data['shipping_price'], 2);?></span> 
                            <span><a href="#" data-toggle="modal" data-target="#notify-modal" class="btn" style="color: #69b927;border: 1px solid #69b927;padding: 5px 14px;border-radius: 0;">Notify Me</a></span>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a <?php if($usr_cnt == 0){?>onclick="goto_login();"<?php } else { ?>href="add_to_cart.php?action=category&product=<?php echo base64_encode($prod_data['product_id']); ?>"<?php } ?>><button class="btn btn-primary icon" type="button"> <i class="fa fa-shopping-cart"></i> </button></a>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" <?php if($usr_cnt == 0){?>onclick="goto_login();"<?php } else {?>onclick="add_wishlist(<?php echo $prod_data['product_id'];?>);"<?php } ?> title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  }
                  ?>
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
           
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <?php if($total_records > 0) { ?>
                <ul>
                  <?php 
                  if($currentPage != $firstPage) { ?>
                  <li class="page-item">
                  <a class="page-link" href="?page=<?php echo $firstPage.$page_cond ?>" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">First</span>
                  </a>
                  </li>
                  <?php } ?>
                  <?php if($currentPage >= 2) { ?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage.$page_cond ?>"><?php echo $previousPage ?></a></li>
                  <?php } ?>
                  <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage.$page_cond ?>"><?php echo $currentPage ?></a></li>
                  <?php if($currentPage != $lastPage) { ?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage.$page_cond ?>"><?php echo $nextPage ?></a></li>
                  <li class="page-item">
                  <a class="page-link" href="?page=<?php echo $lastPage.$page_cond ?>" aria-label="Next">
                  <span aria-hidden="true">Last</span>
                  </a>
                  </li>
                  <?php } ?>
                </ul>
                <?php } ?>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 
<?php include("inc/footer.inc.php");?>

<?php include("inc/footerscript.inc.php");?>
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
function disp_page(pageRows)
{
  var cat_id = $('#cat_id').val();
  var sub_cat = $('#sub_cat_id').val();
  //alert(cat_id+"--"+sub_cat);
  var datas = "rows="+pageRows;
  //alert(datas);
  $.ajax({
      type: "POST",
      url: "assign_pagerows.php",
      data:datas,
      success: function(data){
          //alert(data);
          window.location = "category.php?cat_id="+cat_id+"&sub_cat="+sub_cat;
      }
  }); 
}
function sort_by(val)
{
  var cat_id = $('#cat_id').val();
  var sub_cat = $('#sub_cat_id').val();
  if(val > 0)
    window.location = "category.php?cat_id="+cat_id+"&sub_cat="+sub_cat+"&sort_by="+val;
  else
    window.location = "category.php?cat_id="+cat_id+"&sub_cat="+sub_cat;
}
</script>

<div class="modal notify-modal fade in" id="notify-modal" role="dialog" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h5 class="modal-title">Notify On Stock Availability</h5></div>
            <div class="modal-body">
                <p>Notify me on</p>
                <div role="form">
                    <div class="radio">
                        <label>
                            <input type="radio" name="notifyMe" value="E" ng-checked="true" class="ng-pristine ng-untouched ng-valid ng-not-empty" checked="checked">Email</label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio"  name="notifyMe" value="S" class="ng-pristine ng-untouched ng-valid ng-not-empty">Mobile</label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="notifyMe" value="B" class="ng-pristine ng-untouched ng-valid ng-not-empty">Both</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default yellow-btn">NOTIFY ME</button>
                <button type="button" class="btn btn-default gray-btn" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>