<!-- Header Start -->
<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top nav-bg">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                        aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="mdi mdi-menu"></span>
                    <span class="mdi mdi-menu"></span>
                    <span class="mdi mdi-menu"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#home">
                            @lang('dashboard.home')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#about">
                            @lang('dashboard.about')
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#industry">
                            @lang('dashboard.industry')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#partners">
                            @lang('dashboard.partners')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#team">
                            @lang('dashboard.team')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#contact">
                            @lang('dashboard.contact')
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-{{$languages[session('lang')]['code']}}"> </span> {{$languages[session('lang')]['title']}}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown09">
                            @foreach($languages as $key => $language)
                                @if($key !== session('lang'))
                                    <a class="dropdown-item" href="/changeLanguage?lang={{$key}}"><span
                                            class="flag-icon flag-icon-{{$language['code']}}"> </span> {{$language['title']}}
                                    </a>
                                @endif
                                @endforeach
                        </div>
                    </li>
                </ul>
{{--                <div class="header-actions">--}}
{{--                    <!-- Rounded switch -->--}}
{{--                    <div class="custom-control custom-switch">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="customSwitch1">--}}
{{--                        <label class="custom-control-label" for="customSwitch1">Dark mode</label>--}}
{{--                    </div>--}}

{{--                </div>--}}
                <!-- Search Box Start -->
            {{--                <div class="search-icon">--}}
            {{--              <span class="open-search">--}}
            {{--                <i class="mdi mdi-magnify btn btn-common"></i>--}}
            {{--              </span>--}}
            {{--                </div>--}}
            {{--                <form role="search" class="navbar-form">--}}
            {{--                    <div class="container">--}}
            {{--                        <div class="row">--}}
            {{--                            <div class="form-group has-feedback">--}}
            {{--                                <input type="text" placeholder="{{__('dashboard.type-and-search')}}"--}}
            {{--                                       class="form-control">--}}
            {{--                                <div class="close"><i class="mdi mdi-close"></i></div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            <!-- Search Box End -->
            </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
            <li>
                <a class="nav-link scroll-link" href="#home">
                    @lang('dashboard.home')
                </a>
            </li>
            <li>
                <a class="nav-link scroll-link" href="#about">
                    @lang('dashboard.about')
                </a>
            </li>
            <li>
                <a class="nav-link scroll-link" href="#industry">
                    @lang('dashboard.industry')
                </a>
            </li>
            <li>
                <a class="nav-link scroll-link" href="#partners">
                    @lang('dashboard.partners')
                </a>
            </li>
            <li>
                <a class="nav-link scroll-link" href="#team">
                    @lang('dashboard.team')
                </a>
            </li>
            <li>
                <a class="nav-link scroll-link" href="#contact">
                    @lang('dashboard.contact')
                </a>
            </li>
        </ul>
        <!-- Mobile Menu End -->
    </nav>
</header>
<!-- Header End -->
