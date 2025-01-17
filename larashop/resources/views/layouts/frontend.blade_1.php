<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	
	<!-- SEO Meta Tags -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#ffffff" />
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>@yield('title', 'Trang chủ') - {{ config('app.name', 'Laravel') }}</title>

	
	<!-- Favicon and Touch Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/img/apple-touch-icon.png') }}" />
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/img/favicon-32x32.png') }}" />
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/img/favicon-16x16.png') }}" />

	<!-- CSS -->
	<link rel="stylesheet" media="screen" href="{{ asset('public/vendor/simplebar/simplebar.min.css') }}" />
	<link rel="stylesheet" media="screen" href="{{ asset('public/vendor/tiny-slider/tiny-slider.css') }}" />
	<link rel="stylesheet" media="screen" href="{{ asset('public/vendor/nouislider/nouislider.min.css') }}" />
	<link rel="stylesheet" media="screen" href="{{ asset('public/vendor/drift-zoom/drift-basic.min.css') }}" />
	<link rel="stylesheet" media="screen" href="{{ asset('public/vendor/lightgallery/lightgallery-bundle.min.css') }}" />
	<link rel="stylesheet" media="screen" href="{{ asset('public/css/theme.min.css') }}" />

</head>

<body class="handheld-toolbar-enabled">
	<main class="page-wrapper">
		<header class="shadow-sm">
			<div class="navbar-sticky bg-light">
				<div class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<a class="navbar-brand d-none d-sm-block flex-shrink-0"  href="{{ route('frontend.home') }}">
							<img src="{{ asset('public/img/logo-dark.png') }}" width="142" />
						</a>
						<a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="{{ route('frontend.home') }}">
							<img src="{{ asset('public/img/logo-icon.png') }}" width="74" />
						</a>
						<div class="input-group d-none d-lg-flex mx-4">
							<input class="form-control rounded-end pe-5" type="text" placeholder="Tìm kiếm" />
							<i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
						</div>
						<div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-tool navbar-stuck-toggler" href="#menu">
								<span class="navbar-tool-tooltip">Mở rộng menu</span>
								<div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
							</a>
							<a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#">
								<div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
								<div class="navbar-tool-text ms-n3"><small>Xin chào</small>Khách hàng</div>
							</a>
							<div class="navbar-tool ms-3">
								<a class="navbar-tool-icon-box bg-secondary" href="#">
									<span class="navbar-tool-label">1</span><i class="navbar-tool-icon ci-cart"></i>
								</a>
								<a class="navbar-tool-text" href="#"><small>Giỏ hàng</small>3.000.000đ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
					<div class="container">
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<div class="input-group d-lg-none my-3">
								<i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
								<input class="form-control rounded-start" type="text" placeholder="Tìm kiếm" />
							</div>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link ps-lg-0" href="#">
										<i class="ci-home me-2"></i>Trang chủ
									</a>
								</li>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ci-gift me-2"></i>Sản phẩm</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Điện thoại</a></li>
										<li><a class="dropdown-item" href="#">Máy tính bảng</a></li>
										<li><a class="dropdown-item" href="#">Máy tính xách tay</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-globe me-2"></i>Tin tức</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-loudspeaker me-2"></i>Tuyển dụng</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-support me-2"></i>Liên hệ</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<section class="container mt-4 mb-grid-gutter">
			<div class="bg-faded-info rounded-3 py-4">
				<div class="row align-items-center">
					<div class="col-md-5">
						<div class="px-4 pe-sm-0 ps-sm-5">
							<span class="badge bg-danger">Khuyến mãi đặc biệt</span>
							<h3 class="mt-4 mb-1 text-body fw-light">Sản phẩm mới 100%</h3>
							<h2 class="mb-1">iPad Pro Bản Mới</h2>
							<p class="h5 text-body fw-light">Số lượng sản phẩm có hạn!</p>
							<a class="btn btn-accent" href="#">Xem chi tiết<i class="ci-arrow-right fs-ms ms-1"></i></a>
						</div>
					</div>
					<div class="col-md-7"><img src="img/offer.jpg" /></div>
				</div>
			</div>
		</section>
		
		<section class="container">
			<div class="tns-carousel border-end">
				<div class="tns-carousel-inner" data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/13.png" style="width:165px;" />
						</a>
					</div>
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/14.png" style="width:165px;" />
						</a>
					</div>
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/17.png" style="width:165px;" />
						</a>
					</div>
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/16.png" style="width:165px;" />
						</a>
					</div>
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/15.png" style="width:165px;" />
						</a>
					</div>
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/18.png" style="width:165px;" />
						</a>
					</div>
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/19.png" style="width:165px;" />
						</a>
					</div>
					<div>
						<a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right:-.0625rem;">
							<img class="d-block mx-auto" src="img/brands/20.png" style="width:165px;" />
						</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="container pt-3 pb-5">
			<div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
				<h2 class="h3 mb-0 pt-3 me-2">Điện thoại</h2>
				<div class="pt-3">
					<a class="btn btn-outline-accent btn-sm" href="#">
						Xem tất cả<i class="ci-arrow-right ms-1 me-n1"></i>
					</a>
				</div>
			</div>
			<div class="row pt-2 mx-n2">
				<div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
					<div class="card product-card">
						<a class="card-img-top d-block overflow-hidden" href="#">
							<img src="img/01.jpg" />
						</a>
						<div class="card-body py-2">
							<a class="product-meta d-block fs-xs pb-1" href="#">Sneakers & Keds</a>
							<h3 class="product-title fs-sm">
								<a href="#">Women Colorblock Sneakers</a>
							</h3>
							<div class="d-flex justify-content-between">
								<div class="product-price">
									<span class="text-accent">3.200.000<small>đ</small></span>
								</div>
								<div class="star-rating">
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star"></i>
								</div>
							</div>
						</div>
						<div class="card-body card-body-hidden">
							<a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
								<i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
							</a>
						</div>
					</div>
					<hr class="d-sm-none">
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
					<div class="card product-card">
						<a class="card-img-top d-block overflow-hidden" href="#">
							<img src="img/01.jpg" />
						</a>
						<div class="card-body py-2">
							<a class="product-meta d-block fs-xs pb-1" href="#">Sneakers & Keds</a>
							<h3 class="product-title fs-sm">
								<a href="#">Women Colorblock Sneakers</a>
							</h3>
							<div class="d-flex justify-content-between">
								<div class="product-price">
									<span class="text-accent">3.200.000<small>đ</small></span>
								</div>
								<div class="star-rating">
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star"></i>
								</div>
							</div>
						</div>
						<div class="card-body card-body-hidden">
							<a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
								<i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
							</a>
						</div>
					</div>
					<hr class="d-sm-none">
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
					<div class="card product-card">
						<a class="card-img-top d-block overflow-hidden" href="#">
							<img src="img/01.jpg" />
						</a>
						<div class="card-body py-2">
							<a class="product-meta d-block fs-xs pb-1" href="#">Sneakers & Keds</a>
							<h3 class="product-title fs-sm">
								<a href="#">Women Colorblock Sneakers</a>
							</h3>
							<div class="d-flex justify-content-between">
								<div class="product-price">
									<span class="text-accent">3.200.000<small>đ</small></span>
								</div>
								<div class="star-rating">
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star"></i>
								</div>
							</div>
						</div>
						<div class="card-body card-body-hidden">
							<a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
								<i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
							</a>
						</div>
					</div>
					<hr class="d-sm-none">
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
					<div class="card product-card">
						<a class="card-img-top d-block overflow-hidden" href="#">
							<img src="img/01.jpg" />
						</a>
						<div class="card-body py-2">
							<a class="product-meta d-block fs-xs pb-1" href="#">Sneakers & Keds</a>
							<h3 class="product-title fs-sm">
								<a href="#">Women Colorblock Sneakers</a>
							</h3>
							<div class="d-flex justify-content-between">
								<div class="product-price">
									<span class="text-accent">3.200.000<small>đ</small></span>
								</div>
								<div class="star-rating">
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star-filled active"></i>
									<i class="star-rating-icon ci-star"></i>
								</div>
							</div>
						</div>
						<div class="card-body card-body-hidden">
							<a class="btn btn-primary btn-sm d-block w-100 mb-2" href="#">
								<i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
							</a>
						</div>
					</div>
					<hr class="d-sm-none">
				</div>
			</div>
		</section>
	</main>
	
	<footer class="footer bg-dark">
		<div class="pt-5 bg-darker">
			<div class="container">
				<div class="row pb-2">
					<div class="col-md-6 text-center text-md-start mb-4">
						<div class="text-nowrap mb-4">
							<a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" /></a>
						</div>
						<div class="widget widget-links widget-light">
							<ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Trang chủ</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Sản phẩm</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tin tức</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tuyển dụng</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 text-center text-md-end mb-4">
						<div class="mb-3">
							<a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a>
							<a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a>
							<a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a>
							<a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a>
							<a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">Bản quyền © 2023 bởi Cartzilla.</div>
			</div>
		</div>
	</footer>
	
	<a class="btn-scroll-top" href="#top" data-scroll>
		<span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
		<i class="btn-scroll-top-icon ci-arrow-up"></i>
	</a>
	
	<script src="vendor/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="vendor/simplebar/simplebar.min.js"></script>
	<script src="vendor/tiny-slider/tiny-slider.js"></script>
	<script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
	<script src="vendor/nouislider/nouislider.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/shufflejs/shuffle.min.js"></script>
	<script src="vendor/lightgallery/lightgallery.min.js"></script>
	<script src="vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
	<script src="vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
	<script src="vendor/lightgallery/plugins/video/lg-video.min.js"></script>
	<script src="vendor/drift-zoom/Drift.min.js"></script>
	<script src="js/theme.min.js"></script>
</body>
</html>