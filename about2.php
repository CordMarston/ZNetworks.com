<?php 
$title = ' - About Us';
include('includes/header.inc.php');
mysql_connect("localhost", "znetworks", "utaqavaze") or die(mysql_error());
mysql_select_db("zadmin_employees") or die(mysql_error());
$getRandom = mysql_query("SELECT firstname, lastname, picture, whyZ FROM employees WHERE whyZ!='' AND active='0' AND picture!='' ORDER BY RAND() LIMIT 1");
$e = mysql_fetch_array($getRandom);
?>
<style>.blockquote-footer {color:#fff;}</style>
<section id="usHeaderSlider" class = "about-us-caro">
<div class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active d-flex">
			<div class="carousel-caption ">
				<div class="col align-baseline text-center position-absolute fixed-bottom mb-5">
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="py-5">
<div class="container">
	<div class="row">
		<div class="col">
			<center><p class="text-uppercase">About Z Networks</p></center>
			<h2 class = "text-center">Z Networks started with a little capitol, a big idea, and a huge amount of ambition.</h2>
			</br>
			<h2 class = "text-center">20 years, 1000 clients, 5200 projects, and 395,000 tickets later, we have a bit more capitol, even bigger ideas, and the ambition has never been so focused.</h2>
			<div class="row">
				<div class="col-md-3 p-3">
					<div class="p-lg-5 py-md-5 bg-cust-dark text-center ">
					<h1 class="text-blue" id="years_count">20</h1>
					Years Experience
					</div>
				</div>
				<div class="col-md-3 p-3">
					<div class="p-lg-5 py-md-5 bg-cust-dark text-center ">
					<h1 class="text-blue" id="tickets_count">395,000+</h1>
					Closed Tickets
					</div>
				</div>
				<div class="col-md-3 p-3">
					<div class="p-lg-5 py-md-5 bg-cust-dark text-center">
					<h1 class="text-blue" id="devices_count">100,000+</h1>
					Devices Managed
					</div>
				</div>
				<div class="col-md-3 p-3"> 
					<div class="p-lg-5 py-md-5 bg-cust-dark text-center">
					<h1 class="text-blue" id="offices_count">8</h1>
					Field Offices
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class = "locations py-5" id = "locations">	
	<div class="container">
	<h3 class = "text-center pb-5">Locations</h3>
			<div class="row bg-cust-dark">	
				<div class="col-sm-6 bg-cust-dark my-auto"> 
					<div class="align-self-center text-center"><img class = "img-fluid py-4" src="/img/office-photo/aaa.jpg" alt="Z Network Logo"></div>
				</div>
				<div class="col-sm-6 bg-cust-light" id = "locationChange">
					<div class="align-center text-center d-none">
						<div class="row py-2">
							<a class = "col-sm-4 text-center" href = "#" id = "local">Location</a>
							<a class="col-sm-4 text-center" href = "#" id = "cloud">Cloud</a>
							<a class="col-sm-4 text-center" href = "#" id = "expand">Expansion</a>
						</div>
					</div>
					<div class="vegas_details py-2">
						<div class="py-2">
							<h5 class = "text-center">NEW LOCATION - Las Vegas, Nevada</h5>
							<a class = "local-link text-center" href="https://goo.gl/maps/1NJSUFznaqACNoeZA" target = "blank"><p>1515 E Tropicana Ave, Las Vegas, NV 89119</p></a>
						</div>
						<p class = "text-left ml-5">Opened in 2017 and moved in 2021</p>
						<ul class="ml-5">
							<li>Network Operations Center</li>
							<li>Field Office</li>
							<li>Escalation</li>
							<li>Development</li>
							<li>Frontline Team</li>
							<li>Data Center</li>
							<li>Sales Team</li>
						</ul>
						<center>
							<button class="btn btn-sm btn-primary" id="infra">More on Vegas</button>
						</center>
						<div class="clearfix"></div>
					</div>
					<div class="vegas_infra" style="display:none;">
						<h5 class = "py-2 text-center">Vegas Operations</h5>
						<p class = "text-left ml-5 mr-3">Our newly expanded office features a wide-open floor plan with desk space for 80 additional IT Support staff, dedicated training space, a large break area, 24/7 on premise security, key card access, private offices, and a dedicated data center at full capacity hosting 40 racks with up to 1,680 servers hosting 5.6 million GB's of data.</p>
						<center>
							<button class="btn btn-sm btn-primary" id="infra_back">Location Info</button>
						</center>
					</div>
			</div>
		</div>

		<div class="row">	
			<div class="col-sm-3 bg-cust-light zoom">
				<div class="align-self-center text-center"><img class = "img-fluid py-3" src="/img/office-photo/Seattle-inside-01.jpg" alt="Office Photo"></div>
				<div class="py-3">
					<h5 class = "text-center">Seattle, Washington</h5>
					<a class = "local-link text-center" href="https://goo.gl/maps/3KzPEbLzgpsk5QqK8" target = "blank"><p>655 S. Orcas St Suite 200, Seattle, WA 98108</p></a>
				</div>
				<!-- <p class = "text-left ml-5">Opened in 2011 and moved in 2017 </p>
				<p class = "text-left ml-5">This location is a:</p>
				<ul class="ml-5">
					<li>Field Office</li>
					<li>Frontline Team</li>
				</ul>	 -->
			</div>	
			<div class="col-sm-3 bg-cust-dark zoom">
				<div class="align-self-center text-center"><img class = "img-fluid py-3"src="/img/office-photo/aa5.jpg" alt="Z Network Logo"></div>
					<div class="py-3">
						<h5 class = "text-center">Portland, Oregon</h5>
						<a class = "local-link text-center" href="https://goo.gl/maps/5NEb42jj319M5CZ9A" target = "blank"><p>3880 SE 8th Ave Suite 205, Portland, OR 97202</p></a>
					</div>
					<!-- <p class = "text-left ml-5">Opened in 2013 and moved in 2020.</p>
					<p class = "text-left ml-5">This location is a:</p>
					<ul class="ml-5">
						<li>Field Office</li>
						<li>Frontline Team</li>
					</ul> -->
			</div>
			<div class="col-sm-3 bg-cust-light zoom">
				<div class="align-self-center text-center"><img class = "img-fluid py-3" src="/img/office-photo/aa.jpg" alt="Z Network Logo"></div>
					<div class="py-3">
						<h5 class = "text-center">Beverly Hills, California</h5>
						<a class = "local-link text-center" href="https://goo.gl/maps/fjAf4k3vArjrD6xn7" target = "blank"><p>291 La Cienega Blvd Suite 406, Beverly Hills, CA 90211</p></a>
					</div>
					<!-- <p class = "text-left ml-5">Opened in 2014 and moved in 2019</p>
					<p class = "text-left ml-5">This location is a:</p>
					<ul class="ml-5">
						<li>Field Office</li>
						<li>Frontline Team</li>
					</ul> -->
			</div>
			<div class="col-sm-3 bg-cust-dark zoom">
				<div class="align-self-center text-center"><img class = "img-fluid py-3" src="/img/office-photo/santa-ana.jpg" alt="Z Network Logo"></div>
					<div class="py-3">
						<h5 class = "text-center">Santa Ana, California</h5>
						<a class = "local-link text-center" href="https://goo.gl/maps/zRfssrVUAz9SZikv9" target = "blank"><p>1580 E Edinger Ave Suite 0, Santa Ana, CA 92705</p></a>
					</div>
					<!-- <p class = "text-left ml-5">Opened in 2015</p>
					<p class = "text-left ml-5">This location is a:</p>
					<ul class="ml-5">
						<li>Field Office</li>
						<li>Escalation</li>
						<li>Frontline Team</li>
						<li>Sales Teams</li>
					</ul> -->
			</div>
		</div>
		<div class="row zoom">
			<div class="col-sm-6 bg-cust-light order-2">
				<div class="align-center text-center"></div>
					<div class = "py-3">
						<h5 class = "text-center">HEADQUARTERS - Marysville, Washington</h5>
						<a class = "local-link text-center" href="https://goo.gl/maps/CFu6SXdVNpRpWGrp7" target = "blank"><p>1289 State Ave Suite E, Marysville, WA 98270</p></a>
					</div>
					<p class = "text-left ml-5">Network Operations Center opened in 2014.</p>
					<p class = "text-left ml-5">This location is a:</p>
					<ul class="ml-5 pt-n1">
						<li>Network Operations Center</li>
						<li>Field Office</li>
						<li>Escalation</li>
						<li>Development</li>
						<li>Frontline</li>
						<li>Operations Teams</li>
						<li>Data Center</li>
					</ul>
			</div>
			<div class="col-sm-6 bg-cust-dark zoom order-xs-1 order-md-12">
				<div class="align-self-center text-center"><img class = "img-fluid py-4" src="/img/office-photo/a10.jpg" alt="Z Network Logo"></div>
			</div>
		</div>
		<div class="row">	
			<div class="col-sm-3 bg-cust-light zoom">
				<div class="align-self-center text-center"><img class = "img-fluid py-3" src="/img/office-photo/aa.jpg" alt="Z Network Logo"></div>
					<div class="py-3">
						<h5 class = "text-center">Concord, California</h5>
						<a class = "local-link text-center" href="https://goo.gl/maps/hwEVc61PF6qgyMUm9" target = "blank"><p>3350 Clayton Rd Suite 100, Concord, CA 94520</p></a>
					</div>
					<!-- <p class = "text-left ml-5">Opened in 2015</p>
					<p class = "text-left ml-5">This location is a:</p>
					<ul class="ml-5">
						<li>Field Office</li>
						<li>Escalation</li>
						<li>Frontline Team</li>
					</ul> -->
			</div>
			<div class="col-sm-3 bg-cust-dark zoom">
				<div class="align-self-center text-center"><img class = "img-fluid py-3" src="/img/office-photo/aa-8.jpg" alt="Z Network Logo"></div>
					<div class="py-3">
						<h5 class = "text-center">Oakland, California</h5>
						<a class = "local-link text-center" href="https://goo.gl/maps/XPXH2smFteSHtqiz8" target = "blank"><p>675 Hegenberger Rd Suite 230, Oakland, CA 94621</p></a>
					</div>
					<!-- <p class = "text-left ml-5">Opened in 2016 and moved in 2019</p>
					<p class = "text-left ml-5">This location is a:</p>
					<ul class="ml-5">
						<li>Field Office</li>
						<li>Frontline Team</li>
					</ul>		 -->
			</div>
		</div>
		
	</div>
</section>
<section id = "employees" class="employees py-5">
	<div class="container">
		<div class="row ">
			<div class="col">
				<div class="pb-md-5 text-center">
					<h3 class = "text-center text-uppercase">Our Team</h3>
				</div>
				<div id="accordion">
				  	<div class="card">
						<div class="card-header" id="headingOne">
					 	 	<h5 class="mb-0">
								<button class="btn btn-link w-100 text-left collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						  			Leadership <i class="fas fa-angle-down rotate-icon float-right"></i>
								</button>
					  		</h5>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<div class="row py-5">	
									<div class="col-md-4">
										<div class="card" style="width: 100%;">
											<img class="card-img-top" src="/img/employees/mike-goodman.jpg" alt="Mike Goodman">
											<div class="card-body">
												<h6 class="card-text text-center">Mike Goodman</h6>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card" style="width: 100%;">
											<img class="card-img-top" src="/img/employees/female.jpg" alt="No Image Business Woman">
											<div class="card-body">
												<h6 class="card-text text-center">Amy Goodman</h6>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card" style="width: 100%;">
											<img class="card-img-top" src="/img/employees/andy-snider.jpg" alt="Andy Snider">
											<div class="card-body">
												<h6 class="card-text text-center">Andy Snider</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				  	</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed text-left w-100" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Coordinators<i class="fas fa-angle-down rotate-icon float-right"></i>
								</button>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								<div class="container">
									<div class="row py-5">
										<div class="col-md-4" >
											<div class="card" style="width: 100%;">
												<img class="card-img-top" src="/img/employees/BbRefDBSw4kRxpU3cyW1DABZcZORs67qs1exsI2vTTmkBsD0HkOpAoHLaah2lal1-Joe%20Helland.jpg" alt="Joe Helland">
												<div class="card-body">
													<h6 class="card-text text-center">Joe Helland</h6>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card" style="width: 100%;">
												<img class="card-img-top" src="/img/employees/Patty.jpg" alt="Patty Anderson">
												<div class="card-body">
													<h6 class="card-text text-center">Patty Anderson</h6>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card" style="width: 100%;">
												<img class="card-img-top" src="/img/employees/3LrbwaJso5v5AGRS2Qk4vozQow4Z8qURuHioaTtT4PvwMbMdAV5aZeB8HppoP7Bu-Kayti%20Smith.jpg" alt="Kayti Smith">
												<div class="card-body">
													<h6 class="card-text text-center">Kayti Smith</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="row py-5">
										<div class="col-md-4">
											<div class="card" style="width: 100%;">
												<img class="card-img-top" src="/img/employees/xpkv91XHjNkGI2YQ8FjiSz9LobVJ0pOt4xFEWICgI4peGJN41anExQocVJewlz7S-Nyckie%20Wheaton.jpg" alt="Nyckie Wheaton">
												<div class="card-body">
													<h6 class="card-text text-center">Nyckie Wheaton</h6>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card" style="width: 100%;">
												<img class="card-img-top" src="/img/employees/tF7EfoAf1nfFwsqLqKEO6ri0KaRTYpMd8Am71sqHgDjmBfcKT2yszVI3pR5oOtgp-WillT.png" alt="Will Thompson">
												<div class="card-body">
													<h6 class="card-text text-center">Will Thompson</h6>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card" style="width: 100%;">
												<img class="card-img-top" src="/img/employees/Tom.jpg" alt="Tom Lewis">
												<div class="card-body">
													<h6 class="card-text text-center">Tom Lewis</h6>
												</div>
											</div>
										</div>
									</div>							
								</div>
							</div>
						</div>
					</div>
				  	<!-- <div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed text-left w-100" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Team Lead<i class="fas fa-angle-down rotate-icon float-right"></i>
								</button>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
							<div class="row py-5">
								<div class="col-md-2">
									<div class="card" style="width: 100%;">
										<img class="card-img-top" src="/img/employees/Anchor.jpg" alt="Anchor Adams">
										<div class="card-body">
											<h6 class="card-text text-center">Anchor Adams</h6>
										</div>
									</div>
								</div>
								<div class="col-md-2 tl-margins">
									<div class="card" style="width: 100%;">
										<img class="card-img-top" src="/img/employees/z670Gi7rReBooUx3KMGBgdN2Ka78hCXVh3f51PedorWmiYl2Qm09klzzYrXXgoMa-michael-syvrud.png" alt = "Michael Syvrud">
										<div class="card-body">
											<h6 class="card-text text-center">Michael Syvrud</h6>
										</div>
									</div>
								</div>
								<div class="col-md-2 tl-margins">
									<div class="card" style="width: 100%;">
										<img class="card-img-top" src="img/employees/44wSBgpYt1brnt1OJsBFJA731an2mWhr0OkC5JByLNZ8h0W0txGd7Nh9YEclAuNB-.Mr.%20No%20Pic.JPG" alt="Greg Vanner">
										<div class="card-body">
											<h6 class="card-text text-center">Greg Vanner</h6>
										</div>
									</div>
								</div>
								<div class="col-md-2 tl-margins">
									<div class="card" style="width: 100%;">
										<img class="card-img-top" src="/img/employees/Alphae.jpg" alt="Alphae James">
										<div class="card-body">
											<h6 class="card-text text-center">Alphae James</h6>
										</div>
									</div>
								</div>
								<div class="col-md-2 tl-margins">
									<div class="card" style="width: 100%;">
										<img class="card-img-top" src="/img/employees/Louie.jpg" alt="Louie Michael">
										<div class="card-body">
											<h6 class="card-text text-center">Louie Michael</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
				  	</div> -->
				</div> 
			</div>
		</div>
	</div>


	</div>
	</div>
	<div class="container pb-5">
		
			
			<?php
			
			
			$count = 0;
			$getE = mysql_query("SELECT * FROM employees WHERE active='0' ORDER BY firstname ASC");
			while($e = mysql_fetch_array($getE)) {
				
				if($count == 0) {
					echo '<div class="row">';
				}
				if($count == 0) {
					echo '<div class="col-md-2 col-6  text-center mb-md-0 mb-3 pt-5">';
				} else {
					echo '<div class="col-md-2 col-6 text-center mb-md-0 mb-3 pt-5">';	
				}
					$picture = str_replace(" ", '%20', $e['picture']);
					echo '<div style="height:225px; background-image:url('.$picture.'); background-position:center; background-size:contain; background-repeat:no-repeat;" class="mb-3 w-100"><img src="'.$e['picture'].'" alt="'.$e['firstname'].' '.$e['lastname'].'" class="w-100 d-none"></div>';
					echo '<h6>'.$e['firstname'].' '.$e['lastname'].'</h6>';
					echo '<p class="text-uppercase text-secondary text-10" style="font-size:13px; min-height:40px;">'.$e['title'].'</p>';
					echo '<p class="text-secondary text-left" style="font-size:12px;">From: '.$e['fromCity'].', '.$e['fromState'].'</p>';
					echo '<p class="text-secondary text-left" style="font-size:12px;">Location: '.$e['currentCity'].', '.$e['currentState'].'</p>';
					// echo '<p class="employee-desc text-left p-2">'.$e['bio'].'</p>';
					// echo '<a href="#" class="btn btn-primary viewBio" employee="'.$e['id'].'" name="'.$e['firstname'].' '.$e['lastname'].'" style="font-size:12px;">More About '.$e['firstname'].'</a>';
					echo '</div>';
				$count++;
				if($count == 6) {
					echo '</div>';
				}
				
				if($count == 6) {
					$count = 0;
				}
			}
			while($count < 6) {
				echo '<div class="col"></div>';
				$count++;
			}
			echo '</div>';
			?>
		</div>
</section>
<section class="testimonials py-5" id = "testimony">
<div class="container">
	<div class="row">
		<div class="col">
			<p class="text-center text-uppercase">Testimonials</p>
			<h3 class="text-center">What Our Clients Say About Us</h3>
		</div>
	</div>
</div>
<div id="testimonialSlider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
	<div class="carousel-item active">
		<div class="container">
			<div class="row">
				<div class="col-md-2 align-self-center d-block pt-5">
					<img src="img/rlevans.png" alt="R.L. Evans" class="w-100 align-self-center">
				</div>
				<div class="col-md-10 p-5">
					
					<div class="p-4">
						<i class="fas fa-quote-left fa-3x text-grey"></i>
						<p class="p-3">This proactive response gave us peace of mind that our business operations would not be interrupted. The following week, we came in Monday and it was business-as-usual.</p>
						<i class="fas fa-quote-right fa-3x text-grey float-right"></i>
						<p class="font-weight-bold">Brian Leach</p>
						<span class="text-blue">Certified Funding Specialist</span>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="carousel-item">
		<div class="container">
			<div class="row">
				<div class="col-md-2 align-self-center d-block pt-5">
					<img src="img/pike-brewing.png" alt="Pike Brewing" class="w-100 align-self-center">
				</div>
				<div class="col-md-10 p-5">
					<div class="p-4">
						<i class="fas fa-quote-left fa-3x text-grey"></i>
						<p class="p-3" style="min-height:80px;">Z Networks knows us and our business, and we know and trust them.</p>
						<i class="fas fa-quote-right fa-3x text-grey float-right"></i>
						<p class="font-weight-bold">Drew Gillespie</p>
						<span class="text-blue">VP of Operations</span>
					</div>
				</div>
			</div>
		</div>
	</div>
  <a class="carousel-control-prev" href="#testimonialSlider" role="button" data-slide="prev">
    <span><i class="fas fa-chevron-left fa-2x header-icon"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#testimonialSlider" role="button" data-slide="next">
    <span><i class="fas fa-chevron-right fa-2x header-icon"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section> 
<script>
function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

animateValue(document.getElementById("years_count"), 0, 20, 5000);
animateValue(document.getElementById("tickets_count"), 0, 395000, 5000);
animateValue(document.getElementById("devices_count"), 0, 120000, 5000);
animateValue(document.getElementById("offices_count"), 0, 8, 5000);
</script>
<script>
	$(document).ready(function()  
    {  
		$('#infra').click(function(){
			$('.vegas_details').hide();
			$('.vegas_infra').show();
		});
		
		$('#infra_back').click(function(){
			$('.vegas_details').show();
			$('.vegas_infra').hide();
		});

		var local = "<div class='py-2'> <h5 class = 'text-center'>NEW LOCATION - Las Vegas, Nevada</h5><a class = 'local-link text-center' href='https://goo.gl/maps/1NJSUFznaqACNoeZA' target = 'blank'><p>1515 E Tropicana Ave, Las Vegas, NV 89119</p></a></div><p class = 'text-left ml-5'>Opened in 2017 and moved in 2021</p><p class = 'text-left ml-5'>This location is a:</p><ul class='ml-5'><li>Network Operations Center</li><li>Field Office</li><li>Escalation</li><li>Development</li><li>Frontline Team</li><li>Data Center</li><li>Sales Team</li></ul>";
		var cloud = "<p>Testing</p>";
		var expand = "<p>Test 123</p>";

		// $(".infoChange").html("<div class='py-2'> <h5 class = 'text-center'>NEW LOCATION - Las Vegas, Nevada</h5><a class = 'local-link text-center' href='https://goo.gl/maps/1NJSUFznaqACNoeZA' target = 'blank'><p>1515 E Tropicana Ave, Las Vegas, NV 89119</p></a></div><p class = 'text-left ml-5'>Opened in 2017 and moved in 2021</p><p class = 'text-left ml-5'>This location is a:</p><ul class='ml-5'><li>Network Operations Center</li><li>Field Office</li><li>Escalation</li><li>Development</li><li>Frontline Team</li><li>Data Center</li><li>Sales Team</li></ul>");

		$("#local").click(function(e) {
			e.preventDefault();
			$(".infoChange").empty();
			$(".infoChange").html(local);
		});
		$("#cloud").click(function (e) {
			e.preventDefault();
			$(".infoChange").empty();
			$(".infoChange").html(cloud);
		});
		$("#expand").click(function (e) {
			e.preventDefault();
			$(".infoChange").empty();
			$(".infochange").html(expand)
		});
	});
</script>
<?php include('includes/footer.inc.php');?>