<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta name="viewport" content="width=device-width" />
	<title>Medico - Contact page</title> 

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="user/css/foundation.min.css">
	<link rel="stylesheet" href="user/css/normalize.css">
	<link rel="stylesheet" href="user/css/fgx-foundation.css" />
	<!--[if IE 8]>
	<link rel="stylesheet" href="user/css/ie8-grid-foundation-4.css" />
	<![endif]-->
	<!-- Font Awesome - Retina Icons -->
	<link rel="stylesheet" href="user/plugins/fontawesome/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="user/css/style.css" />
	
	<script src="user/js/vendor/jquery.js"></script>

	<script src="user/js/vendor/custom.modernizr.js"></script>
	<script src="user/js/foundation.min.js"></script>
	<script src="user/js/foundation/foundation.js"></script>
	<script src="user/js/foundation/foundation.topbar.js"></script>

	<!-- Scripts Initialize -->
	<script src="user/js/app-head-calls.js"></script>
	<script src="user/js/jquery.validate.min.js"></script>
	
	<!-- for Google Map-->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTSJ4nigiCUcS_KdUEvTfegUWC2EPbP_Q&amp;sensor=false"></script>
	<script type="text/javascript">
	function initialize() {
	var mapOptions = {
	  center: new google.maps.LatLng(35.58329 , -98.4375),
	  zoom: 15,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"),
		mapOptions);
	var myLatlng = new google.maps.LatLng(35.58329 , -98.4375);
	var marker = new google.maps.Marker({
		position: myLatlng,
		title:"Address"
	});

	// To add the marker to the map, call setMap();
	marker.setMap(map);
	}
	</script>      
</head>
<body onload="initialize()">

<!-- Begin Main Wrapper -->
<!-- Begin Main Wrapper -->
<div class="main-wrapper">
	<!-- Main Navigation -->  
	<header class="row main-navigation">
		<div class="large-3 columns">	
			<a href="index.html" id="logo"><img src="user/images/logo.png" alt="Medico Logo" /></a>
		</div>
		<div class="large-9 columns">			
			<nav class="top-bar">
				<ul class="title-area">
				  <!-- Title Area -->
				  <li class="name"></li>
				  <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				  <li class="toggle-topbar menu-icon"><a href="#"><span>Main Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Left Nav Section -->
					  <ul class="right">
						<li class="has-dropdown"><a href="#" class="active">Home</a>
						  <ul class="dropdown">
							<li><a href="index2.html">Variation 2</a></li>
							<li><a href="index3.html">Variation 3</a></li>
							<li><a href="index4.html">Variation 4</a></li>
							<li><a href="index5.html">Variation 5</a></li>
							<li><a href="index6.html">Variation 6</a></li>
						  </ul>
						</li>
						<li class="has-dropdown"><a href="#">Features</a>
						  <ul class="dropdown">
                          	<li><a href="about.html">About page</a></li>
							<li><a href="grid.html">Grid</a></li>
							<li><a href="navigation.html">Navigation</a></li>
							<li><a href="buttons.html">Buttons</a></li>
							<li><a href="forms.html">Forms</a></li>
							<li><a href="typography.html">Typography</a></li>
							<li><a href="orbit.html">Orbit - Foundation Slider</a></li>
							<li><a href="clearing.html">Clearing -  Responsive Lightboxes</a></li>
							<li><a href="dropdown.html">Dropdown</a></li>
							<li><a href="joyride.html">Joyride</a></li>
							<li><a href="magellan.html">Magellan</a></li>
							<li><a href="reveal.html">Reveal - Modal dialogs / pop-up windows</a></li>
							<li><a href="section.html">Section - Accordion, Tabs &amp; Vertical Nav</a></li>
							<li><a href="tooltips.html">Info tooltips</a></li>
						  </ul>
						</li>
						
						<li class="has-dropdown"><a href="#">Shortcodes</a>
						  <ul class="dropdown">
                          	<li><a href="shortcodes.html">Main elements</a></li>
							<li><a href="alert-boxes.html">Alert Boxes</a></li>
							<li><a href="panels.html">Panels</a></li>
							<li><a href="pricing-tables.html">Pricing Tables</a></li>
							<li><a href="bars.html">Progress Bars</a></li>
							<li><a href="tables.html">Tables</a></li>
							<li><a href="thumbnails.html">Thumbnails</a></li>
							<li><a href="flex-video.html">Flex Video</a></li>
							
						  </ul>
						</li>                    
						<li class="has-dropdown"><a href="#">Add-ons</a>
						  <ul class="dropdown">
							<li><a href="icons.html">Retina Icons - Font Awesome</a></li>
						  </ul>
						</li>
						<li class="has-dropdown"><a href="#">Portfolio</a>                                       
						  <ul class="dropdown"> 
                          		<li><a href="portfolio.html">Portfolio 4 Columns</a> </li>                       
								<li><a href="portfolio2.html">Portfolio 3 Columns</a></li>
								<li><a href="portfolio-single.html">Single item</a></li>
							</ul>
						</li>
						<li class="has-dropdown"><a href="#">Blog</a>                    
						  <ul class="dropdown">
							<li><a href="blog.html">1 Column, Default</a></li>
							<li><a href="blog-2column.html">2 Columns</a></li>
							<li><a href="blog-3column-no-sidebar.html">3 Columns, No sidebar</a></li>
							<li><a href="blog-4column-no-sidebar.html">4 Columns, No sidebar</a></li>
							<li><a href="blog-single.html">Blog Inner</a></li>
						  </ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					  </ul>
					  <!-- End Left Nav Section -->					 
				</section>
			</nav>
		</div>
	</header>
    </div>
      <!-- Main Content Top --> 
      <div id="map_canvas"></div> 
    <div class="main-wrapper">       
	<div class="content_wrapper">
		<div class="row">
			<div class="large-3 columns">
				<h3 class="contact_title">Contact info</h3>
				<div class="divider"><span></span></div>
				<div class="contact_info">
					<ul class="about-info garnik">
						<li><i class="icon-home"></i><span>lorem ipsum street</span></li>
						<li><i class="icon-phone"></i><span>+399 (500) 321 9548</span></li>
						<li><i class="icon-envelope"></i><a href="mailto:info@Medico.com">info@Medico.com</a></li>
					</ul>
				</div>
			</div>
			<div class="large-3 columns">
				
				<h3 class="contact_title">Where to find us</h3>
                <div class="divider"><span></span></div>
				<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi 		                   accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Clatss aptent taciti sociosqu ad litora </p>
			</div>

			<div class="large-6 columns">
				<h3 class="contact_title">Send us a message</h3>
                <div class="divider"><span></span></div>
					<div id="status"></div>
					<div class="contact_form">
						<div class="row">
							<form method="POST" action="contact/process-form.php" class="contactForm">
								<div class="small-4 columns">
									<input type="text" placeholder="Name" id="contactname" name="contactname" />
									<?php if(isset($nameError) && $nameError != ''): ?><span class="errorarr"><?php echo $nameError;?></span><?php endif;?>
								</div>
								<div class="small-4 columns">
									<input type="text" placeholder="E-mail" id="contactemail" name="contactemail" />
									<?php if(isset($emailError) && $emailError != ''): ?><span class="errorarr"><?php echo $emailError;?></span><?php endif;?>
								</div>
								<div class="small-4 columns">
									<input type="text" placeholder="Website" id="contactwebsite" name="contactwebsite" />
								</div>
								<div class="small-12 columns">
									<textarea cols="10" rows="15" placeholder="Message" id="contactmessage" name="contactmessage"></textarea>
									<?php if(isset($messageError) && $messageError != ''): ?><span class="errorarr"><?php echo $messageError;?></span><?php endif;?>
								</div>
								<div class="small-4 columns">
									<input type="submit" class="button right" value="Send message" name="send" id="send" />
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>   
<footer class="footer_wrapper">
	<div class="row footer-part">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-3 columns">
					<h4 class="footer-title">About Us</h4>
					<div class="divdott"></div>
					<img class="botlogo" src="user/images/botlogo.png" alt="" />
					<div class="footer_part_content">
						<p>Medico Theme Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
					</div>
				</div>
				<div class="large-3 columns">
					<h4 class="footer-title">Latest Posts</h4>
					<div class="divdott"></div>
					<div class="footer_part_content">
						<ul class="latest-posts">
							<li>
								Update: WordPress Theme Submission Requirements
								<div class="divline"><span></span></div>
							</li>
							<li>
								Envato's Most Wanted - $5,000 Reward for the First 15 Hosting Templates
								<div class="divline"><span></span></div>
							</li>
							<li>
								Does a well designed thumbnail increase your sales?
								<div class="divline"><span></span></div>
							</li>
						</ul>
					</div>
				</div>
				

				<div class="large-3 columns">
					<h4 class="footer-title">Contact info</h4>
					<div class="divdott"></div>
					<div class="footer_part_content">
						<p>Medico Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id </p>
						<ul class="about-info">
							<li><i class="icon-home"></i><span>lorem ipsum street</span></li>
							<li><i class="icon-phone"></i><span>+399 (500) 321 9548</span></li>
							<li><i class="icon-envelope"></i><a href="mailto:info@Medico.com">info@Medico.com</a></li>
						</ul>
						<ul class="social-icons">
						<li><a href="#"><i class="icon-pinterest"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
					</ul>
					</div>
				</div>
					
				<div class="large-3 columns"> 
					<h4 class="footer-title">Quick Contact</h4>
					<div class="divdott"></div>
					<form method="POST" action="#" id="footer-contact-form">
						<div class="footer_part_content">
							<div class="row">
								<div class="large-6 columns">
									<input type="text" placeholder="Name"  name="name" />
								</div>
								<div class="large-6 columns">
									<input type="text" placeholder="E-mail" name="email" />
								</div>
								<div class="large-12 columns">
									<textarea cols="10" rows="15"  name="message" placeholder="Message"></textarea>
								</div>
								<div class="large-12 columns text-right">
									<input type="submit" class="button" value="Send" name="send" />
								</div>	
							</div>
						</div>
					</form>
				</div> 
			</div>
		</div>
	</div>
	
	<div class="privacy footer_bottom">
		<div class="footer-part">
			<div class="row">
				<div class="large-6 columns">
					<p >&copy; 2013 Medico Theme, All Rights Reserved</p>
				</div>
				<div class="large-2 columns right">
					<div class="row collapse">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script>
	$(document).foundation();
</script>
 <script type="text/javascript">
<!-- Contact form validation
jQuery(document).ready(function(){

  jQuery(".contactForm").validate({
	submitHandler: function() {
	
		var postvalues =  jQuery(".contactForm").serialize();
		
		jQuery.ajax
		 ({
		   type: "POST",
		   url: "contact/process-form.php",
		   data: postvalues,
		   success: function(response)
		   {
		 	 jQuery("#status").html(response).show('normal');
		     jQuery('#contactmessage, #contactemail, #contactname, #contactwebsite').val("");
		   }
		 });
		return false;
		
    },
	focusInvalid: true,
	focusCleanup: false,
	//errorLabelContainer: jQuery("#registerErrors"),
  	rules: 
	{
		contactname: {required: true},
		contactemail: {required: true, minlength: 6,maxlength: 50, email:true},
		contactmessage: {required: true, minlength: 6}
	},
	
	messages: 
	{
		contactname: {required: "This field is required"},
		contactemail: {required: "This field is required", email: "Please provide a valid e-mail"},
		contactmessage: {required: "This field is required"}
	},
	
	errorPlacement: function(error, element) 
	{
		error.insertBefore(element);
		jQuery('<span class="errorarr"></span>').insertBefore(element);
	},
	invalidHandler: function()
	{
		//jQuery("body").animate({ scrollTop: 0 }, "slow");
	}
	
});
});
-->
</script>
</body>
</html>