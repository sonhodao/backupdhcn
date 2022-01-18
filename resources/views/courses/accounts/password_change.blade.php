@extends('courses.layouts.app')
@section('title', 'Thay đổi mật khẩu')
@section('content')

	<div class="menu-overlay"></div>
	<div class="container">
		<div class="path magT15">

			<ul class="list flex">
				<li><a href="#">Trang chủ </a></li>
				<li><a href="#">Thay đổi mật khẩu</a> </li>
			</ul>

		</div>

		<section id="section-10" class="magT15">
			<h3 class="heading magb10">Thay đổi mật khẩu</h3>
			<div class="profile-page">
				<form class="form-field magT15">
					<div class="form-group">
						<input type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu cũ...">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu mới...">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="inputPassword"
							placeholder="Xác nhận mật khẩu...">
					</div>
					<button type="submit" class="btn-purple magT15">Lưu lại</button>

				</form>
			</div>


		</section>

	</div>

@stop

	