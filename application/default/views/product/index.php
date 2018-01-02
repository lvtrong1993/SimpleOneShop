<?php //require_once('header.php'); 
 // $cssURL = PUBLIC_URL . 'css' . DS;
  $jsURL  = PUBLIC_URL . 'js' . DS;
  $publicURL= PUBLIC_URL;
  require_once ('/../layout/header.php');
  require_once ('/../layout/menu.php');
  ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SimpleOne - A Responsive Html5 Ecommerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=100" >
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href="<?php echo $cssURL?>bootstrap.css" rel="stylesheet">
    <link href="<?php echo $cssURL?>bootstrap-responsive.css" rel="stylesheet">

    <link href="<?php echo $cssURL?>style.css" rel="stylesheet">
    <link href="<?php echo $cssURL?>flexslider.css" type="text/css" media="screen" rel="stylesheet"  />

    <link href="<?php echo $cssURL?>jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo $cssURL?>cloud-zoom.css" rel="stylesheet">
    <link href="<?php echo $cssURL?>portfolio.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/ico/favicon.html">
</head> -->
<body>

<!-- Header Start -->
<?php  //echo PUBLIC_PATH;  require_once('menu.php'); ?> 
<!-- Header End -->

<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
      <div class="flexslider" id="mainslider">
        <ul class="slides">
          <li>
            <img src="<?php echo $publicURL?>img\banner1.jpg" alt="" />
          </li>
          <li>
            <img src="<?php echo $publicURL?>img\banner2.jpg" alt="" />
          </li>
          <li>
            <img src="<?php echo $publicURL?>img\banner1.jpg" alt="" />
          </li>
          <li>
            <img src="<?php echo $publicURL?>img\banner2.jpg" alt="" />
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Slider End-->
  
  <!-- Section Start-->
  <section class="container otherddetails">
    <div class="otherddetailspart">
      <div class="innerclass free">
        <h2>Free shipping</h2>
        All over in world over $200 </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass payment">
        <h2>Easy Payment</h2>
        Payment Gatway support </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass shipping">
        <h2>24hrs Shipping</h2>
        Free For UK Customers </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass choice">
        <h2>Over 5000 Choice</h2>
        50,000+ Products </div>
    </div>
  </section>
  <!-- Section End-->
  
  <!-- Featured Product-->
  <section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product1.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product2.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="offer tooltip-test" >Offer</span>
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product1.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product2.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  
  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="new tooltip-test" >New</span>
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $publicURL?>img\product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  
  <!-- Section  Banner Start-->
  <section class="container smbanner">
    <div class="row">
      <div class="span3"><a href="#"><img src="<?php echo $publicURL?>img\smbanner.jpg" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="<?php echo $publicURL?>img\smbanner.jpg" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="<?php echo $publicURL?>img\smbanner.jpg" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="<?php echo $publicURL?>img\smbanner.jpg" alt="" title=""></a>
      </div>
    </div>
  </section>
  <!-- Section  End-->
  
  <!-- Popular Brands-->
  <section id="popularbrands" class="container mt40">
    <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
    <div class="brandcarousalrelative">
      <ul id="brandcarousal">
        <li><img src="<?php echo $publicURL?>img\brand1.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand2.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand3.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand4.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand1.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand2.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand3.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand4.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand1.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand2.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand3.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $publicURL?>img\brand4.jpg" alt="" title=""/></li>
      </ul>
      <div class="clearfix"></div>
      <a id="prev" class="prev" href="#">&lt;</a>
      <a id="next" class="next" href="#">&gt;</a>
    </div>
  </section>
  
  <!-- Newsletter Signup-->
  <section id="newslettersignup" class="mt40">
    <div class="container">
      <div class="pull-left newsletter">
        <h2> Newsletters Signup</h2>
        Sign up to Our Newsletter & get attractive Offers by subscribing to our newsletters. </div>
      <div class="pull-right">
        <form class="form-horizontal">
          <div class="input-prepend">
            <input type="text" placeholder="Subscribe to Newsletter" id="inputIcon" class="input-xlarge">
            <input value="Subscribe" class="btn btn-orange" type="submit">
            Sign in </div>
        </form>
      </div>
    </div>
  </section>
</div>
<!-- /maincontainer -->

<!-- Footer -->
<?php
require_once('/../layout/footer.php');
?>
<!-- Footer End -->
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $jsURL?>jquery.js"></script> 
<script src="<?php echo $jsURL?>bootstrap.js"></script> 
<script src="<?php echo $jsURL?>respond.min.js"></script> 
<script src="<?php echo $jsURL?>application.js"></script> 
<script src="<?php echo $jsURL?>bootstrap-tooltip.js"></script> 
<script defer src="<?php echo $jsURL?>jquery.fancybox.js"></script> 
<script defer src="<?php echo $jsURL?>jquery.flexslider.js"></script> 
<script type="text/javascript" src="<?php echo $jsURL?>jquery.tweet.js"></script> 
<script  src="<?php echo $jsURL?>cloud-zoom.1.0.2.js"></script> 
<script  type="text/javascript" src="<?php echo $jsURL?>jquery.validate.js"></script> 
<script type="text/javascript"  src="<?php echo $jsURL?>jquery.carouFredSel-6.1.0-packed.js"></script> 
<script type="text/javascript"  src="<?php echo $jsURL?>jquery.mousewheel.min.js"></script> 
<script type="text/javascript"  src="<?php echo $jsURL?>jquery.touchSwipe.min.js"></script> 
<script type="text/javascript"  src="<?php echo $jsURL?>jquery.ba-throttle-debounce.min.js"></script> 
<script src="<?php echo $jsURL?>jquery.isotope.min.js"></script> 
<script defer src="<?php echo $jsURL?>custom.js"></script>
</body>

<!-- Mirrored from www.pxcreate.com/template/simpleone/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 17:53:17 GMT -->
</html>