<!DOCTYPE HTML>


<html>
	<head>
		<title>Recipe Section</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />




		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<?php
		$con=new mysqli('127.0.0.1', 'root', '', 'FoodSurgeon');
		// Check connection
		if (mysqli_connect_errno())
			{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

		//	if(isset($_POST['Baked chilli & jacket potatoes']))
		 $res=mysqli_query($con,"SELECT * FROM recipe where Name='Baked chilli & jacket potatoes'");
		 $row=mysqli_fetch_assoc($res);
		 $ing=$row['Ingredients'];
		 $step=$row['Steps'];
		 $url=$row['video'];
		 $name=$row['Name'];
		?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Recipe</strong> Section</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
											<li><a href="index.html" class="button special">Back To Home</a></li>
									</ul>
								</header>


							<!-- Content -->
								<section>


													<h2> <?php echo "$name"; ?></h2>

													<hr />
													<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>

												<!-- Lists -->
													<h3>Lists</h3>
													<div class="row">
														<div class="6u 12u$(small)">

															<h4>Ingredients Required</h4>
															<ul>
																<li> <?php echo "$ing"; ?></li>

															</ul>


														</div>
														<div class="6u$ 12u$(small)">

															<h4>Video</h4>
															<span class="image fit"><?php echo "$url"; ?></span>
															<div class="box alt">


														</div>
													</div>
													<h4>Steps</h4>
												<p> <?php echo "$step"; ?></p>


												<!-- Form -->
<div class="alt"></div>
												<!-- Image -->

													<div class="box alt">
														<div class="row 50% uniform">
															<hr/>

															<h3>Form</h3><br>

															<form method="post" action="#">
																<div class="row uniform">
																	<div class="6u 12u$(xsmall)">
																		<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
																	</div>
																	<div class="6u$ 12u$(xsmall)">
																		<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
																	</div>

																	<!-- Break -->
																	<div class="6u 12u$(small)">
																		<input type="checkbox" id="demo-copy" name="demo-copy">
																		<label for="demo-copy">Email me a copy</label>
																	</div>
																	<div class="6u$ 12u$(small)">
																		<input type="checkbox" id="demo-human" name="demo-human" checked>
																		<label for="demo-human">I am a human</label>
																	</div>
																	<!-- Break -->
																	<div class="12u$">
																		<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
																	</div>
																	<!-- Break -->
																	<div class="12u$">
																		<ul class="actions">
																			<li><input type="submit" value="Send Message" class="special" /></li>
																			<li><input type="reset" value="Reset" /></li>
																		</ul>
																	</div>
																</div>
															</form>


													</div>


												<!-- Box -->



											</div>
										</div>

								</section>

						</div>
					</div>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
