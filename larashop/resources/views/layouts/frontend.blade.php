	<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#ffffff" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title', 'Trang chủ') - {{ config('app.name', 'Laravel') }}</title>
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/img/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/img/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/img/favicon-16x16.png') }}" />
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('public/vendor/simplebar/simplebar.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/vendor/tiny-slider/tiny-slider.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/vendor/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/vendor/drift-zoom/drift-basic.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/vendor/lightgallery/lightgallery-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/css/theme.min.css') }}" />
    </head>
    <body class="handheld-toolbar-enabled">
        <main class="page-wrapper">
            <!-- Header -->
            <header class="shadow-sm">
                <div class="navbar-sticky bg-light">
                    <div class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                           <a href="{{ route('frontend.home') }}">Tech<span >shop</span></a>
                            <div class="input-group d-none d-lg-flex mx-4">
                                <input class="form-control rounded-end pe-5" type="text" placeholder="Tìm kiếm" />
                                <i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                            </div>
                            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                @guest
                                    <a class="navbar-tool" href="{{ route('user.dangnhap') }}">
                                        <div class="navbar-tool-icon-box">
                                            <i class="navbar-tool-icon ci-user"></i>
                                        </div>
                                        <div class="navbar-tool-text">
                                            <small>Xin chào</small>Khách hàng
                                        </div>
                                    </a>
                                @else
                                    <a class="navbar-tool" href="{{ route('user.home') }}">
                                        <div class="navbar-tool-icon-box">
                                            <i class="navbar-tool-icon ci-user"></i>
                                        </div>
                                        <div class="navbar-tool-text">
                                            <small>Xin chào</small>{{ Auth::user()->name }}
                                        </div>
                                    </a>
                                @endguest
                                <div class="navbar-tool ms-3">
                                    <a class="navbar-tool-icon-box bg-secondary" href="{{ route('frontend.giohang') }}">
                                        <span class="navbar-tool-label">{{ Cart::count() ?? 0 }}</span>
                                        <i class="navbar-tool-icon ci-cart"></i>
                                    </a>
                                    <a class="navbar-tool-text" href="{{ route('frontend.giohang') }}">
                                        <small>Giỏ hàng</small>{{ Cart::priceTotal() }}đ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.home') }}">
                                            <i class="ci-home me-2"></i>Trang chủ
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('frontend.sanpham') }}" data-bs-toggle="dropdown">
                                            <i class="ci-gift me-2"></i>Sản phẩm
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => 'dien-thoai']) }}">
                                                    Điện thoại
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => 'may-tinh-bang']) }}">
                                                    Máy tính bảng
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => 'may-tinh-xach-tay']) }}">
                                                    Máy tính xách tay
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.baiviet') }}">
                                            <i class="ci-globe me-2"></i>Tin tức
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.tuyendung') }}">
                                            <i class="ci-loudspeaker me-2"></i>Tuyển dụng
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.lienhe') }}">
                                            <i class="ci-support me-2"></i>Liên hệ
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @yield('content')
        </main>
		<footer class="footer bg-dark">
			<div class="pt-5 bg-darker">
				<div class="container">
					<div class="row pb-2">
						<div class="col-md-6 text-center text-md-start mb-4">
							<div class="text-nowrap mb-4">
								<a class="d-inline-block align-middle mt-n1 me-3" href="#">
									<img class="d-block" src="{{ asset('public/img/footer-logo-light.png') }}" width="117" />
								</a>
							</div>
							<div class="widget widget-links widget-light">
								<ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
									<li class="widget-list-item me-4">
										<a class="widget-list-link" href="{{ route('frontend.home') }}">Trang chủ</a>
									</li>
									<li class="widget-list-item me-4">
										<a class="widget-list-link" href="{{ route('frontend.sanpham') }}">Sản phẩm</a>
									</li>
									<li class="widget-list-item me-4">
										<a class="widget-list-link" href="{{ route('frontend.baiviet') }}">Tin tức</a>
									</li>
									<li class="widget-list-item me-4">
										<a class="widget-list-link" href="{{ route('frontend.tuyendung') }}">Tuyển dụng</a>
									</li>
									<li class="widget-list-item me-4">
										<a class="widget-list-link" href="{{ route('frontend.lienhe') }}">Liên hệ</a>
									</li>
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
					<div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">
						Bản quyền © 2023 bởi {{ config('app.name', 'Laravel') }}.
					</div>
				</div>
			</div>
		</footer>

		<a class="btn-scroll-top" href="#top" data-scroll>
			<span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
			<i class="btn-scroll-top-icon ci-arrow-up"></i>
		</a>

		<script src="{{ asset('public/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('public/vendor/simplebar/simplebar.min.js') }}"></script>
		<script src="{{ asset('public/vendor/tiny-slider/tiny-slider.js') }}"></script>
		<script src="{{ asset('public/vendor/smooth-scroll/smooth-scroll.polyfills.min.js') }}"></script>
		<script src="{{ asset('public/vendor/nouislider/nouislider.min.js') }}"></script>
		<script src="{{ asset('public/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('public/vendor/shufflejs/shuffle.min.js') }}"></script>
		<script src="{{ asset('public/vendor/lightgallery/lightgallery.min.js') }}"></script>
		<script src="{{ asset('public/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js') }}"></script>
		<script src="{{ asset('public/vendor/lightgallery/plugins/zoom/lg-zoom.min.js') }}"></script>
		<script src="{{ asset('public/vendor/lightgallery/plugins/video/lg-video.min.js') }}"></script>
		<script src="{{ asset('public/vendor/drift-zoom/Drift.min.js') }}"></script>
		<script src="{{ asset('public/js/theme.min.js') }}"></script>


    </body>
</html>
