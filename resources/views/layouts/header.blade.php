<nav class="guest-nav">
    <div class="col-sm-4">
        <ul class="listLeft">
            <li class="item">
                <img src="{{ '/images/logo.png' }}" alt="header logo">
                <a href="/">Museum Keraton</a>
            </li>
            {{-- <li class="item mx-2"><a href="#">beranda</a></li>
            <li class="item mx-2"><a href="#">beranda</a></li> --}}
        </ul>
    </div>
    {{-- <div class="col-sm-4">
        <ul class="listLogo">
        </ul>
    </div> --}}
    <div class="col-sm-8">
        <ul class="listRight">
            <li class="item mx-2"><a href="/">@lang('public.home')</a></li>
            <li class="item mx-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font-weight: 400" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    @lang('public.about')
                </a>
                <ul class="dropdown-index dropdown-menu border-0" style="background-color: #228B22;">
                    <li><a class="dropdown-item" href="/definition">@lang('public.definition')</a></li>
                    <li><a class="dropdown-item" href="/history">@lang('public.history')</a></li>
                    {{-- <li><a class="dropdown-item" href="/structure">@lang('public.structure')</a></li> --}}
                    <li><a class="dropdown-item" href="/location">@lang('public.location')</a></li>

                </ul>
            </li>
            <li class="item mx-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font-weight: 400" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    @lang('public.service')
                </a>
                <ul class="dropdown-index dropdown-menu border-0" style="background-color: #228B22;">
                    <li><a class="dropdown-item" href="/schedule">@lang('public.time')</a></li>
                    <li><a class="dropdown-item" href="/tour">@lang('public.tour')</a></li>

                </ul>
            </li>
            <li class="item mx-2"><a href="/collection">@lang('public.collection')</a></li>
            <li class="item mx-2"><a href="/event">@lang('public.event')</a></li>
            <li class="item mx-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font-weight: 400" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    @lang('public.language')
                </a>
                <ul class="dropdown-index dropdown-menu border-0" style="background-color: #228B22;">
                    <li><a class="dropdown-item" href="/locale/en">@lang('public.english')</a></li>
                    <li><a class="dropdown-item" href="/locale/in">@lang('public.indonesian')</a></li>

                </ul>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbarMob">
    <div class="navbarMob-center">
        <a href="#" id="menu">Menu <i class="fa-solid fa-bars"></i></a>
    </div>
</nav>

<div class="offcanvas-backdrop" id="backdrop">

</div>

<div class="sidebar" id="sidebar">
    <div class="close-button-sidebar">
        <button id="close-sidebar" class="border-0"
            style="background-color: transparent; color:white; margin-top:5px;"><i
                class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="sidebar-header">
        <a href="/" class="d-flex justify-content-start">
            <img src="{{ asset('images/logo.png') }}" alt="logo">
        </a>
    </div>
    <div class="sidebar-body">
        <ul id="sidelist" style="list-style-type: none;">
            <a href="/">
                <p>@lang('public.home')</p>
            </a>
            <li>
                <p class="d-inline-flex gap-1">
                    <a data-bs-toggle="collapse" href="#collapseExampleAbout" role="button" aria-expanded="false"
                        aria-controls="collapseExampleAbout">
                        @lang('public.about') <i class="fa-solid fa-caret-down"></i>
                    </a>

                </p>
                <div class="collapse" id="collapseExampleAbout">
                    <ul>
                        <li><a href="/definition">@lang('public.definition')</a></li>
                        <li><a href="/history">@lang('public.history')</a></li>
                        {{-- <li><a href="/structure">@lang('public.structu')</a></li> --}}
                        <li><a href="/location">@lang('public.location')</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <p class="d-inline-flex gap-1">
                    <a data-bs-toggle="collapse" href="#collapseExampleService" role="button" aria-expanded="false"
                        aria-controls="collapseExampleService">
                        @lang('public.service') <i class="fa-solid fa-caret-down"></i>
                    </a>

                </p>
                <div class="collapse" id="collapseExampleService">
                    <ul>
                        <li><a href="/schedule">@lang('public.time')</a></li>
                        <li><a href="/tour">@lang('public.tour')</a></li>
                    </ul>
                </div>
            </li>
            <a href="/collection">
                <p>@lang('public.collection')</p>
            </a>
            <a href="/event">
                <p>@lang('public.event')</p>
            </a>
            <li>
                <p class="d-inline-flex gap-1">
                    <a data-bs-toggle="collapse" href="#collapseExampleLang" role="button" aria-expanded="false"
                        aria-controls="collapseExampleLang">
                        @lang('public.language') <i class="fa-solid fa-caret-down"></i>
                    </a>

                </p>
                <div class="collapse" id="collapseExampleLang">
                    <ul>
                        <li><a href="/locale/en">@lang('public.english')</a></li>
                        <li><a href="/locale/id">@lang('public.indonesian')</a></li>
             
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <hr id="sideline">

    <div class=" row g-2 px-4">
        <div class="col-lg-13 col-sm-12">
            {{-- <a href="" style="padding-top:10px; padding-bottom:0px;">+6281234543636</a> --}}
            <a href="https://wa.me/+6284375378548" style="padding-top:10px; padding-bottom:0px;">
                <i class="fa-solid fa-phone"></i> +6284375378548</a>
            <a class="line-clamp-1" href="mailto:museumkeraton@gmail.com"
                style="padding-top: 10px; padding-bottom:0px;">
                <i class="fa-regular fa-envelope"></i> museumkeraton@gmail.com</a>
            <a href="https://goo.gl/maps/dKDatFZGXz7B2f8B8" style="padding-top: 10px; padding-bottom:0px;">
                <i class="fa-solid fa-location-dot"></i> Sumenep - Madura</a>
        </div>
        
    </div>
</div>

<script>
    const menu = document.querySelector('#menu');
    const body = document.querySelector('body');
    const menuNavbar = document.querySelector('#sidebar');
    const backdrop = document.getElementById("backdrop");
    const btnClose = document.getElementById("close-sidebar");

    menu.addEventListener('click', (event) => {
        menuNavbar.classList.toggle('sidebarMenu');
        backdrop.style.display = "block";
        event.stopPropagation();
        event.preventDefault();
    });

    backdrop.addEventListener('click', () => {
        menuNavbar.classList.remove('sidebarMenu');
        backdrop.style.display = "none";
    });

    btnClose.addEventListener('click', () => {
        menuNavbar.classList.remove('sidebarMenu');
        backdrop.style.display = "none";
    });
</script>
