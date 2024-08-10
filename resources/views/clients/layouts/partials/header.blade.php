<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Apple</h1>
        <span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="#hero" class="active">Cửa hàng<br></a></li>
            <li><a href="#about">Mac</a></li>
            <li><a href="#services">Ipad</a></li>
            <li><a href="#portfolio">Iphone</a></li>
            <li><a href="#team">Phụ kiện</a></li>
{{--            <form action="{{ route('logout') }}" method="post">@csrf--}}
{{--                <li><a href="" type="submit">Logout</a></li>--}}
{{--            </form>--}}
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="#">Dropdown 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ asset('products.create') }}">Deep Dropdown 1</a></li>
                            <li><a href="#">Deep Dropdown 2</a></li>
                            <li><a href="#">Deep Dropdown 3</a></li>
                            <li><a href="#">Deep Dropdown 4</a></li>
                            <li><a href="#">Deep Dropdown 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Dropdown 2</a></li>
                    <li><a href="#">Dropdown 3</a></li>
                    <li><a href="#">Dropdown 4</a></li>
                </ul>
            </li>

            @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng nhập </a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng ký</a></li>
                        @endif
                    @endauth

            @endif
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="index.html#about">Get Started</a>

</div>
