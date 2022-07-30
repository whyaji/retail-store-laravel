<body>
    <!--==================== Header ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav__btns">
                <!-- theme change button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
            <a href="#" class="nav__logo">Retail Store</a>
            <div class="nav__menu" id="nav-menu">
                <i class="uil uil-times nav__close" id="nav-close"></i>
                <ul class="nav__list">
                    <li class="nav__item nav__end-list">
                        <a href="" class="nav__link nav__end-item">
                            <div class="nav__link-item">
                                Login
                            </div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{url('/')}}" class="nav__link">
                            <div class="nav__link-item">
                                Home
                            </div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <div class="nav__link-item">
                                Apps
                            </div>
                        </a>
                        <div class="sub__menu">
                            <ul class="sub__nav list__sub-menu sub__menu-app">
                                <li><a class="sub__menu-content" href="{{url('/calculator')}}">Calculator</a></li>
                            </ul>
                        </div>
                    </li>
                    <div class="sub__menu-hide">
                        <ul class="sub__nav-menu list__sub-menu">
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="{{url('/calculator')}}">Calculator</a></li>
                        </ul>
                    </div>
                    <li class="nav__item">
                        <a href="{{url('/author')}}" class="nav__link">
                            <div class="nav__link-item">
                                Data Pegawai
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <li class="nav__end">
                    <a class="nav__link nav__end-spacer nav__end-hide">|</a>
                    <a href="{{url('/admin')}}" class="nav__item nav__link nav__end-hide">
                        Login
                    </a>
                </li>
            </div>
        </nav>
    </header>