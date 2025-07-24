@extends('layouts.app')
@section('page_title')
  Social Media Page
@endsection
@section('page')
  <body
    x-data="{ page: 'blog-grid', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
  @endsection
  @section('mainContent')
   
      <!-- ===== Header Start ===== -->
        <section style="background-image: url('images/social-media-user.webp');" class="h-[80vh] mt-28 bg-no-repeat bg-cover bg-center">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7 flex items-center h-full">
                    <div class="max-w-2xl">
                        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>
                        <p class="mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
                    </div>
                </div>
            </div>
        </section>
      <!-- ===== Header End ===== -->

      <!-- ===== Blog Grid Start ===== -->
        <section class="social-media-feeds flex justify-between p-4 gap-4 my-16 h-screen">
            <div class="feed h-screen w-1/3" >
            <div class="iframely-embed"><div class="iframely-responsive" style="height: 440px; padding-bottom: 0;"><a href="https://www.instagram.com/yetcs_envirmental/" data-iframely-url="//iframely.net/OfURORAk"></a></div></div><script async src="//iframely.net/embed.js"></script>
            </div>
            <div class="feed h-screen w-1/3" >
            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@yetcs_envirmental" data-unique-id="yetcs_envirmental" data-embed-from="oembed" data-embed-type="creator" style="max-width:780px; min-width:480px; height: 1240px;"> <section> <a target="_blank" href="https://www.tiktok.com/@yetcs_envirmental?refer=creator_embed">@yetcs_envirmental</a> </section> </blockquote> <script async onerror="var a=document.createElement('script');a.src='https://iframely.net/files/tiktok-embed.js';document.body.appendChild(a);" src="https://www.tiktok.com/embed.js"></script>
            </div>
            <!-- <div class="feed h-screen w-1/3" >
            <iframe src="https://facebook.com" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
            </div> -->
        </section>
@endsection
