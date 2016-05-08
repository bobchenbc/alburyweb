<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
	<?php
	 include("head.php");
	?>

	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
	<title>Albury Burvale Motor Inn</title>
</head>
<body>
<!-- banner -->
<div class="banner">
	<?php include('header.html');?>
		<div class="banner-info">
			<div class="container">
				<div class="details-1">
					<div class="col-sm-10 dropdown-buttons">   
						<div class="col-sm-4 dropdown-button">           			
							<div class="book_date">
								<form>
									<input class="date" id="datepicker" type="text" value="Check In" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Check In';}">
								</form>
							</div>		
						</div>
					  <div class="col-sm-4 dropdown-button">           			
							<div class="book_date">
								<form>
									<input class="date1" id="datepicker1" type="text" value="Check Out" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Check Out';}">
								</form>
							</div>		
						</div>
						<div class="col-sm-4 dropdown-button">
							 <select id="country" >
								<option value="null">Double Room</option>
								<option value="null">Sigle Room</option>         
								<option value="AX">Suit Room</option>
								<option value="AX">Guest Room</option>
							 </select>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="col-sm-2 submit_button"> 
						<form action="details.html">
							<input type="submit" value="Search">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
</div>
	<!-- hod -->
	<div class="hod">
		<div class="container">
			<div class="col-md-6 hod-left">
				<img src="images/14.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 hod-right">
				<h2>Publishing packages and web page</h2>
				<p>The point of using as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- hod -->
	<!-- tels -->
	<div class="tels">
		<div class="container">
			<div class="col-md-4 tels-left">
				<h4>Single room <span>110$</span></h4>
				<img src="images/4.jpg" class="img-responsive" alt="">
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="col-md-4 tels-left">
				<h4>Double room <span>150$</span></h4>
				<img src="images/9.jpg" class="img-responsive" alt="">
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="col-md-4 tels-left">
				<h4>Private room <span>200$</span></h4>
				<img src="images/3.jpg" class="img-responsive" alt="">
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- tels -->
	<!-- special -->
	<div class="special">
		<div class="container">
			<div class="spe-info">
				<h3>Special Offer</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			</div>
		</div>
	</div>
	<!-- special -->
	<!-- quick -->
	<div class="quick">
		<div class="container">
			<div class="col-md-4 quick-left">
				<h3>Most Popular</h3>
					<ul>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
						<li><a href="#">Distribution of letters, as opposed</a></li>
					</ul>
			</div>
			<div class="col-md-4 quick-left">
				<h3>News &amp; Events</h3>
				<div class="new">
					<div class="n-lft">
						<h5>10</h5>
						<h6>Sep</h6>
					</div>
					<div class="n-rgt">
						<p>Lorem Ipsum is that it has a more-or-less normal<a href="#">More</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-1">
					<div class="n-lft">
						<h5>15</h5>
						<h6>Sep</h6>
					</div>
					<div class="n-rgt">
						<p>That it has a more-or-less normal distribution<a href="#">More</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-4 quick-left">
				<h3>Quick Message</h3>
					<form>
						<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<input type="submit" value="Submit">
					</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- quick -->
<!-- footer -->
<?php include("footer.html");?>	
<!-- footer -->
<!--
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
</div>
-->
</body>
</html>
<?php 
	$HtmlCode= ob_get_contents(); 
	ob_end_flush();
	$fh=fopen('test.html','w'); 
	fwrite($fh,$HtmlCode);
	fclose($fh);