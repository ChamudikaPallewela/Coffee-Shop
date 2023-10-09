<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="assets/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>
           <!-- Scripts -->
		   
    <script src="{{ asset('js/app.js') }}" defer></script>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="assets/css/linearicons.css">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/bootstrap.css">
			<link rel="stylesheet" href="assets/css/magnific-popup.css">
			<link rel="stylesheet" href="assets/css/nice-select.css">					
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Mon-Fri: 8am to 2pm
				  					</li>
				  					<li>
				  						Sat-Sun: 11am to 4pm
				  					</li>
				  					<li>
				  						<a href="tel:(012) 6985 236 7512">(081) 238 8090</a>
				  					</li>				  					
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#about">About</a></li>
				          <li><a href="#coffee">Coffee</a></li>
				          <li><a href="#review">Review</a></li>
				          <li><a href="#blog">Blog</a></li>
                          <li><a href="">Menu-item</a></li>
                          <li>
                            @if (Route::has('login'))
                   <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" a href="{{url('/setting')}}" >
                                        {{ __('Profile') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                               
                            </li>
                          
                    
                       
                    @else
                    <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                  @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                           
                
                            </li>
                            
                        </ul>       
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
							<h1>
								Start your day with <br>
								a black Coffee				
							</h1>
							<a href="#" class="primary-btn text-uppercase">Buy Now</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start video-sec Area -->
			<section class="video-sec-area pb-100 pt-40" id="about">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=TEH_kNy5Ebk"><img class="img-fluid" src="assets/img/play-icon.png" alt=""></a>
						</div>						
						<div class="col-lg-6 video-left">
							<h6>Live Coffee making process.</h6>
							<h1>We Telecast our <br>
							Coffee Making Live</h1>
							<p><span>We are here to listen from you deliver exellence</span></p>
							<p>
							"Step into our whimsical coffee wonderland, where unicorns frolic in latte art and every sip unlocks a secret flavor adventure!"
							</p>
							<img class="img-fluid" src="assets/img/signature.png" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start menu Area -->
			<section class="menu-area section-gap" id="coffee">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Cappuccino</h4>
									<p class="price float-right">
										RS 480
									</p>
								</div>
								<p>
								Sip into a cloud of creamy perfection with our Cappuccino, where velvety steamed milk dances atop a bold espresso, creating a harmonious symphony of flavors."
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Americano</h4>
									<p class="price float-right">
										RS 480
									</p>
								</div>
								<p>
								Awaken your senses with the bold and invigorating notes of our Americano, a powerhouse of espresso and hot water that delivers a rich, full-bodied experience
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Espresso</h4>
									<p class="price float-right">
										RS 380
									</p>
								</div>
								<p>
								Embark on a journey of pure coffee essence with our Espresso, where every concentrated sip is a delightful burst of robust flavors and aromatic bliss
								</p>								
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Macchiato</h4>
									<p class="price float-right">
										RS 380
									</p>
								</div>
								<p>
								Experience the art of contrast with our Macchiato, where the harmonious marriage of velvety espresso and a delicate touch of milk creates a masterpiece of boldness and subtlety in every sip.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Mocha</h4>
									<p class="price float-right">
										RS 580
									</p>
								</div>
								<p>
								Indulge in a decadent symphony of flavors with our Mocha, where the smooth fusion of rich chocolate, espresso, and creamy steamed milk takes your taste buds on a delightful dance of sweetness and coffee bliss
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Coffee Latte</h4>
									<p class="price float-right">
										RS 650
									</p>
								</div>
								<p>
								Indulge in pure velvety delight with our Coffee Latte, where the perfect balance of espresso and silky steamed milk creates a smooth, creamy embrace that will make each sip a moment of pure bliss
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Piccolo Latte</h4>
									<p class="price float-right">
										RS 520
									</p>
								</div>
								<p>
								Discover the petite pleasure of our Piccolo Latte, a small but mighty masterpiece that combines the intensity of a ristretto shot with a velvety dollop of steamed milk, delivering a bold and concentrated coffee experience in a compact form.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Ristretto</h4>
									<p class="price float-right">
										RS 400
									</p>
								</div>
								<p>
								Experience the essence of coffee in its purest form with our Ristretto, where a short, intense extraction creates a concentrated elixir of bold flavors that will awaken your senses and leave you craving for more.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Affogato</h4>
									<p class="price float-right">
										RS 650
									</p>
								</div>
								<p>
								Take a moment to indulge in the delightful collision of hot espresso and cold, velvety gelato with our Affogato, where the contrasting textures and flavors create a heavenly symphony of warmth and chill, sweet and bitter
								</p>								
							</div>
						</div>															
					</div>
				</div>	
			</section>
			<!-- End menu Area -->
            @yield('content')
			
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Creative Coffee Blends: Exploring the Art of Flavor Fusion in Specialty Coffee Shops.</h1>
								<p>Get caffeinated and let the coffee magic ignite your taste buds at our whimsical brew haven!</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<a href="assets/img/g1.jpg" class="img-pop-home">
								<img class="img-fluid" src="assets/img/g1.jpg" alt="">
							</a>	
							<a href="assets/img/g2.jpg" class="img-pop-home">
								<img class="img-fluid" src="assets/img/g2.jpg" alt="">
							</a>	
						</div>
						<div class="col-lg-8">
							<a href="assets/img/g3.jpg" class="img-pop-home">
								<img class="img-fluid" src="assets/img/g3.jpg" alt="">
							</a>	
							<div class="row">
								<div class="col-lg-6">
									<a href="assets/img/g4.jpg" class="img-pop-home">
										<img class="img-fluid" src="assets/img/g4.jpg" alt="">
									</a>	
								</div>
								<div class="col-lg-6">
									<a href="assets/img/g5.jpg" class="img-pop-home">
										<img class="img-fluid" src="assets/img/g5.jpg" alt="">
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Brewtiful! </h1>
								<p>Indulge in our 'Coffee Roulette' where every cup holds a surprise blend handcrafted by our mischievous baristas, ensuring a thrilling coffee experience with every visit!</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							<img src="assets/img/r1.png" alt="">
							<div class="title d-flex flex-row">
								<h4>Unveiling the Charms of a Hidden Gem</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
							This coffee shop is a hidden gem that captured my heart with its inviting aroma, cozy ambiance, and friendly staff. The baristas' expertise shone through in every meticulously crafted cup, surprising my taste buds with delightful flavor combinations. From the beautiful latte art to the carefully curated pastries, every detail was thoughtfully considered, creating an elegant and memorable experience. I'm already looking forward to my next visit to this enchanting coffee haven!
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							<img src="assets/img/r2.png" alt="">
							<div class="title d-flex flex-row">
								<h4>Tech Treasures</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2536</h1>
							<p>Happy Client</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">7562</h1>
							<p>Total Projects</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2013</h1>
							<p>Cups Coffee</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">10536</h1>
							<p>Total Submitted</p>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End review Area -->
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Coffee Connoisseur's Corner</h1>
								<p>Unlocking the Secrets of Bean Origins and Brewing Techniques</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="assets/img/b1.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Beyond Espresso</h4></a>
							<p>
							Step into our cozy coffee sanctuary, where the aromatic symphony of freshly ground beans and the warm embrace of a perfectly brewed cup create a haven for coffee enthusiasts
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="assets/img/b2.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Caffeine and Wellness</h4></a>
							<p>
							Indulge in the vibrant tapestry of flavors at our coffee shop, where each sip unveils a story crafted by passionate baristas and the finest beans from around the world.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
								we are fueled by our passion for exceptional coffee and driven by our commitment to creating memorable experiences for every customer who walks through our doors.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
										
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="assets/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="assets/js/easing.min.js"></script>			
			<script src="assets/js/hoverIntent.js"></script>
			<script src="assets/js/superfish.min.js"></script>	
			<script src="assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="assets/js/owl.carousel.min.js"></script>			
			<script src="assets/js/jquery.sticky.js"></script>
			<script src="assets/js/jquery.nice-select.min.js"></script>			
			<script src="assets/js/parallax.min.js"></script>	
			<script src="assets/js/waypoints.min.js"></script>
			<script src="assets/js/jquery.counterup.min.js"></script>					
			<script src="assets/js/mail-script.js"></script>	
			<script src="assets/js/main.js"></script>	
		</body>
	</html>



