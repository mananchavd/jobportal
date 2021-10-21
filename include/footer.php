
	<footer>

		<section class="footer-Content">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="widget">
							<h3 class="block-title"><img src="assets/img/logo/logo2.png" class="img-responsive" alt="Footer Logo"></h3>
							<div class="textwidget">
								<p style="text-align: justify;">Jobmate is the one of the best portal of multiple jobs at one place, you can search single or multiple requirements at a time, you can also search different salary packages.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="widget">
							<h3 class="block-title">Quick Links</h3>
							<ul class="menu">
								<li><a href="about.php">About Us</a></li>
								<li><a href="canjoblist.php">Search Jobs</a></li>
								<li><a href="login.php">Login</a></li>
								<li><a href="contactus.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="widget">
							<h3 class="block-title">Follow Us</h3>
							<div class="bottom-social-icons social-icon">
								<a class="twitter" href="index.php"><i class="ti-twitter-alt"></i></a>
								<a class="facebook" href="index.php"><i class="ti-facebook"></i></a>
								<a class="youtube" href="index.php"><i class="ti-youtube"></i></a>
								<a class="dribble" href="index.php"><i class="ti-dribbble"></i></a>
								<a class="linkedin" href="index.php"><i class="ti-linkedin"></i></a>
							</div>
							<p>Join our mailing list to stay up to date and get notices about our new releases!</p>
							<form class="subscribe-box">
								<input type="text" placeholder="Your email">
								<input type="submit" class="btn-system" value="Send">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div id="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>All Rights reserved &copy; 2020-2021</p>
					</div>
				</div>
			</div>
		</div>

	</footer>


	<a href="#" class="back-to-top">
		<i class="ti-arrow-up"></i>
	</a>
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
				<div class="object" id="object_five"></div>
				<div class="object" id="object_six"></div>
				<div class="object" id="object_seven"></div>
				<div class="object" id="object_eight"></div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/material.min.js"></script>
	<script type="text/javascript" src="assets/js/material-kit.js"></script>
	<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
	<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
	<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>

		<script>
			$( function() {
		var availableTags = [
		"Hyderabad","Chennai","Ahmedabad","Pune","Surat","Jaipur","Lucknow","Kanpur","Nagpur","Indore","Thane","Bhopal","Visakhapatnam","Patna",
	"Vadodara","Ghaziabad","Ludhiana","Agra","Nashik","Meerut","Rajkot","Vasai-Virar","Varanasi","Srinagar","Aurangabad","Amritsar",
	"Navi Mumbai","Mumbai","Ranchi","Allahabad","Howrah","Coimbatore","Jabalpur","Vijayawada","Gwalior","Jodhpur","Madurai","Raipur","Kota","Guwahati",
	"Chandigarh","Mysore","Gurgaon","Aligarh","Jalandhar","Bhubaneswar","Trivandrum","Thiruvananthapuram","Bhiwandi","Saharanpur","Gorakhpur",
	"Guntur","Bikaner","Amravati","Noida","Cuttack","Kochi","Cochin","Bhavnagar","Dehradun","Kolhapur","Ajmer","Gulbarga","Jamnagar","Ujjain",
	"Jhansi","Siliguri","Jammu","Sangli-Miraj & Kupwad","Mangalore","Malegaon","Gaya","Jalgaon","Udaipur","Maheshtala","Tirupur","Davanagere",
	"Akola","Patiala","Dhule","Rohtak","Bhilwara","Brahmapur","Muzaffarpur","Ahmednagar","Mathura","Kollam","Quilon","Avadi","Rajahmundry",
	"Kadapa","Kamarhati","Bilaspur","Junagadh","Thrissur","Bardhaman","Tumkur","Panipat","Tirupati","Karnal","Bathinda","Jalna","Barasat",
	"Kirari Suleman Nagar","Purnia","Satna","Sagar","Ratlam","New Delhi","Puducherry","Sikar","Rewa","Ramagundam","Haridwar","Sri Ganganagar"
		];
		    $( "#hometo" ).autocomplete({
		      source: availableTags
		    });
		function split( val ) {
		return val.split( /,\s*/ );
		}
		function extractLast( term ) {
		return split( term ).pop();
		}

		$( "#tags" )
		// don't navigate away from the field on tab when selecting an item
		.on( "keydown", function( event ) {
		if ( event.keyCode === $.ui.keyCode.TAB &&
		$( this ).autocomplete( "instance" ).menu.active ) {
		event.preventDefault();
		}
		})
		.autocomplete({
		minLength: 0,
		source: function( request, response ) {
		// delegate back to autocomplete, but extract the last term
		response( $.ui.autocomplete.filter(
		availableTags, extractLast( request.term ) ) );
		},
		focus: function() {
		// prevent value inserted on focus
		return false;
		},
		select: function( event, ui ) {
		var terms = split( this.value );
		// remove the current input
		terms.pop();
		// add the selected item
		terms.push( ui.item.value );
		// add placeholder to get the comma-and-space at the end
		terms.push( "" );
		this.value = terms.join( ", " );
		return false;
		}
		});
		} );
		</script>


