
<header>
    <div class="container">
        <div class="site-header">
            <div class="header-content">
                <div class="menu-mobile relative">
                    <a href="#" class="block magb20">
                        <img src="course/image/menu.png" class="magr10"> <img src="course/image/logo.png">
                    </a>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Ngoại ngữ</a></li>
                        <li><a href="#">MARKETING</a></li>
                        <li><a href="#">tin học</a></li>
                        <li><a href="#">kinh doanh</a></li>
                        <li><a href="#">bán hàng</a></li>
                        <li><a href="#">công nghệ thông tin</a></li>
                        <li><a href="#">phong cách sống</a></li>
                        <li><a href="#">phát triển cá nhân</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                        <li><a href="#">Đăng ký</a></li>
                    </ul>
                </div>
                <a href="#" class="btnmenu-mobile magr10">
                    <img src="course/image/menu.png" class="magr10">
                </a>
                <h1 class="logo"><a href="{{route('course-index')}}"><img src="course/image/logo.png"></a></h1>
                <div class="search-bar">
                    <form class="search-form" action="/search" method="get" role="search">
                        <button class="search-button"><img src="course/image/search.png">
                        </button>
                        <input type="search" name="q" id="open-search-bar" value=""
                            placeholder="Tìm kiếm khóa học... " class="search-form-input">

                    </form>
                </div>
            </div>
            <div class="customer-account">
                <ul class="list">
                    <li class="search-mobile"><a href="#"><img src="course/image/search.png"></a></li>
                    <li><a href="#"><img src="course/image/shopping-cart.png"></a></li>
                    @if (Auth::guard('course_register')->check())
                    <div class="account-link"><a style="margin: 10px; color:black; font-wi" href="{{route('info')}}">{{Auth::guard('course_register')->user()->name}}</a> <span class="avar-user"><img
                        src="http://127.0.0.1:8000/storage/uploads/unnamed.jpg"></span>
                       <a href="{{route('course-logout')}}" style="float: right; margin-left:10px;"><i class="fa fa-sign-out" style="font-size: 35px; color: black;" aria-hidden="true"></i></a>
                    @else
                        <li><a href="{{route('register')}}">Đăng kí</a></li>
                        <li><a href="{{route('login')}}" class="btn-orange">Đăng nhập</a></li>
                    
                    @endif
                    
                </ul>
            </div>

        </div>
        <div class="search-bar showsearch">
            <form class="search-form" action="/search" method="get" role="search">

                <input type="search" name="q" id="open-search-bar" value="" placeholder="Tìm kiếm khóa học... "
                    class="search-form-input">
                <button class="search-button"><img src="course/image/search.png">
                </button>
            </form>
        </div>
        <div class="main-nav">
            <div class="header-item">
                <div class="menu relative">
                    <a href="#">
                        <img src="course/image/menu.png" class="magr10">
                        Danh mục
                    </a>
                    <div id="navbar" class="sidebar">
                        <ul class="nav ">
                            @foreach (\App\Models\CourseCategory::all() as $category)
                            <li><a href="#">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="intro">
                    <ul class="list">
                        <li>
                            <span class="magr10">
                                <img src="course/image/book.png">
                            </span>
                            <div class="clearfix">
                                <span class="name"><span class="s18 magr5"> {{\App\Models\CourseCategory::count()}} </span> khóa học</span>
                                <span class="descrip">Khám phá nhiều chủ đề mới</span>
                            </div>
                        </li>
                        <li>
                            <span class="magr10">
                                <img src="course/image/presentation.png">
                            </span>
                            <div class="clearfix">
                                <span class="name"><span class="s18 magr5">{{\App\Models\Teacher::count()}}</span> chuyên gia</span>
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