<!-- Menu -->
<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
                                <?php if(!isLoggedIn()) : ?>
								<li>
									<a href="index">Home</a>
								</li>

								<li>
									<a href="signup">Sign up</a>
                                </li>
                                
                                <li>
									<a href="signin">Sign in</a>
                                </li>
                                
                                <li>
									<a href="about.html">About</a>
                                </li>
                                
                                <?php elseif(isLoggedIn() && getUserType()=='user') : ?>
                                
                                <li>
									<a href="reservation.html">Profile</a>
								</li>

                                <li>
									<a href="reservation.html">Restuarants</a>
								</li>


								<li>
									<a href="reservation.html">My Reservation</a>
								</li>


								<li>
									<a href="logout">Logout</a>
								</li>
                                <?php elseif(isLoggedIn() && getUserType()=='owner') : ?>

								 <li>
									<a href="reservation.html">Profile</a>
								</li>

                                <li>
									<a href="reservation.html">My Restuarants</a>
								</li>


								<li>
									<a href="reservation.html">Reservations</a>
								</li>


								<li>
									<a href="logout">Logout</a>
                                </li>
                            <?php endif;?>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="index.html" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.html" class="txt19">Sign up</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.html" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.html" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="blog.html" class="txt19">Blog</a>
			</li>

			<li class="t-center m-b-33">
				<a href="contact.html" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="reservation.html" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
		</ul>
	</aside>