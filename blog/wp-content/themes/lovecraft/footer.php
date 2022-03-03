<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Z_Networks
 */

?>

	</div><!-- #content -->
<div class="icon-bar text-white">
  <a href="https://www.facebook.com/ExecutiveIT/" class="facebook text-white"><i class="fab fa-facebook-f"></i></a>
  <a href="https://twitter.com/znetworksIT" class="twitter"><i class="fab fa-twitter"></i></a>
  <a href="https://www.linkedin.com/company/z-networks-inc" class="linkedin"><i class="fab fa-linkedin"></i></a>
  <a href="https://www.instagram.com/znetworksit/" class="instagram"><i class="fab fa-instagram"></i></a>
</div>
<footer>
	<div class="container">
		<div class="row py-4">
			<div class="col-md-3 p-3 text-white">
				<p class="pb-2"><img src="https://znetworks.com/img/logo-white.png" style="width:80%;"></p>	
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
<script async defer src="https://znetworks.com/assets/maps.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
