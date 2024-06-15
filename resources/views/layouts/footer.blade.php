<footer>
    <div class="footer-container">
        <div class="row" style="margin-bottom: 40px; ">
            <div class="col-lg-5 mb-5">
                <div class="footer_logo_img">
                    <img src="{{ '/images/logo.png' }}" alt="footer_logo">
                </div>
                <p class="lorem_text"> Jl. Dr. Sutomo No.6, Lingkungan Delama, Pajagalan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69416 </p>

            </div>
            <div class="col-lg-3 mb-5">
                <h4 class="footer_title">Menu</h4>
                <div class="footer_text mt-3">
                    <div class="footer_text"><a href="/definition">@lang('public.definition')</a></div>
                    <div class="footer_text"><a href="/history">@lang('public.history')</a></div>
                    <div class="footer_text"><a href="/location">@lang('public.location')</a></div>
                    <div class="footer_text"><a href="/schedule">@lang('public.time')</a></div>
                    <div class="footer_text"><a href="/tour">@lang('public.tour')</a></div>
                    {{-- <div class="footer_text"><a href="#">Legal</a></div> --}}
                </div>
                {{-- <div class="footer_text"><a href="#">Testimoni</a></div>
                <div class="footer_text"><a href="#">Galeri</a></div> --}}
            </div>

            <div class="col-lg-4 mb-5">
                <h4 class="footer_title">@lang('public.contact_us')</h4>
                <div class="footer_text mt-3">
                    <a href="https://wa.me/+6284375378548">
                        <i class="fa-solid fa-phone"></i> +6284375378548</a>
                </div>
                <div class="footer_text">
                    <a href="https://goo.gl/maps/dKDatFZGXz7B2f8B8">
                        <i class="fa-solid fa-location-dot"></i> Sumenep - Madura </a>
                </div>
                <div class="footer_text">
                    <a class="line-clamp-1" href="mailto:museumkeraton@gmail.com">
                        <i class="fa-regular fa-envelope"></i>
                        museumkeraton@gmail.com</a>
                </div>
                {{-- <div class="footer_text"><a href="#">News</a></div>
                <div class="footer_text"><a href="#">Contact</a></div> --}}
            </div>
  
        </div>
        <hr style="width: 80%; opacity:100%; border: 1px solid #ffac00;">
        <div style="text-align:center; margin-top:20px;">
            <ul class="list-inline-item" style="height: 10px;">
                <li class="item px-2"
                    style="font-weight: 200; font-size:15px; color:white; border-right:2px solid #9D9D9D;">© 2023
                    Copyright </li>
                @auth
                    
                <li class="item px-2" style="font-weight: 200; font-size:15px; color:white"><a href="/admin">Dashboard</a>
                @endauth
                @guest
                    
                <li class="item px-2" style="font-weight: 200; font-size:15px; color:white"><a href="/login">Masuk</a>
                @endguest
                </li>
            </ul>

        </div>
    </div>


</footer>
