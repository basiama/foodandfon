<?php include('includes/header.php'); ?>

<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Sign In
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							User Signin
						</h3>
					</div>

					<form class="wrap-form-booking" method="post" action="signin">
						<div class="row">
							<div class="col-md-6">
								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
								</div>

							
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									Password
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" placeholder="Password">
								</div>

								
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" name="signin" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Sign In
							</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="./templates/images/booking-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
    </section>
    <?php include('includes/footer.php'); ?>
