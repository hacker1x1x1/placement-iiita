<?php
	include("header.php");
?>	
		<div class="row page-title">
		 	<h2 class="white-text center-align">Reach Us</h2> 
		</div>

		<div class="row chip-bar-container hide-on-small-only">
			<div class="col s12 m10 offset-m1 chips-bar">
				<div class="chip">
					<a href="#reach_us_map">Map</a>
				</div>
				<div class="chip">
					<a href="#ways_to_reach">Ways to reach</a>
				</div>
			</div>
		</div>

		<div class="row block" id="reach_us_map">
			<div class="col s10 offset-s1 body">
				<div id="map"></div>
				<p>The IIITA campus is located at Deoghat, Jhalwa (Peepalgaon Road), which is on the outskirts of Allahabad. It is 10 km from the town center and 7 km from the main railway station. Allahabad is well connected by air, rail and road to all the metros.</p>
			</div>
		</div>

		<div class="row block" id="ways_to_reach">
			<div class="block-title col s12 valign-wrapper">
				<span class="valign leftline"></span>
				<p class="valign title">Ways to reach</p>
				<span class="valign rightline"></span>
			</div>
			<div class="col s10 offset-s1 body">
				<div class="row block">
					<h5>Airways</h5>
					<p>Allahabad is linked to New Delhi and Mumbai with two flights of Air India. The other nearby airports are Lucknow & Varanasi which is well connected to all the major cities.</p>
				</div>

				<div class="row block">
					<h5>Railways</h5>
					<p>Allahabad is a major railway junction and is well connected to the entire country through trains. All the Rajdhanis crossing the North Central Region halt at Allahabad.</p>
				</div>

				<div class="row block">
					<h5>Roadways</h5>
					<p>The roadways network connects Allahabad to all major destinations with several Volvo Buses plying throughout the day between Allahabad and the nearby cities including Lucknow, Varanasi, Kanpur etc.</p>
				</div>
			</div>
		</div>

   		<?php
			include 'footer.php';
		?>

		<!--Import jQuery before materialize.js-->
		<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
		<script type="text/javascript" src="js/jquery-1.12.2.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
	</body>
</html>