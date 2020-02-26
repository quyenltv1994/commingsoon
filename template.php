<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon 2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('vendor/bootstrap/css/bootstrap.min.css',__FILE__ ); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css',__FILE__ ); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('vendor/animate/animate.css',__FILE__ ); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('vendor/select2/select2.min.css',__FILE__ ); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('css/util.css',__FILE__ ); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('css/main.css',__FILE__ ); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('<?php echo plugins_url('images/bg01.jpg',__FILE__ ); ?>');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('<?php echo plugins_url('images/bg02.jpg',__FILE__ ); ?>');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('<?php echo plugins_url('images/bg03.jpg',__FILE__ ); ?>');"></div>
	</div>

	<div class="size1 overlay1">
		<!--  -->
		<div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-25">
				<?php echo get_option('comingsoon_title'); ?>
			</h3>

			<p class="m2-txt1 txt-center p-b-48">
				<?php echo get_option('comingsoon_description'); ?> 
			</p>

			<div class="flex-w flex-c-m cd100 p-b-33">
				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 days">35</span>
					<span class="s2-txt1">Days</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 hours">17</span>
					<span class="s2-txt1">Hours</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 minutes">50</span>
					<span class="s2-txt1">Minutes</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 seconds">39</span>
					<span class="s2-txt1">Seconds</span>
				</div>
			</div>

			<form class="w-full flex-w flex-c-m validate-form">

				<div class="wrap-input100 validate-input where1" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100 placeholder0 s2-txt2" type="text" name="email" placeholder="Enter Email Address">
					<span class="focus-input100"></span>
				</div>
				
				
				<button class="flex-c-m size3 s2-txt3 how-btn1 trans-04 where1">
					Subscribe
				</button>
			</form>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="<?php echo plugins_url('vendor/jquery/jquery-3.2.1.min.js',__FILE__ ); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo plugins_url('vendor/bootstrap/js/popper.js',__FILE__ ); ?>"></script>
	<script src="<?php echo plugins_url('vendor/bootstrap/js/bootstrap.min.js',__FILE__ ); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo plugins_url('vendor/select2/select2.min.js',__FILE__ ); ?>"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="<?php echo plugins_url('vendor/countdowntime/moment.min.js',__FILE__ ); ?>"></script>
	<script src="<?php echo plugins_url('vendor/countdowntime/moment-timezone.min.js',__FILE__ ); ?>"></script>
	<script src="<?php echo plugins_url('vendor/countdowntime/moment-timezone-with-data.min.js',__FILE__ ); ?>"></script>
	<script src="<?php echo plugins_url('vendor/countdowntime/countdowntime.js',__FILE__ ); ?>"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo plugins_url('vendor/tilt/tilt.jquery.min.js',__FILE__ ); ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
<script src="<?php echo plugins_url('js/main.js',__FILE__ ); ?>"></script>

</body>
</html>