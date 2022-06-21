      <?php include('header.php'); ?>
   
        <!-- HEADER-MIDDLE END -->
        <!-- MAIN-MENU-AREA START -->
                <!-- MAIN-MENU-AREA END -->
            <!-- HEADER-BOTTOM-AREA START -->
              <section class="main-content-section">
            <div class="container">
                <div class="row">
                 <?php 
$gio_hang = isset($_SESSION['gio-hang']) ? $_SESSION['gio-hang'] : [];

?>
    <?php 
    
    $id = $_GET['id'];
    $p = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");
    $ctsp = mysqli_fetch_assoc($p);
     $idc = $ctsp['category_id'];
    $anh = mysqli_query($conn,"SELECT * FROM pro_img WHERE pro_id = $id");
    // $pronp = mysqli_fetch_assoc($p);

     ?>
<div id="tz-wp-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <!--   <h3 class="tz-title-bold-3">CHAIRS</h3> -->
                    <div id="tz-shop-content" class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <?php foreach ($anh as $a) {
                                        
                                     ?>
                                    <li>
                                        <img src="uploads/<?php echo $a['link']; ?>" alt="Roses Deco Accent Chair"/>
                                    </li>
                
                                    <?php } ?>
                                </ul>
                            </div>
                            <div id="carousel">
                                <ul class="slides">
                                    <?php foreach ($anh as $anhcon) {
                                        
                                    ?>
                                   
                                     <li>
                                        <img src="uploads/<?php echo $anhcon['link'];  ?>" alt="Roses Deco Accent Chair" />
                                    </li>
                               <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="tzshop-summary">
                                <h3><?php echo $ctsp['name']; ?></h3>
                                <span class="tzproduct-single-price">
                              <?php if ($ctsp['sale_price'] > 0) {
                                echo number_format($ctsp ['sale_price']);
                              }else{
                                echo number_format($ctsp['Price']);
                              } ?> VNĐ
                                </span>
                                    
                                <p>
                                    <?php echo $ctsp['content']; ?>
                                </p>
                                <?php 
                                foreach ($gio_hang as $gh) {


                                 ?>
                                <div class="tzqty">
                                    <div class="single-product-quantity">
                                        <p class="small-title">Số Lượng</p> 
                                        <div class="cart-quantity">

                                             <button type="button" class="update-item qty-minus" data-id="<?php echo $gh['id'];?>" ><span class="glyphicon glyphicon-minus"></span></button>
                                   <input  class="cart-plus-minus" name="quantity" width="10" value="<?php echo $gh['quantity']; ?>" id="quan-<?php echo $gh['id']; ?>">
                                    <button type="button" class="update-item qty-flus" data-id="<?php echo $gh['id'];?>"><span class="glyphicon glyphicon-plus"></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                 <span class="tz-shop-detail-meta">
                                    <a class="tzshopping add-cart" href="xu-ly-gio-hang.php?id=<?php echo $ctsp['id'];?>&action=add">
                                        <i class="fa fa-shopping-cart"></i>

                                    </a>
                                     Thêm Vào giỏ hàng
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="tzrelated-shop">
                        <h3 class="tz-title-bold-3">Sản Phẩm Liên Quan</h3>
                        <div class="row">
                            <?php 
                              

                             $product_sub = mysqli_query($conn,"SELECT  * FROM product WHERE category_id = $idc and id != $id  LIMIT 3 ");

                             foreach ($product_sub as $value) {
                                
                            
                             ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 laster-shop-item">
                                <div class="laster-thumb">
                                    <div class="shop-icon-data">
                                        <img src="demos/hosts.png" alt="hosts">
                                    </div>
                                    <img src="uploads/<?php echo $value['image']; ?>" alt="Linen Shirt With Mao Color">
                                    <span class="tz-shop-meta">
                                        <a href="" class="tzshopping">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a href="chitietsp.php?id=<?php echo $pronp['id']; ?>" class="tzheart">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                        
                                    </span>
                                </div>
                                <h6><a href="shop-productdetails.html"><?php echo $value['name']; ?></a></h6>
                                <small><?php echo number_format($value['price']);?> VNĐ</small>
                            </div>
                        <?php } ?>
                         
                          
                        </div>
                    </div>
                </div>
                         
                          
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- MAIN-CONTENT-SECTION END -->

        <!-- COMPANY-FACALITY START -->
        <section class="company-facality">
            <div class="container">
                <div class="row">
                    <div class="company-facality-row">
                        <!-- SINGLE-FACALITY START -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-facality">
                                <div class="facality-icon">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="facality-text">
                                    <h3 class="facality-heading-text">GIAO HÀNG FREE</h3>
                                    <span>cho đơn hàng trên 2.000.000 VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE-FACALITY END -->
                        <!-- SINGLE-FACALITY START -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-facality">
                                <div class="facality-icon">
                                    <i class="fa fa-umbrella"></i>
                                </div>
                                <div class="facality-text">
                                    <h3 class="facality-heading-text">HỖ TRỢ 24/7</h3>
                                    <span>Giải đáp mọi thắc mắc của khách hàng</span>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE-FACALITY END -->
                        <!-- SINGLE-FACALITY START -->                      
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-facality">
                                <div class="facality-icon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="facality-text">
                                    <h3 class="facality-heading-text">CẬP NHẬT THƯỜNG XUYÊN</h3>
                                    <span>Cập nhật những sản phẩm mới nhất </span>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE-FACALITY END -->
                        <!-- SINGLE-FACALITY START -->                      
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-facality">
                                <div class="facality-icon">
                                    <i class="fa fa-refresh"></i>
                                </div>
                                <div class="facality-text">
                                    <h3 class="facality-heading-text">ĐỔI TRẢ TRONG 30 NGÀY</h3>
                                    <span>Đổi trả sản phẩm nào trong 30 ngày </span>
                                </div>
                            </div>
                        </div>      
                        <!-- SINGLE-FACALITY END -->                    
                    </div>
                </div>
            </div>
        </section>
        <?php include('footer.php'); ?>