@extends('courses.accounts.app')
@section('title','Đăng ký')
@section('content')
<body class="form-container">

	<header>
		<div class="container">

			<div class="main-nav">
				<div class="header-item">

					<div class="intro">
						<ul class="list">
							<li>
								<span class="magr10">
									<img src="course/image/book.png">
								</span>
								<div class="clearfix">
									<span class="name"><span class="s18 magr5"> 14.569 </span> khóa học</span>
									<span class="descrip">Khám phá nhiều chủ đề mới</span>
								</div>
							</li>
							<li>
								<span class="magr10">
									<img src="course/image/presentation.png">
								</span>
								<div class="clearfix">
									<span class="name"><span class="s18 magr5">568</span> chuyên gia</span>
									<span class="descrip">Chọn người hướng dẫn phù hợp</span>
								</div>
							</li>
							<li>
								<span class="magr10">
									<img src="course/image/clock.png">
								</span>
								<div class="clearfix">
									<span class="name">Truy cập trọn đời</span>
									<span class="descrip">Học theo lịch trình của bạn</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="signupforms">

			<p class="text-center"><img src="course/image/logo-login.png" class="logo"> <img src="image/logo.png"
					class="logo logo-mobile">
			</p>
			<p class="clfff magb20 text-center cate-web">Sống và học tập theo gương Bác Hồ vĩ đại</p>

			<div class="boxcont">
				<h3>Đăng ký</h3>
				<span class="s15 cl82 block text-center">Bằng tài khoản mạng xã hội</span>
				<div class="flex magT25 magb20">
					<a href="#" class="btn-google magr10"><img src="course/image/google.png"> google</a>
					<a href="#" class="btn-facebook"><img src="course/image/ic-facebook.png"> Facebook</a>
				</div>
				<span class="s15 cl82 block text-center">Hoặc</span>
				<form class="form-field magT15" action="" method="post">
					@csrf
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Họ tên... ">
							@if ($errors->has('name'))
								<span class="error invalid-feedback" style="display: block; color:red" role="alert">
									<strong>{{$errors->first('name')}}</strong>
								</span>							
							@endif
					</div>
					
					<div class="form-group">
						<input type="text" name="phone" class="form-control" placeholder="Số điện thoại...">
						@if ($errors->has('phone'))
								<span class="error invalid-feedback" style="display: block; color:red" role="alert">
									<strong>{{$errors->first('phone')}}</strong>
								</span>							
						@endif
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" id="inputPassword" placeholder=" Mật khẩu...">
						@if ($errors->has('password'))
								<span class="error invalid-feedback" style="display: block; color:red" role="alert">
									<strong>{{$errors->first('password')}}</strong>
								</span>							
						@endif
					</div>
					<div class="form-check">
						<span class="flex">
							<input class="inp-cbx hidden" id="cbx2" value="true" type="checkbox" name="check" 0333333333>
							<label class="cbx" for="cbx2">
								<span>
									<svg width="12px" height="10px" viewBox="0 0 12 10">
										<polyline points="1.5 6 4.5 9 10.5 1">
										</polyline>
									</svg>
								</span> Chấp nhận <a href="#" class="clblue magl10">điều khoản</a>
							</label>
						</span>
					</div>
					<button type="submit" class="btn-purple magT15">Đăng ký</button>
					<div class="flex s13 magT15">
						<span> Bạn đã có tài khoản?<a href="{{route('login')}}" class="clblue"> Đăng nhập </a> </span>
					</div>
				</form>
			</div>
		</div>

	</div>

</body>

@stop