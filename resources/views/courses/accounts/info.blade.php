@extends('courses.layouts.app')
@section('title', 'Trang chủ')
@section('content')

	<div class="menu-overlay"></div>
	<div class="container">
		<div class="path magT15">

			<ul class="list flex">
				<li><a href="#">Trang chủ </a></li>
				<li><a href="#">Thông tin cá nhân</a> </li>
			</ul>

		</div>

		<section id="section-10" class="magT15">
			<h3 class="heading magb10">Thông tin cá nhân</h3>
			<div class="profile-page">
				<form class="form-field magT15">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Họ tên...">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email...">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Số điện thoại...">
					</div>
					<button type="submit" class="btn-purple magT15">Lưu lại</button>

				</form>
			</div>
		</section>
	</div>

	@stop	