@extends('layout')

@section('content')

<!-- FEATURED GRID -->
			<section class="featured-grid"  style="top: -25px;">
				<div class="container">
					
					<div class="row">

						<div class="col-sm-6">
							<img src="assets/images/demo/shop/home/grid1.jpg" alt="" />
							<div class="ribbon hidden-xs">
								<div class="absolute">
									<h2>87%</h2>
									<h4>OFF</h4>
								</div>
							</div>
							<div class="absolute bottom-right text-right">
								<h1 class="text-white">
									<em>HUGE</em> 
									<em class="weight-300 text-white">DISCOUNTS</em>
								</h1>
								<a class="btn btn-primary btn-xs margin-top-10" href="#">Explore Now &raquo;</a>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="relative">
								<img src="assets/images/demo/shop/home/man_cat.jpg" alt="" />
								<div class="absolute text-left">
									<h2>Men</h2>
									<p>
										YOU DON'T WANT TO MISS!
									</p>
									
									<p class="font-lato margin-top-30 size-16 hidden-sm hidden-xs">Donec tellus massa, tristique sit amet condim vel,<br /> facilisis quis sapien. Praesent id enim sit amet.</p>
									<a class="btn btn-primary margin-top-20" href="#">Shop Now &raquo;</a>
								</div>
							</div>

							<div class="relative">
								<img src="assets/images/demo/shop/home/woman_cat.jpg" alt="" />
								<div class="absolute text-right">
									<h2>Women</h2>
									<p>
										YOU DON'T WANT TO MISS!
									</p>

									<p class="font-lato margin-top-30 size-16 hidden-sm hidden-xs">Donec tellus massa, tristique sit amet condim vel,<br /> facilisis quis sapien. Praesent id enim sit amet.</p>
									<a class="btn btn-primary margin-top-20" href="#">Shop Now &raquo;</a>
								</div>
							</div>
							
						</div>
						
					</div>

				</div>
			</section>
			<!-- /FEATURED GRID -->

			<!-- FEATURED -->
			<section>
				<div class="container">

					<h2 class="owl-featured noborder"><strong>FEATURED</strong> PRODUCTS</h2>
					<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "4", "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": true, "pagination": false}'>

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p13.jpg" alt="shop first image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="shop hover image" />
								</a>
								<!-- /product image(s) -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Cotton 100% - Pink Shirt</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									<span class="line-through">$98.00</span>
									$78.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p2.jpg" alt="shop first image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p12.jpg" alt="shop hover image" />
								</a>
								<!-- /product image(s) -->

							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Black Fashion Hat</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									<span class="line-through">$77.00</span>
									$65.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p8.jpg" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Beach Black Lady Suit</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$56.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p7.jpg" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Town Dress - Black</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$154.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p6.jpg" alt="shop first image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="shop hover image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Chick Lady Fashion</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$167.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p11.jpg" alt="shop hover image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p3.jpg" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Black Long Lady Shirt</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-0 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$128.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

					</div>

				</div>
			</section>
			<!-- /FEATURED -->

			</div>

			<!-- PARALLAX -->
			<section class="parallax parallax-2" style="background-image: url('assets/images/demo/particles_bg.jpg');padding: 80px!important;">
				<div class="overlay dark-1"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="container">



					<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": true}'>
							
						<div class="text-center">
							<h3 class="nomargin">Popular Products</h3>
							<p class="font-lato weight-300 lead nomargin-top">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam.</p>
						</div>

						<div class="text-center">
							<h3 class="nomargin">New Products</h3>
							<p class="font-lato weight-300 lead nomargin-top">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam.</p>
						</div>

					</div>


				</div>

			</section>
			<!-- /PARALLAX -->

			<div class="container">
			<!-- NEW PRODUCTS -->
			<section>
				<div class="container">

					<div class="heading-title heading-dotted">
						<h2 class="size-20">NEW PRODUCTS</h2>
					</div>

					<ul class="shop-item-list row list-inline nomargin">

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/noimg.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Blue Dress</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										<span class="line-through">$98.00</span>
										$78.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/6.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Mobile Phone</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$53.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/7.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Black Shirt</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$68.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/8.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Backpack</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$19.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/9.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Blue Shoes</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$81.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/10.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Water Watch</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$38.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/11.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Bag</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$22.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/1.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Woman Bag</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$15.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/2.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Woman Hat</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$61.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/3.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Cotton Cap</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$56.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/4.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Sun Glasses</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$98.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-2 col-sm-4">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/home/products/0.jpg" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">Bag</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										$34.00
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

					</ul>

				</div>
			</section>
			<!-- NEW PRODUCTS -->

			<!-- BRANDS -->
			<section class="padding-xxs">
				<div class="container">
					<div class="text-center">
						<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": false, "autoPlay": 3000}'>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/3.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/4.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/5.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/6.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/7.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/brands/8.jpg" alt="">
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- BRANDS -->

@endsection