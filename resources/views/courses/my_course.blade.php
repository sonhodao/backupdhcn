@extends('courses.layouts.app')
@section('title', 'Trang chủ')
@section('content')
	<div class="menu-overlay"></div>
	<div class="container">
		<div class="path magT15">

			<ul class="list flex">
				<li><a href="#">Trang chủ </a></li>
				<li><a href="#">Khóa học của tôi</a> </li>
			</ul>

		</div>

		<section id="section-9" class="magT15">
			<h3 class="heading magb10">Khóa học của tôi</h3>
			<div class="all-course my-course">
				<div class="titles flex align-i-center justify-c-between">
					<div class="clearfix">
						<span class="magr10">Danh mục:</span>

						<select class="boxselect">
							<option value="">Tất cả</option>
							<option value="">Nhiều bình luận nhất</option>
						</select>
					</div>
					<select class="boxselect cate-web">
						<option value="">Mới mua</option>
						<option value="">Nhiều bình luận nhất</option>
					</select>

				</div>
				<div class="box">
					<ul class="list-allcourse magb20">
						<li>
							<div class="image">
								<img
									src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							</div>
							<div class="content flex justify-c-between align-i">
								<div class="clearfix">
									<h3><a href="#" class="s15">Pháp lý kinh doanh - 160+ Vấn đề cần biết khi
											khởi
											tạo</a>
									</h3>

									<span class="name cl82">Nguyễn Nam</span>

									<div class="ratting flex align-i-baseline">
										<div id="half-stars-example">
											<div class="rating-group">
												<label aria-label="0.5 stars" class="rating__label rating__label--half"
													for="rating2-05"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5"
													type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1"
													type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half"
													for="rating2-15"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5"
													type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2"
													type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half"
													for="rating2-25"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5"
													type="radio" checked="">
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3"
													type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half"
													for="rating2-35"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5"
													type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4"
													type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half"
													for="rating2-45"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5"
													type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5"
													type="radio">
											</div>
										</div>
										<div class="form-output">
											5.0
										</div>
										<div class="view s12 cl82">
											(2,455)
										</div>
									</div>
									<p class="descrip">
										Khởi nghiệp là một hành trình thú vị nhưng cũng lắm gian nan. Chính vì sự gian
										nan
										đó mà
										đôi khi
										những người khởi nghiệp chỉ tập trung vào sản phẩm...
									</p>
								</div>
								<div class="clearfix">
									<div class="review align-i-baseline">
										<div class="progress">
											<div class="progress-value">40%</div>
										</div>
									</div>
									<span class="review-kh"><img src="image/review.png" class="magr10"> Đánh giá khóa
										học</span>
								</div>
							</div>
						</li>
						<li>
							<div class="image">
								<img
									src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							</div>
							<div class="content flex justify-c-between align-i">
								<div class="clearfix">
									<h3><a href="#" class="s15">Pháp lý kinh doanh - 160+ Vấn đề cần biết khi
											khởi
											tạo</a>
									</h3>

									<span class="name cl82">Nguyễn Nam</span>

									<div class="ratting flex align-i-baseline">
										<div id="half-stars-example">
											<div class="rating-group">
												<label aria-label="0.5 stars" class="rating__label rating__label--half"
													for="rating2-05"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5"
													type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1"
													type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half"
													for="rating2-15"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5"
													type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2"
													type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half"
													for="rating2-25"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5"
													type="radio" checked="">
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3"
													type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half"
													for="rating2-35"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5"
													type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4"
													type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half"
													for="rating2-45"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5"
													type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5"
													type="radio">
											</div>
										</div>
										<div class="form-output">
											5.0
										</div>
										<div class="view s12 cl82">
											(2,455)
										</div>
									</div>
									<p class="descrip">
										Khởi nghiệp là một hành trình thú vị nhưng cũng lắm gian nan. Chính vì sự gian
										nan
										đó mà
										đôi khi
										những người khởi nghiệp chỉ tập trung vào sản phẩm...
									</p>
								</div>
								<div class="clearfix">
									<div class="review align-i-baseline">
										<div class="progress">
											<div class="progress-value">40%</div>
										</div>
									</div>
									<span class="review-kh"><img src="image/review.png" class="magr10"> Đánh giá khóa
										học</span>
								</div>
							</div>
						</li>
						<li>
							<div class="image">
								<img
									src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							</div>
							<div class="content flex justify-c-between align-i">
								<div class="clearfix">
									<h3><a href="#" class="s15">Pháp lý kinh doanh - 160+ Vấn đề cần biết khi
											khởi
											tạo</a>
									</h3>

									<span class="name cl82">Nguyễn Nam</span>

									<div class="ratting flex align-i-baseline">
										<div id="half-stars-example">
											<div class="rating-group">
												<label aria-label="0.5 stars" class="rating__label rating__label--half"
													for="rating2-05"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5"
													type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1"
													type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half"
													for="rating2-15"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5"
													type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2"
													type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half"
													for="rating2-25"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5"
													type="radio" checked="">
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3"
													type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half"
													for="rating2-35"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5"
													type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4"
													type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half"
													for="rating2-45"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5"
													type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5"
													type="radio">
											</div>
										</div>
										<div class="form-output">
											5.0
										</div>
										<div class="view s12 cl82">
											(2,455)
										</div>
									</div>
									<p class="descrip">
										Khởi nghiệp là một hành trình thú vị nhưng cũng lắm gian nan. Chính vì sự gian
										nan
										đó mà
										đôi khi
										những người khởi nghiệp chỉ tập trung vào sản phẩm...
									</p>
								</div>
								<div class="clearfix">
									<div class="review align-i-baseline">
										<div class="progress">
											<div class="progress-value">40%</div>
										</div>
									</div>
									<span class="review-kh"><img src="image/review.png" class="magr10"> Đánh giá khóa
										học</span>
								</div>
							</div>
						</li>
						<li>
							<div class="image">
								<img
									src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							</div>
							<div class="content flex justify-c-between align-i">
								<div class="clearfix">
									<h3><a href="#" class="s15">Pháp lý kinh doanh - 160+ Vấn đề cần biết khi
											khởi
											tạo</a>
									</h3>

									<span class="name cl82">Nguyễn Nam</span>

									<div class="ratting flex align-i-baseline">
										<div id="half-stars-example">
											<div class="rating-group">
												<label aria-label="0.5 stars" class="rating__label rating__label--half"
													for="rating2-05"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5"
													type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1"
													type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half"
													for="rating2-15"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5"
													type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2"
													type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half"
													for="rating2-25"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5"
													type="radio" checked="">
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3"
													type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half"
													for="rating2-35"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5"
													type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4"
													type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half"
													for="rating2-45"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5"
													type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5"
													type="radio">
											</div>
										</div>
										<div class="form-output">
											5.0
										</div>
										<div class="view s12 cl82">
											(2,455)
										</div>
									</div>
									<p class="descrip">
										Khởi nghiệp là một hành trình thú vị nhưng cũng lắm gian nan. Chính vì sự gian
										nan
										đó mà
										đôi khi
										những người khởi nghiệp chỉ tập trung vào sản phẩm...
									</p>
								</div>
								<div class="clearfix">
									<div class="review align-i-baseline">
										<div class="progress">
											<div class="progress-value">40%</div>
										</div>
									</div>
									<span class="review-kh"><img src="image/review.png" class="magr10"> Đánh giá khóa
										học</span>
								</div>
							</div>
						</li>
						<li>
							<div class="image">
								<img
									src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							</div>
							<div class="content flex justify-c-between align-i">
								<div class="clearfix">
									<h3><a href="#" class="s15">Pháp lý kinh doanh - 160+ Vấn đề cần biết khi
											khởi
											tạo</a>
									</h3>

									<span class="name cl82">Nguyễn Nam</span>

									<div class="ratting flex align-i-baseline">
										<div id="half-stars-example">
											<div class="rating-group">
												<label aria-label="0.5 stars" class="rating__label rating__label--half"
													for="rating2-05"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5"
													type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1"
													type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half"
													for="rating2-15"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5"
													type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2"
													type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half"
													for="rating2-25"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5"
													type="radio" checked="">
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3"
													type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half"
													for="rating2-35"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5"
													type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4"
													type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half"
													for="rating2-45"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5"
													type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5"
													type="radio">
											</div>
										</div>
										<div class="form-output">
											5.0
										</div>
										<div class="view s12 cl82">
											(2,455)
										</div>
									</div>
									<p class="descrip">
										Khởi nghiệp là một hành trình thú vị nhưng cũng lắm gian nan. Chính vì sự gian
										nan
										đó mà
										đôi khi
										những người khởi nghiệp chỉ tập trung vào sản phẩm...
									</p>
								</div>
								<div class="clearfix">
									<div class="review align-i-baseline">
										<div class="progress">
											<div class="progress-value">40%</div>
										</div>
									</div>
									<span class="review-kh"><img src="image/review.png" class="magr10"> Đánh giá khóa
										học</span>
								</div>
							</div>
						</li>
						<li>
							<div class="image">
								<img
									src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							</div>
							<div class="content flex justify-c-between align-i">
								<div class="clearfix">
									<h3><a href="#" class="s15">Pháp lý kinh doanh - 160+ Vấn đề cần biết khi
											khởi
											tạo</a>
									</h3>

									<span class="name cl82">Nguyễn Nam</span>

									<div class="ratting flex align-i-baseline">
										<div id="half-stars-example">
											<div class="rating-group">
												<label aria-label="0.5 stars" class="rating__label rating__label--half"
													for="rating2-05"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5"
													type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1"
													type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half"
													for="rating2-15"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5"
													type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2"
													type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half"
													for="rating2-25"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5"
													type="radio" checked="">
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3"
													type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half"
													for="rating2-35"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5"
													type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4"
													type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half"
													for="rating2-45"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5"
													type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5"
													type="radio">
											</div>
										</div>
										<div class="form-output">
											5.0
										</div>
										<div class="view s12 cl82">
											(2,455)
										</div>
									</div>
									<p class="descrip">
										Khởi nghiệp là một hành trình thú vị nhưng cũng lắm gian nan. Chính vì sự gian
										nan
										đó mà
										đôi khi
										những người khởi nghiệp chỉ tập trung vào sản phẩm...
									</p>
								</div>
								<div class="clearfix">
									<div class="review align-i-baseline">
										<div class="progress">
											<div class="progress-value">40%</div>
										</div>
									</div>
									<span class="review-kh"><img src="image/review.png" class="magr10"> Đánh giá khóa
										học</span>
								</div>
							</div>
						</li>
						<li>
							<div class="image">
								<img
									src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							</div>
							<div class="content flex justify-c-between align-i">
								<div class="clearfix">
									<h3><a href="#" class="s15">Pháp lý kinh doanh - 160+ Vấn đề cần biết khi
											khởi
											tạo</a>
									</h3>

									<span class="name cl82">Nguyễn Nam</span>

									<div class="ratting flex align-i-baseline">
										<div id="half-stars-example">
											<div class="rating-group">
												<label aria-label="0.5 stars" class="rating__label rating__label--half"
													for="rating2-05"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5"
													type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1"
													type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half"
													for="rating2-15"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5"
													type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2"
													type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half"
													for="rating2-25"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5"
													type="radio" checked="">
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3"
													type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half"
													for="rating2-35"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5"
													type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4"
													type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half"
													for="rating2-45"><i
														class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5"
													type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i
														class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5"
													type="radio">
											</div>
										</div>
										<div class="form-output">
											5.0
										</div>
										<div class="view s12 cl82">
											(2,455)
										</div>
									</div>
									<p class="descrip">
										Khởi nghiệp là một hành trình thú vị nhưng cũng lắm gian nan. Chính vì sự gian
										nan
										đó mà
										đôi khi
										những người khởi nghiệp chỉ tập trung vào sản phẩm...
									</p>
								</div>
								<div class="clearfix">
									<div class="review align-i-baseline">
										<div class="progress">
											<div class="progress-value">40%</div>
										</div>
									</div>
									<span class="review-kh"><img src="image/review.png" class="magr10"> Đánh giá khóa
										học</span>
								</div>
							</div>
						</li>

					</ul>
					<p class="text-center"> <a href="#" class="btn-purple">
							Xem thêm
						</a>
					</p>
				</div>
			</div>

		</section>

	</div>
@stop