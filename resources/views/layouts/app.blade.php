<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Lead, Asbestos & Mold Removal Services | Brooklyn, NY | Yetcs Environmental">
    <meta name="description" content="Certified lead, asbestos, and mold inspection & removal in Brooklyn, NY. Fast, safe, and compliant. Call (1347) 254-6186 for a free quote.">
    <meta name="keywords" content="mold removal Brooklyn-NYC, asbestos abatement Brooklyn-NYC, lead paint removal Brooklyn-NYC, hazardous material cleanup, environmental remediation">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>@yield('page_title') </title>
    <link rel="icon" href="images/yetcs.webp"  height="100" width="100" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script  src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet"></head>

    {{-- @verbatim --}}
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "HomeAndConstructionBusiness",
        "name": "Yetcs Environmental",
        "image": "https://yetcs.com/images/logo.webp",
        "url": "https://yetcs.com",
        "telephone": "+13472546186",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "3842 Flatlands Avenue",
          "addressLocality": "Brooklyn",
          "addressRegion": "NY",
          "postalCode": "11234"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 40.631,
          "longitude": -73.908
        },
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday"
            ],
            "opens": "08:00",
            "closes": "18:00"
          }
        ],
        "priceRange": "$$",
        "description": "Certified lead, asbestos, and mold inspection & removal in Brooklyn, NY. Fast, safe, and compliant.",
        "areaServed": {
          "@type": "Place",
          "name": "Brooklyn, New York"
        },
        "sameAs": [
          "https://www.facebook.com/YETCS/",
          "https://www.instagram.com/yetcs_envirmental/",
          "https://www.tiktok.com/@yetcs_envirmental"
        ],
        "hasMap": "https://www.google.com/maps?q=3842+Flatlands+Avenue,+Brooklyn,+NY+11234"
      }
      </script>
    {{-- @endverbatim --}}

    @yield('page')
    
    
    <!-- ===== Header Start ===== -->
    <header
      class="g s r vd ya cj"
      :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
      @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false"
    >
      <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
        <div class="vd to/4 tc wf yf">
          <a href="{{ route ('index')}}">
            <img class="om" src="images/light-logo.webp"  height="120" width="120" alt="Logo Light" />
            <img class="xc nm" src="images/yetcs.webp" height="120" width="120" alt="Logo Dark" />
          </a>

          <!-- Hamburger Toggle BTN -->
          <button class="po rc" @click="navigationOpen = !navigationOpen">
            <span class="rc i pf re pd">
              <span class="du-block h q vd yc">
                <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
                <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
                <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
              </span>
              <span class="du-block h q vd yc lf">
                <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
                <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
              </span>
            </span>
          </button>
          <!-- Hamburger Toggle BTN -->
        </div>

        <div
          class="vd wo/4 sd qo f ho oo wf yf"
          :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }"
        >
          <nav>
            <ul class="tc _o sf yo cg ep">
              <li><a href="{{route ('index')}}" class="xl" :class="{ 'mk': page === 'home' }">Home</a></li>
              <li><a href="{{route ('index')}}#features" class="xl">Features</a></li>
                <a href="{{route ('blog-grid')}}" class="xl tc wf yf bg"> Blogs </a></li>
              <li><a href="{{route ('index')}}#support" class="xl">Support</a></li>
            </ul>
          </nav>

          <div class="tc wf ig pb no">
            <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
              <label class="rc ab i">
                <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="pf vd yc uk h r za ab" />
                <!-- Icon Sun -->
                <svg :class="{ 'wn' : page === 'home', 'xh' : page === 'home' && stickyMenu }" class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.0908 18.6363C10.3549 18.6363 8.69 17.9467 7.46249 16.7192C6.23497 15.4916 5.54537 13.8268 5.54537 12.0908C5.54537 10.3549 6.23497 8.69 7.46249 7.46249C8.69 6.23497 10.3549 5.54537 12.0908 5.54537C13.8268 5.54537 15.4916 6.23497 16.7192 7.46249C17.9467 8.69 18.6363 10.3549 18.6363 12.0908C18.6363 13.8268 17.9467 15.4916 16.7192 16.7192C15.4916 17.9467 13.8268 18.6363 12.0908 18.6363ZM12.0908 16.4545C13.2481 16.4545 14.358 15.9947 15.1764 15.1764C15.9947 14.358 16.4545 13.2481 16.4545 12.0908C16.4545 10.9335 15.9947 9.8236 15.1764 9.00526C14.358 8.18692 13.2481 7.72718 12.0908 7.72718C10.9335 7.72718 9.8236 8.18692 9.00526 9.00526C8.18692 9.8236 7.72718 10.9335 7.72718 12.0908C7.72718 13.2481 8.18692 14.358 9.00526 15.1764C9.8236 15.9947 10.9335 16.4545 12.0908 16.4545ZM10.9999 0.0908203H13.1817V3.36355H10.9999V0.0908203ZM10.9999 20.8181H13.1817V24.0908H10.9999V20.8181ZM2.83446 4.377L4.377 2.83446L6.69082 5.14828L5.14828 6.69082L2.83446 4.37809V4.377ZM17.4908 19.0334L19.0334 17.4908L21.3472 19.8046L19.8046 21.3472L17.4908 19.0334ZM19.8046 2.83337L21.3472 4.377L19.0334 6.69082L17.4908 5.14828L19.8046 2.83446V2.83337ZM5.14828 17.4908L6.69082 19.0334L4.377 21.3472L2.83446 19.8046L5.14828 17.4908ZM24.0908 10.9999V13.1817H20.8181V10.9999H24.0908ZM3.36355 10.9999V13.1817H0.0908203V10.9999H3.36355Z" fill=""/>
                </svg>
                <!-- Icon Sun -->
                <img class="xc nm" src="images/icon-moon.svg" alt="Moon" />
              </label>
            </div>
          </div>
        </div>
      </div>
</header>

    <!-- ===== Header End ===== -->

    <main>
        @yield('mainContent')
        
    </main>
    
  <!-- CTA Section -->
  <section class="bg-green-400  kk wm py-16 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-2/3 mb-8 md:mb-0 md:pr-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Protect Your Property?</h2>
          <p class="text-xl mb-8 opacity-90">Contact our team of certified professionals for a comprehensive assessment and customized remediation plan tailored to your property's specific needs.</p>
          <div class="flex flex-wrap gap-4">
            
            <a href="https://wa.me/13473273079?text=I%20want%20to%20book%20an%20appointment" class="bg-yellow-400 text-green-400 px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-300 transition-shadow shadow-lg hover:shadow-xl flex items-center" target="_blank" rel="noopener noreferrer">
              <svg width="25px" class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Schedule Your Free Inspection
            </a>
            <a href="tel:13472546186" class="border-2 border-white px-8 py-4 rounded-lg font-bold text-lg hover: bg-transparent hover:text-green-400 transition-all flex items-center">
              <svg width="25px" class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Call Now: (1347) 254-6186
            </a>
          </div>
        </div>
        <!-- <div class="md:w-1/3">
          <img src="images/call-center-agent.webp" width="100" height="100" width="100" height="100" alt="Emergency Response Team" class="rounded-lg ">
        </div> -->
      </div>
    </div>
    <div class="absolute bottom-0 right-0 opacity-20">
      <svg width="25px" width="300" height="300" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="150" cy="150" r="150" fill="#FFD700"/>
      </svg>
    </div>
  </section>
<!-- ===== Footer Start ===== -->
  <footer>
  <div class="bb ze ki xn 2xl:ud-px-0">
    <!-- Footer Top -->
    <div class="ji gp">
      <div class="tc uf ap gg fp">
        <div class="animate_top zd/2 to/4">
          <a href="{{ route ('index') }}">
            <img class="om" src="images/light-logo.webp"  height="60" width="60" alt="Logo Light" />
            <img class="xc nm" src="images/yetcs.webp" height="60" width="60" alt="Logo Dark" />
          </a>

          <p class="lc fb"> Secure what you care about </p>

         
        </div>

        <div class="vd ro tc sf rn un gg vn">
          <div class="animate_top">
            <h4 class="kk wm tj ec">Quick Links</h4>

            <ul>
              <li><a href="{{route ('index')}}" class="sc xl vb">Home</a></li>
              <!-- <li><a href="{{route ('index')}}#features" class="sc xl vb">Features</a></li> -->
              <li><a href="{{route ('index')}}blog-grid" class="sc xl vb">Blogs</a></li>
              <!-- <li><a href="{{route ('index')}}#support" class="sc xl vb">Support</a></li> -->
            </ul>
          </div>

          <div class="animate_top">
            <h4 class="kk wm tj ec">Services</h4>

            <ul>
              <li><a href="#" class="sc xl vb">Asbestos Cleaning</a></li>
              <li><a href="#" class="sc xl vb">Mold Cleaning</a></li>
              <li><a href="#" class="sc xl vb">ACP 5</a></li>
              <li><a href="#" class="sc xl vb">Lead Paint Cleaning</a></li>
            </ul>
          </div>

          <div class="animate_top">
            <h4 class="kk wm tj ec">Support</h4>

            <ul>
              <li><a href="{{route ('index')}}" class="sc xl vb">Company</a></li>
              <li><a href="{{route ('social-media')}}" class="sc xl vb">Social Media</a></li>
              <li><a href="{{route ('blog-grid')}}" class="sc xl vb">Our Blog</a></li>
              <li><a href="{{route ('index')}}#support" class="sc xl vb">Contact Us</a></li>
            </ul>
          </div>

          
        </div>
      </div>
    </div>
    <!-- Footer Top -->

    <!-- Footer Bottom -->
    <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
      <div class="animate_top">

      </div>

      <div class="animate_top">
        <p>&copy; 2025 YETCS. All rights reserved</p>
      </div>
    </div>
    <!-- Footer Bottom -->
  </div>
</footer>

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button
  class="xc wf xf ie ld vg sr gh tr g sa ta _a"
  @click="window.scrollTo({top: 0, behavior: 'smooth'})"
  @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
  :class="{ 'uc' : scrollTop }"
>
  <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
  </svg>
</button>

    <!-- ====== Back To Top End ===== -->

  <script defer src="bundle.js"></script></body>
</html>
