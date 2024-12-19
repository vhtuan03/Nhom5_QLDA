@extends('layouts.frontend')

@section('title', 'Hoàn tất đặt hàng')

@section('content')
	<div class="container pb-5 mb-sm-4">
		<div class="pt-5">
			<div class="card py-3 mt-sm-3">
				<div class="card-body text-center">
					<h2 class="h4 pb-3">Cảm ơn bạn đã đặt hàng!</h2>
					<p class="fs-sm mb-2">Đơn hàng của bạn sẽ được xử lý trong thời gian sớm nhất.</p>
					<p class="fs-sm">Bạn sẽ sớm nhận được Email xác nhận đơn hàng.</p>
					<a class="btn btn-danger mt-3 me-3" href="{{ route('frontend.home') }}">
						<i class="ci-cart me-2"></i>Tiếp tục mua hàng
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection
