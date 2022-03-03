<section class="contact bg-cust-blue text-white py-md-5 pt-5" id="consult">
	<div class="container">
		<div class="row pb-md-5">
			<div class="col pb-6">
				<p class="text-center text-uppercase">Contact Us</p>
				<h2 class="text-center">Schedule a Free IT Consultation Today</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 ">
				<form id="cForm">
				<div class="d-md-flex">
					<div class="form-group z-form-box">
						<input type="text" name="firstname" class="form-control z-form" placeholder="First Name"> 
					</div>
					<div class="form-group ml-md-4 z-form-box">
						<input type="text" name="lastname" class="form-control z-form" placeholder="Last Name">
					</div>
				</div>
				<div class="d-md-flex pt-md-3">
					<div class="form-group z-form-box"> 
						<input type="email" name="email" class="form-control z-form" placeholder="Email">
					</div>
					<div class="form-group ml-md-4 z-form-box">
						<input type="phone" name="phone" class="form-control z-form" placeholder="Phone">
					</div>
				</div>
				<div class="d-md-flex pt-md-3">
					<div class="form-group z-form-box">
						<input type="date" name="date" class="form-control z-form" placeholder="Consultation Date">
					</div>
					<div class="form-group ml-md-4 z-form-box">
						<input type="time" name="time" class="form-control z-form" placeholder="Consultation Time" value="08:00">
					</div>
				</div>
				<div class="d-md-flex pt-md-3">
					<div class="form-group z-form-box">
						<input type="company" name="text" class="form-control z-form" placeholder="Company Name">
					</div>

				</div>
				</form>
				<div class="d-md-block pt-md-3 text-center align-self-center">
					<button id="cButton" class="btn btn-cust-orange py-2 px-3 float-md-right">Schedule Appointment</button>
				</div>
			</div>
			<div class="col-md-6 align-self-center pl-md-5 text-uppercase font-italic mobile-space">
					<p>SCHEDULE AN APPOINTMENT TO SEE HOW Z NETWORKS CAN IMPROVE YOUR IT SITUATION. OUR FREE CONSULTATION INCLUDES COMPARING CURRENT IT VS Z NETWORKS PRICING, NETWORK OPTIMIZATION, AND MORE!</p>
			</div>
		</div>
		
	</div>
</section>
<section class="feedback py-5 bg-cust-dark" style="height:500px;">
<div class="container">
	<div class="row">
		<div class="col">
			<p class="text-center text-uppercase">Feedback</p>
			<h2 class="text-center">Live Feedback on Issues We Resolved.</h2>
		</div>
	</div>
</div>

<div class="container">
   	<div id="feedbackSlider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php 
			
			mysql_connect("192.168.2.75", "znwsfeedback", "1Q2HCx#e45") or die(mysql_error());
			mysql_select_db("zadmin_noctester") or die(mysql_error()); 
			$count = 0;
			$getF = mysql_query("SELECT notes, rating1, rating2, rating3, rating4 FROM feedback WHERE approved='1' AND notes!='' ORDER BY id DESC LIMIT 10");
			while($f = mysql_fetch_array($getF)) {
			?>
			<div class="carousel-item<?php if($count == 0) { echo ' active';}?>">
				<div class="container">
					<div class="row">
					<?php
						if($f['rating1'] == 1) {
							$lis.= '<li>Resolved Quickly</li>';
						}
						if($f['rating2'] == 1) {
							$lis.= '<li>Excellent Communication</li>';
						}
						if($f['rating3'] == 1) {
							$lis.= '<li>Transparent Resolution</li>';
						}
						if($f['rating4'] == 1) {
							$lis.= '<li>Prompt Response</li>';
						}
						echo '<div class="col-12"><i class="fas fa-quote-left fa-3x text-grey"></i><p class="text-center">'.$f['notes'].'</p>';
						if(!empty($lis)) {
							echo '<div class="col-md-3 offset-md-3"><ul class="">'.$lis.'</ul></div>';
						}
						echo '<i class="fas fa-quote-right fa-3x text-grey float-right"></i></div>';
						$lis = '';
					?>
					</div>
				</div>
			</div>
			<?php $count++; } ?>

		</div>
	</div>
</div>
</section> 
<footer>
	<div class="container">
		<div class="row py-4">
			<div class="col-md-3 p-3 text-white">
				<p class="pb-2"><img src="img/logo-white.png" style="width:80%;"></p>	
				<p class="font-weight-bold pt-3">Sales</p>
				<div class="row">
					<div class="col-2">
						<i class="fas fa-envelope header-icon"></i>
					</div>
					<div class="col-10">
						sales@znws.com
					</div>
				</div>
				<div class="row">
					<div class="col-2">
						<i class="fas fa-phone header-icon"></i>
					</div>
					<div class="col-10">
						1(800) 525-6504
					</div>
				</div>
				 <p class="font-weight-bold pt-3">Helpdesk</p>
				<div class="row">
					<div class="col-2">
						<i class="fas fa-envelope header-icon"></i>
					</div>
					<div class="col-10">
						helpdesk@znws.com
					</div>
				</div>
				<div class="row">
					<div class="col-2">
						<i class="fas fa-phone header-icon"></i>
					</div>
					<div class="col-10">
						1(206) 774-0237
					</div>
				</div>
				<p class="font-weight-bold pt-3">Billing</p>
				<div class="row">
					<div class="col-2">
						<i class="fas fa-envelope header-icon"></i>
					</div>
					<div class="col-10">
						billing@znws.com
					</div>
				</div>
				<div class="row">
					<div class="col-2">
						<i class="fas fa-phone header-icon"></i>
					</div>
					<div class="col-10">
						1(206) 922-2219
					</div>
				</div>
			</div>
			<div class="col-md-4 py-4">
			<div class="fb-page" data-href="https://www.facebook.com/ExecutiveIT/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ExecutiveIT/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ExecutiveIT/">Z Networks</a></blockquote></div>
			</div>
			<div class="col-md-5 p-3 align-self-center">
				<div id="map"></div>
			</div>
		</div>
	</div>
</footer>
<section class="copyright py-3">
	<div class="container">
		<div class="row-fluid text-center text-white">
			&copy; Copyright <?php echo date("Y");?> Z Networks. All rights reserved.
		</div>
	</div>
</section>
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

$(window).scroll(function(){
    var scrollPos = $(document).scrollTop();
    if(scrollPos > 150) {
		$('#znws-navbar').addClass('stuck');
	} else {
		$('#znws-navbar').removeClass('stuck');
	}
});
</script>
<script async defer src="assets/maps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49115519-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-49115519-1');
</script>

</body>
</html>