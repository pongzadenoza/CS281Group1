<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="CodePixar">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Shop</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/nice-select.css">
            <link rel="stylesheet" href="css/ion.rangeSlider.css" />
            <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>

            <!-- Start Header Area -->
            <header class="default-header">
                <div class="menutop-wrap">
                    <div class="menu-top container">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="list">
                                <li><a href="tel:+12312-3-1209">+12312-3-1209</a></li>
                                <li><a href="mailto:support@colorlib.com">support@colorlib.com</a></li>
                            </ul>
                            <ul class="list">
                                <li><?php
									error_reporting(E_ALL ^ E_NOTICE);

									if($_SESSION['C_ID']){

										echo "Welcome <b>".$_SESSION['C_ID']."</b><br>" ;
										echo "<a href=\"logout.php\">logout</a>";


									}
									else{


										echo "<a href=\"login.php\">login</a>";

									}


										?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                          <a class="navbar-brand" href="index.php">
                            <img src="img/logo.png" alt="">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#catagory">Category</a></li>
                                <li><a href="#men">Men</a></li>
                                <li><a href="#women">Women</a></li>
                                <li><a href="#latest">latest</a></li>
                                    <!-- Dropdown -->
                                    <li class="dropdown">
                                      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Pages
                                      </a>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="category.php">Category</a>
                                        <a class="dropdown-item" href="single.php">Single</a>
                                        <a class="dropdown-item" href="cart.php">Cart</a>
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        <a class="dropdown-item" href="confermation.html">Confermation</a>
                                        <a class="dropdown-item" href="login.php">Login</a>
                              
                                        <a class="dropdown-item" href="generic.html">Generic</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                        <a class="dropdown-item" href="Favorite.php">Favorite</a>
                                      </div>
                                    </li>
                            </ul>
                          </div>
                    </div>
                </nav>
            </header>
            <!-- End Header Area -->

            <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Add Product</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="index.php">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="cart.php">Add Product</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

		<!-- Start My Account -->
		<div class="container">
			<div class="order-tracking">
				<p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<input type="text" name="p_name" placeholder="Title" onfocus="this.placeholder=''" onblur="this.placeholder = 'Order ID'" required class="common-input mt-20">
					<input type="text" placeholder="Owner" onfocus="this.placeholder=''" onblur="this.placeholder = 'Billing Email Address'" required class="common-input mt-20">
					<input type="number" onchange="setTwoNumberDecimal" min="0" max="999999999" step="0.25"  name="p_price" placeholder="ราคา" onfocus="this.placeholder=''" onblur="this.placeholder = 'ราคา'" required class="common-input mt-20 w-25">
					<input type="number" placeholder="Age(year)" name="p_age" onfocus="this.placeholder=''" onblur="this.placeholder = 'อายุของรองเท้า'" required class="common-input mt-20 w-25">
					<select name="p_cate" required class="common-input mt-20 w-50 mr-50"  [single]>
						<option value="0">รองเท้ากีฬา</option>
						<option value="1">รองเท้าแตะ</option>
						<option value="2">รองเท้าส้นสูง</option>
						<option value="3">รองเท้าผ้าใบ</option>
					</select>
				  	  <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" class="view-btn  mt-20"><br>
					<textarea name="p_dtl" placeholder="รายละเอียดสินค้า" rows="5" cols="50" required class="common-input "></textarea>

				  <button type="submit" class="view-btn color-2 mt-20 mr-20 w-100"><span>Add Item</span></button>
				</form>
				<!--<form action="upload.php" method="post" enctype="multipart/form-data">

					<button  value="Upload Image" class="view-btn color-2 mt-20 mr-20 w-100"><span>upload</span></button>
					</form>-->
			</div>
		</div>
		<!-- End My Account -->


            <!-- Start Most Search Product Area -->
            <section class="section-half">
                <div class="container">
                    <div class="organic-section-title text-center">
                        <h3>Most Searched Products</h3>
                    </div>
                    <div class="row mt-30">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r1.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Blueberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r2.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Cabbage</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r3.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Raspberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r4.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Kiwi</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r5.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore Bell Pepper</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r6.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Blackberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r7.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Brocoli</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r8.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Carrot</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r9.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Strawberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r10.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Prixma MG2 Light Inkjet</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r11.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Cherry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00 <del>$340.00</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r12.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Beans</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00 <del>$340.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Most Search Product Area -->

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
              <div class="container">
                <div class="row">

                  <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                      <h6>Newsletter</h6>
                      <p>Stay update with our latest</p>


                      <form action="sentemailtoSQL.php" method="post" name="form" class="form-box">
                        <div class="d-flex flex-row">

                          <input class="form-control" type="email" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                          <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                          <div style="position: absolute; left: -5000px;">
                              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                          <!-- <div class="col-lg-4 col-md-4">
                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                          </div>  -->
                        </div>
                        <div class="info"></div>
                        </form>

                      </div>
                  </div>
                  <div class="col-lg-3  col-md-6 col-sm-6">
                    <!--<div class="single-footer-widget mail-chimp">
                      <h6 class="mb-20">Instragram Feed</h6>
                      <ul class="instafeed d-flex flex-wrap">
                        <li><img src="img/i1.jpg" alt=""></li>
                        <li><img src="img/i2.jpg" alt=""></li>
                        <li><img src="img/i3.jpg" alt=""></li>
                        <li><img src="img/i4.jpg" alt=""></li>
                        <li><img src="img/i5.jpg" alt=""></li>
                        <li><img src="img/i6.jpg" alt=""></li>
                        <li><img src="img/i7.jpg" alt=""></li>
                        <li><img src="img/i8.jpg" alt=""></li>
                      </ul>
                    </div>-->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                      <h6>Follow Us</h6>
                      <p>Let us be social</p>
                      <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">

                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>

              </div>
            </footer>
            <!-- End footer Area -->
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/ion.rangeSlider.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/main.js"></script>

        </body>
    </html>
