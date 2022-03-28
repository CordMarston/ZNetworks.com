<section class="contact bg-cust-blue text-white py-5" id="consult">
	<div class="container">
		<div class="row pb-md-5">
			<div class="col pb-6">
				<p class="text-center text-uppercase">Contact Us</p>
				<h2 class="text-center">Get a Quote Today</h2>
			</div>
		</div>
		<form id="cForm">
			<div class="row">
				<div class="col-md-4">
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="text" name="firstname" class="form-control z-form" placeholder="First Name"> 
						</div>
						<div class="form-group ml-md-4 z-form-box">
							<input type="text" name="lastname" class="form-control z-form" placeholder="Last Name">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="text" name="position" class="form-control z-form" placeholder="Position"> 
						</div>
					</div>
					<div class="d-md-flex ">
						<div class="form-group z-form-box"> 
							<input type="email" name="email" class="form-control z-form" placeholder="Email">
						</div>
						<div class="form-group ml-md-4 z-form-box">
							<input type="phone" name="phone" class="form-control z-form" placeholder="Phone">
						</div>
					</div>
				</div>	
				<div class="col-md-4">
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="text" name="company" class="form-control z-form" placeholder="Company Name">
						</div>	
					</div>
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="text" name="website" class="form-control z-form" placeholder="Company Website">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="text" name="notes" class="form-control z-form" placeholder="Comments">
						</div>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="number" name="servers" class="form-control z-form" placeholder="Number of Servers"> 
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="number" name="locations" class="form-control z-form" placeholder="Number of Locations">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group z-form-box">
							<input type="number" name="workstations" class="form-control z-form" placeholder="Number of Workstations">
						</div>
					</div>		
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<p class = "text-uppercase font-italic">GET A QUOTE TO SEE HOW Z NETWORKS CAN IMPROVE YOUR IT SITUATION. </p>
					<!-- OUR FREE CONSULTATION INCLUDES COMPARING CURRENT IT VS Z NETWORKS PRICING, NETWORK OPTIMIZATION, AND MORE! -->
						<button id="cButton" type = "button" class="btn btn-cust-orange py-2 px-3 float-center">Get a Quote</button>
				</div>
			</div>
					
		</form>
	</div>		
</section>
<footer>
	<div class="container">
		<div class="row py-4">
			<div class="col-md-3 p-3 text-white">
				<p class="pb-2"><img src="/img/logo-white.png" style="width:80%;"></p>	
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
<div class="icon-bar text-white">
  <a href="https://www.facebook.com/ExecutiveIT/" class="facebook text-white"><i class="fab fa-facebook-f"></i></a>
  <a href="https://twitter.com/znetworksIT" class="twitter"><i class="fab fa-twitter"></i></a>
  <a href="https://www.linkedin.com/company/z-networks-inc" class="linkedin"><i class="fab fa-linkedin"></i></a>
  <a href="https://www.instagram.com/znetworksit/" class="instagram"><i class="fab fa-instagram"></i></a>
</div>
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