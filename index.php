<!doctype html>
<html class="no-js" lang="zxx">

    <?php

    if(!isset($_SESSION)) {
        ob_start();
        session_start();
    }

    include "master/dbMaster.php";
    include "include/header.php";
    include "include/menu.php";


    $query = $db->query("SELECT * FROM categories", PDO::FETCH_ASSOC);
    $querySP = $db->query("SELECT * FROM serviceproviders", PDO::FETCH_ASSOC);
    ?>

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div class="shop-page-wrapper ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-sidebar">
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Servis ara</h3>
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input id="searchBox" placeholder="Ara..." type="text">
                                        <button><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">

                            </div>
                            <div class="sidebar-widget mb-45">
                                <h3 class="sidebar-title">Kategoriler</h3>
                                <div class="sidebar-categories">
                                    <ul>

                                        <?php
                                        if ($query->rowCount()) {
                                            foreach ($query as $row) {
                                                ?>
                                                    <li><a class="category" href="index.php?categoryId=<?php echo $row["id"]?>"><?php echo $row["category"]?><span></span></a></li>

                                                <?php

                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget mb-50">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-product-wrapper">
                            <div class="shop-bar-area">
                                <div class="shop-bar pb-60">
                                    <div class="shop-found-selector">
                                        <div class="shop-found">
                                            <p><span><?php echo  $querySP->rowCount() ?></span> Servis Bulundu</span></p>
                                        </div>
                                        <div class="shop-selector">
                                            <label>Sırala : </label>
                                            <select name="select">
                                                <option value="">Varsayılan</option>
                                                <option value="">A - Z</option>
                                                <option value=""> Z - A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shop-filter-tab">
                                        <div class="shop-tab nav" role=tablist>
                                            <a href="#grid-sidebar9" data-toggle="tab" role="tab" aria-selected="false" style="display: none;">
                                                <i class="ti-layout-grid4-alt"></i>
                                            </a>
                                            <a class="active" href="#grid-sidebar10" data-toggle="tab" role="tab" aria-selected="true">
                                                <i class="ti-menu"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-content tab-content">
                                    <div id="grid-sidebar9" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Homme Tapered Smart</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Denim Stonewash</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/3.jpg" alt="">
                                                        </a>
                                                        <span>new</span>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Mini Waffle 5 Pack</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                                                        </a>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Dagger Smart Trousers</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/5.jpg" alt="">
                                                        </a>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Homme Tapered Smart</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                        </a>
                                                        <span>sell</span>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Navy Bird Print</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/3.jpg" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Homme Tapered Smart</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                            <a class="animate-top" title="Add To Cart" href="#">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Homme Tapered Smart</a></h4>
                                                        <span>$115.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div id="grid-sidebar10" class="tab-pane fade active show">
                                        <div class="row" id="result">

                                            <?php
                                            if ($querySP->rowCount()) {
                                                foreach ($querySP as $row) {
                                                    ?>
                                                    <div class="col-lg-12">
                                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                            <div class="product-img list-img-width">
                                                                <a href="productDetails.php?id=<?php echo $row["id"]?>">
                                                                    <img src="<?php echo $row["photoUrl"]?>" alt="">
                                                                </a>
                                                                <div class="product-action-list-style">
                                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                        <i class="pe-7s-look" aria-disabled="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-content-list">
                                                                <div class="product-list-info">
                                                                    <h4><a href="productDetails.php?id=<?php echo $row["id"]?>"><?php echo $row["vendor_name"]?></a></h4>

                                                                    <p><?php echo $row["description"]?></p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php

                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <?php

            include "include/footer.php"
        ?>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="assets/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="assets/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="assets/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00  </span>
                                </div>
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- modal -->
        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="assets/img/cart/4.jpg" alt="">
                                                <p>Blush Sequin Top </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="#">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="compare-title"><h4>Description </h4></td>
                                            <td class="compare-dec compare-common">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Sku </h4></td>
                                            <td class="product-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Availability  </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>In stock</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Weight   </h4></td>
                                            <td class="compare-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Dimensions   </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>N/A</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>brand   </h4></td>
                                            <td class="compare-brand compare-common">
                                                <p>HasTech</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>color   </h4></td>
                                            <td class="compare-color compare-common">
                                                <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>size    </h4></td>
                                            <td class="compare-size compare-common">
                                                <p>XS, S, M, L, XL, XXL </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"></td>
                                            <td class="compare-price compare-common">
                                                <p>$75.99 </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





		<!-- all js here -->

        <?php

            include "include/jsFooter.php" ;
        ?>

    <script>


        $.urlParam = function(name){
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results[1] || 0;
        }

        if (typeof $.urlParam('categoryId') !== 'undefined') {
            $.ajax({url: "searchVendor.php?searchCat="+$.urlParam('categoryId'), success: function(result){
                    $("#result").html(result);
                }});
        }


        $("#searchBox").on("propertychange change keyup paste input", function(){
            var value = $("#searchBox").val();

            $.ajax({url: "searchVendor.php?searchkey="+value, success: function(result){
                    $("#result").html(result);
                }});
        });


    </script>

    </body>
</html>
