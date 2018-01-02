<?php
	//echo $this->data;
//require_once('header.php'); 
 // $cssURL = PUBLIC_URL . 'css' . DS;
$jsURL  = PUBLIC_URL . 'js' . DS;
$publicURL= PUBLIC_URL;
require_once ('/../layout/header.php');
require_once ('/../layout/menu.php');
?>
<div id="maincontainer">
	
	<div class="container">
		<br>
		
		<h2 class="error404"><span>Error 404!</span></h2> <br><br>
		
		
		<div class="container centeralign">
			
			<img src="img/error-404.png" alt="" title="">
			
			<br>   <br>   <br>
			<h2 class="font48">  We are Sorry !!!</h2>
			<h2>The page you are looking for could not found. <br> Please Check Top Menu.</h2>


			
			
		</div>
		
		
		
		
	</div>
	
</div>

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
?>