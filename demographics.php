<?php
	include("header.php");
?>
		<div class="row page-title">
		 	<h2 class="white-text center-align">Demographics</h2> 
		</div>

		<div class="row chip-bar-container hide-on-small-only">
			<div class="col s12 m10 offset-m1 chips-bar">
				<div class="chip">
					<a href="#">Academics</a>
				</div>
				<div class="chip">
					<a href="#lab_gallery">Demographics</a>
				</div>
			</div>
		</div>

		<div class="row block demographics" id="ug_demographics">
			<div class="block-title col s12 valign-wrapper">
				<span class="valign leftline"></span>
				<p class="valign title">Undergraduates</p>
				<span class="valign rightline"></span>
			</div>
			<div class="col s10 offset-s1 body">
				<div class="svg-wrapper">
				</div>
				<div class="content">
					<ul>
						<li>Information Technology - 253</li>
						<li>Electronics and Communication - 76</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="row block demographics" id="dd_demographics">
			<div class="block-title col s12 valign-wrapper">
				<span class="valign leftline"></span>
				<p class="valign title">Dual Degree</p>
				<span class="valign rightline"></span>
			</div>
			<div class="col s10 offset-s1 body">
				<div class="svg-wrapper">
				</div>
				<div class="content">
					<ul>
						<li>Software Engineering - 15</li>
						<li>Robotics - 13</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row block demographics" id="pg_demographics">
			<div class="block-title col s12 valign-wrapper">
				<span class="valign leftline"></span>
				<p class="valign title">Postgraduates</p>
				<span class="valign rightline"></span>
			</div>
			<div class="col s10 offset-s1 body">
				<div class="svg-wrapper">
				</div>
				<div class="content">
					<ul>
						<li>Mtech - 74</li>
						<li>5 Year Integrated BME - 35</li>
						<li>MBA - 8</li>
					</ul>
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
		<script type="text/javascript" src="js/d3.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>