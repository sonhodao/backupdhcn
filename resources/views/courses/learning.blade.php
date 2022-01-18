@extends('courses.accounts.app')
@section('title', 'Học tập')
@section('content')

	<div id="wrapper" class="learn_page">
		<div class="header_learn site-header">
			<div class="flex align-i-center">
				<a href="#" class="logo"><img src="image/logo-login.png" class="cate-web">
					<img class="home" src="image/home.png">
				</a>
				<h1><a href="#">Learn the new features of Bootstrap 4, and code three responsive websites.</a></h1>
			</div>
			<div class="customer-account">
				<ul class="list">
					<li class="search-mobile"><a href="#"><img src="image/search.png"></a></li>
					<li><a href="#" class="relative"><img src="image/shopping-car-white.png"> <span
								class="cart">3</span></a>
					</li>
					<li>
						<div class="account-link"><a href="#">Hoàng Yến</a> <span class="avar-user"><img
									src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-2/img/avatar-s-6.0c96c10d.jpg"></span>
						</div>
					</li>
				</ul>
				<div class="info-user">
					<ul class="nav navbar-nav">
						<li><a href="#">danh sách khóa học</a></li>
						<li><a href="#">thông tin cá nhân</a></li>
						<li><a href="#">đổi mật khẩu</a></li>
						<li><a href="#">thoát</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="content_wrap clearfix">
			<div class="box-video">
				<div class="left-page">
					<div class="video-wapper">
						<iframe id="YouTubeVideo-1499790529450" data-video-id="V2vwFS8ae2I" frameborder="0"
							allowfullscreen="1"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							title="YouTube video player" width="1030" height="720"
							src="https://www.youtube.com/embed/V2vwFS8ae2I?autohide=0&amp;branding=0&amp;cc_load_policy=0&amp;controls=0&amp;fs=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;quality=hd720&amp;rel=0&amp;showinfo=0&amp;wmode=opaque&amp;widget_referrer=https%3A%2F%2Fthemes.shopify.com%2Fthemes%2Fmotion%2Fstyles%2Fclassic%2Fpreview&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fmotion-theme-adventure.myshopify.com&amp;widgetid=1"
							tabindex="-1"></iframe>
					</div>
					<div class="listvideo mobile">
						<div class="lesson-card">
							<ul class="list">
								<li class="gf_dropdown" data-level="1">
									<a href="#" class="flex justify-c-between">
										<div class="flex align-i-center clearfix">
											<span class="icon">
												<img src="image/plus.png" class="plus">
												<img src="image/minus.png" class="minus">
											</span>
											<span> Phần 1: Kỹ năng giao tiếp </span>
										</div>
										<div class="clearfix">
											<span class="part">1/4</span>
											<span class="time">15p15s</span></div>
									</a>
									<div class="sub-course">
										<ul>
											<li data-level="2">
												<span class="icons watched">
												</span>
												<a href="#" class="textlink flex justify-c-between">
													<span> Pourquoi utiliser Amazon ? </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> Les différents points abordés dans cette formation </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> Qui suis-je ? </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> La différence entre Amazon Seller et Amazon FBA</span>
													<span class="time">15p15s</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="gf_dropdown" data-level="1">
									<a href="#" class="flex justify-c-between">
										<div class="flex align-i-center clearfix">
											<span class="icon">
												<img src="image/plus.png" class="plus">
												<img src="image/minus.png" class="minus">
											</span>
											<span> Phần 2: Kỹ năng giao tiếp </span>
										</div>
										<div class="clearfix">
											<span class="part">0/4</span>
											<span class="time">15p15s</span></div>
									</a>
									<div class="sub-course">
										<ul>
											<li data-level="2">
												<span class="icons watched">
												</span>
												<a href="#" class="textlink flex justify-c-between">
													<span> Pourquoi utiliser Amazon ? </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> Les différents points abordés dans cette formation </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> Qui suis-je ? </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> La différence entre Amazon Seller et Amazon FBA</span>
													<span class="time">15p15s</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="gf_dropdown" data-level="1">
									<a href="#" class="flex justify-c-between">
										<div class="flex align-i-center clearfix">
											<span class="icon">
												<img src="image/plus.png" class="plus">
												<img src="image/minus.png" class="minus">
											</span>
											<span> Phần 3: Kỹ năng giao tiếp </span>
										</div>
										<div class="clearfix">
											<span class="part">0/4</span>
											<span class="time">15p15s</span></div>
									</a>
									<div class="sub-course">
										<ul>
											<li data-level="2">
												<span class="icons watched">
												</span>
												<a href="#" class="textlink flex justify-c-between">
													<span> Pourquoi utiliser Amazon ? </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> Les différents points abordés dans cette formation </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> Qui suis-je ? </span>
													<span class="time">15p15s</span>
												</a>
											</li>
											<li data-level="2">
												<span class="icons notseen">
												</span>
												<a href="#" class=" flex justify-c-between">
													<span> La différence entre Amazon Seller et Amazon FBA</span>
													<span class="time">15p15s</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="info-video">
						<div class="tab">
							<ul class="list flex">
								<li>
									<a href="#" class="active">Giới thiệu</a>
								</li>
								<li>
									<a href="#">Hỏi đáp</a>
								</li>
							</ul>
						</div>
						<div class="clearfix">
							<div class="title-new">
								Bạn sẽ học được gì?
							</div>
							<div class="box-gray magb20">
								<ul class="list">
									<li><a href="#">Kỹ năng từ chối khách hàng</a></li>
									<li><a href="#">Kỹ năng chửi khách hàng</a></li>
									<li><a href="#">Giao tiếp tốt với người bản ngữ</a></li>
									<li><a href="#"> Kỹ năng từ chối khách hàng</a></li>
								</ul>
							</div>


							<div class="title-new">
								Giới thiệu khóa học
							</div>
							<div class="box s15 magb20">
								<p>Ở tội Vi phạm các quy định về quản lý đất đai, VKS đề nghị phạt bị cáo Nguyễn Điểu
									(cựu
									giám
									đốc Sở Tài nguyên Môi trường Đà Nẵng) 5-6 năm tù, Trần Văn Toán (cựu phó giám đốc Sở
									Tài
									nguyên Môi trường Đà Nẵng) 4-5 năm tù, Lê Cảnh Dương (cựu phó giám đốc Trung tâm Xúc
									tiến
									Đầu tư Đà Nẵng) 4-5 năm tù, Nguyễn Văn Cán (cựu chánh văn phòng UBND Đà Nẵng) 3-4
									năm
									tù,
									Đào Tấn Bằng (cựu phó chánh văn phòng UBND Đà Nẵng) 3-4 năm tù, Nguyễn Viết Vĩnh
									(cựu
									trưởng
									phòng Quản lý đô thị) 3-4 năm tù, Nguyễn Đình Thống (cựu giám đốc Công ty Quản lý và
									Khai
									thác đất Đà Nẵng) 4-5 năm tù.</p>
								<p>Nhóm tội Vi phạm quy định về quản lý, sử dụng tài sản nhà nước
									gây thất thoát, bị cáo Nguyễn Thanh Sang (cựu phó giám đốc Sở Tài chính Đà Nẵng) bị
									đề
									nghị
									8-9 năm tù, Nguyễn Thị Thu Hà (cựu giám đốc Sở Tài chính Đà Nẵng) 7-8 năm tù, Nguyễn
									Công
									Lang (cựu giám đốc Công ty Quản lý nhà Đà Nẵng) 9-10 năm tù, Huỳnh Tấn Lộc (cựu tổng
									giám
									đốc Công ty Công nghệ phẩm Đà Nẵng) 2-3 năm tù, Phan Ngọc Thạch (cựu tổng giám đốc
									Công
									ty
									Du lịch Đà Nẵng) 2-3 năm tù, Trần Phi (cựu tổng giám đốc Công ty XNK Đà Nẵng) 2-3
									năm
									tù, Lê
									Anh Tuấn (nguyên tổng giám đốc Công ty Cung ứng Tàu biển Đà Nẵng) 2-3 năm tù.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="listvideo">
					<div class="lesson-card">
						<ul class="list">
							<li class="gf_dropdown" data-level="1">
								<a href="#" class="flex justify-c-between">
									<div class="flex align-i-center clearfix">
										<span class="icon">
											<img src="image/plus.png" class="plus">
											<img src="image/minus.png" class="minus">
										</span>
										<span> Phần 1: Kỹ năng giao tiếp </span>
									</div>
									<div class="clearfix">
										<span class="part">1/4</span>
										<span class="time">15p15s</span></div>
								</a>
								<div class="sub-course">
									<ul>
										<li data-level="2">
											<span class="icons watched">
											</span>
											<a href="#" class="textlink flex justify-c-between">
												<span> Pourquoi utiliser Amazon ? </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> Les différents points abordés dans cette formation </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> Qui suis-je ? </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> La différence entre Amazon Seller et Amazon FBA</span>
												<span class="time">15p15s</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="gf_dropdown" data-level="1">
								<a href="#" class="flex justify-c-between">
									<div class="flex align-i-center clearfix">
										<span class="icon">
											<img src="image/plus.png" class="plus">
											<img src="image/minus.png" class="minus">
										</span>
										<span> Phần 2: Kỹ năng giao tiếp </span>
									</div>
									<div class="clearfix">
										<span class="part">0/4</span>
										<span class="time">15p15s</span></div>
								</a>
								<div class="sub-course">
									<ul>
										<li data-level="2">
											<span class="icons watched">
											</span>
											<a href="#" class="textlink flex justify-c-between">
												<span> Pourquoi utiliser Amazon ? </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> Les différents points abordés dans cette formation </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> Qui suis-je ? </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> La différence entre Amazon Seller et Amazon FBA</span>
												<span class="time">15p15s</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="gf_dropdown" data-level="1">
								<a href="#" class="flex justify-c-between">
									<div class="flex align-i-center clearfix">
										<span class="icon">
											<img src="image/plus.png" class="plus">
											<img src="image/minus.png" class="minus">
										</span>
										<span> Phần 3: Kỹ năng giao tiếp </span>
									</div>
									<div class="clearfix">
										<span class="part">0/4</span>
										<span class="time">15p15s</span></div>
								</a>
								<div class="sub-course">
									<ul>
										<li data-level="2">
											<span class="icons watched">
											</span>
											<a href="#" class="textlink flex justify-c-between">
												<span> Pourquoi utiliser Amazon ? </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> Les différents points abordés dans cette formation </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> Qui suis-je ? </span>
												<span class="time">15p15s</span>
											</a>
										</li>
										<li data-level="2">
											<span class="icons notseen">
											</span>
											<a href="#" class=" flex justify-c-between">
												<span> La différence entre Amazon Seller et Amazon FBA</span>
												<span class="time">15p15s</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
@include('courses.layouts.footer')