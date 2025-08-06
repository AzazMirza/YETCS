@extends('layouts.app')
@extends('layouts.blog')
@section('page_title')
  Our Deep Cleaning Checklist.
@endsection
@section('page')
  <body
    x-data="{ page: 'Our Deep Cleaning Checklist What We Actually Do When You Book Us', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
@endsection

@section('blog')
  <!-- Hero Section with Parallax Effect -->
  <section class=" text-white py-16 md:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('images/mold-texture.webp')] opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
          <h1 class="text-5xl md:text-6xl font-extrabold leading-snug mb-6 kk wm">Our Deep Cleaning Checklist</h1>
          <h2 class="text-2xl opacity-90 mb-8 kk wm">Discover the Ins and Outs of Our Deep Cleaning Process and How We Make Your Home Sparkle</h2>
          <div class="flex flex-wrap gap-4">
            <a href="{{route ('index')}}#support" class=" kk wm bg-green-400 px-6 py-3 rounded-lg font-semibold hover:bg-green-300 transition-shadow shadow-lg hover:shadow-xl flex items-center">
              <svg width="25px" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
              </svg>
              Schedule Inspection  
            </a>
            <a href="#process" class=" kk wm border-2 border-[ rgb(255 255 255 / var(--tw-text-opacity))] px-6 py-3 rounded-lg font-semibold hover:bg-[rgb(244 247 250 / var(--tw-bg-opacity))] hover:text-green-400 transition-all flex items-center">
              <svg width="25px" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Our Process
            </a>
          </div>
        </div>
        <div class="md:w-1/2">
          <div class="relative">
            <img src="images/professional-cleaners.webp" fetchpriority="high" loading="eager" decoding="async" height="420" width="630" alt="home-owners-guide-for-mold-remediation" class="rounded-lg shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
            <div class="absolute -bottom-4 -right-4 bg-red-600 text-white p-4 rounded-lg shadow-lg">
              <p class="font-bold">20+ Years</p>
              <p>Industry Experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog Content Section -->
    <section class="py-16 bg-transparent">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
          <!-- Main Content -->
          <div class="lg:col-span-2">
            <article class="bg-transparent rounded-lg shadow-xl p-8 mb-12">
              <div class="flex items-center mb-6 text-sm text-gray-500">
                <span class="kk wm">By Raees Rehan</span>
                <span class="mx-2">•</span>
                <span class="kk wm">April 17, 2025</span>
                <span class="mx-2">•</span>
                <span class="bg-green-400 px-3 py-1 rounded-full kk wm">Cleaning Tips</span>
              </div>
              <h2 class="text-3xl md:text-4xl font-bold mb-6 text-green-400 kk wm">Our Deep Cleaning Checklist: What We Actually Do When You Book Us</h2>
              <div class="mb-8 overflow-hidden">
                <img loading="lazy" src="images/deep-cleaning.webp" height="auto" width="100%" style="aspect-ratio: 21/9; object-fit: cover;" alt="Professional deep cleaning in Brooklyn" class="w-full rounded-lg shadow-md">
              </div>
              <p class="mb-6 text-lg leading-relaxed kk wm">At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, we know that when you book a deep cleaning service, you’re not just looking for someone to sweep the floors and wipe the counters. You want your home to feel fresh, organized, and truly clean — from the corners you forget about to the surfaces you touch every day.</p>
              <p class="mb-6 text-lg leading-relaxed kk wm">Living in Brooklyn means life moves fast. Between juggling work, family, and the city’s constant energy, finding time for a full-home deep clean can feel more like a dream than a reality. That’s where we come in. We bring our expertise, attention to detail, and professional-grade tools right to your doorstep — so you don’t have to lift a finger.</p>
              <p class="mb-6 text-lg leading-relaxed kk wm">Here’s a look at exactly what we do during each deep cleaning session.</p>

              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Living Areas & Entryway:</h3>
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
                <img loading="lazy" src="images/moldy-ally.webp" height="auto" width="100%" alt="Living room cleaning" class="w-full md:h-[400px] h-[250px] rounded object-cover mb-4">
                <p class="wm kk">We begin at the entrance because first impressions matter—even, and especially, within your own home. A clean, welcoming entryway sets the tone for the entire space.</p>
                <ul class="list-disc pl-6 wm kk space-y-2">
                  <li>Dust all surfaces (picture frames, shelves, TV stands)</li>
                  <li>Clean light switches, door handles, and baseboards</li>
                  <li>Vacuum and mop all flooring (including under furniture)</li>
                  <li>Wipe down vents and remove cobwebs from ceilings</li>
                </ul>
              </div>

              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Kitchen Deep Clean:</h3>
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
                <img loading="lazy" src="images/professional-kitchen-cleaning.webp" height="auto" width="100%" alt="Kitchen cleaning" class="w-full md:h-[400px] h-[250px] rounded object-cover mb-4">
                <p class="wm kk">The kitchen is where meals happen — and where grime builds up faster than you think.</p>
                <ul class="list-disc pl-6 wm kk space-y-2">
                  <li>Degrease and sanitize countertops, backsplashes, and sinks</li>
                  <li>Thoroughly clean both the interior and exterior of cabinets and drawers, removing dust, crumbs, and built-up grime</li>
                  <li>Deep clean appliances:
                    <ul class="list-circle pl-6 mt-1">
                      <li>Inside and outside of fridge, microwave, and oven</li>
                      <li>Dishwasher interior and gasket</li>
                    </ul>
                  </li>
                  <li>Scrub tile grout and flooring</li>
                  <li>Wipe pantry shelves (upon request)</li>
                </ul>
              </div>

              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Bathroom Deep Clean:</h3>
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
                <img loading="lazy" src="images/professional-bathroom-cleaning.webp" height="auto" width="100%" alt="Bathroom cleaning" class="w-full md:h-[400px] h-[250px] rounded object-cover mb-4">
                <p class="wm kk">Bathrooms are one of the most important areas to keep consistently clean—especially in shared homes or rental properties—since they’re used frequently and can quickly become breeding grounds for germs, bacteria, and mold if not properly maintained.</p>
                <ul class="list-disc pl-6 wm kk space-y-2">
                  <li>Sanitize toilets (including tank, base, seat hinges)</li>
                  <li>Deep scrub showers, tubs, tiles, and grout</li>
                  <li>Polish mirrors, glass, and chrome fixtures</li>
                  <li>Disinfect sinks, faucets, and vanities</li>
                  <li>Replace shower curtains or liners if they’re stained, mildewed, or worn out</li>
                  <li>Mop floors with hospital-grade disinfectant</li>
                </ul>
              </div>

              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Bedrooms & Living Spaces:</h3>
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
                <img loading="lazy" src="images/professional-bedroom-cleaning.webp" height="auto" width="100%" alt="Bedroom cleaning" class="w-full md:h-[400px] h-[250px] rounded object-cover mb-4">
                <p class="wm kk">These are the spaces where you relax, recharge, and start each day—so they deserve extra attention to ensure they’re clean, comfortable, and truly healthy.</p>
                <ul class="list-disc pl-6 wm kk space-y-2">
                  <li>Dust furniture, lamps, and decor items</li>
                  <li>Wipe window sills and blinds</li>
                  <li>Vacuum carpets, rugs, and upholstery</li>
                  <li>Change bed linens (optional add-on)</li>
                  <li>Clean inside closets (upon request)</li>
                </ul>
              </div>

              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Final Touches That Make a Difference:</h3>
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
                <p class="wm kk">It’s the small details that turn a good clean into a great one—those finishing touches that leave your space feeling truly refreshed, cared for, and complete.</p>
                <ul class="list-disc pl-6 wm kk space-y-2">
                  <li>Spot-clean walls where needed</li>
                  <li>Remove cobwebs from high corners</li>
                  <li>Polish ceiling fans and light fixtures</li>
                  <li>Deodorize trash cans and recycling bins</li>
                  <li>Leave behind a refreshing scent (or candle upon request)</li>
                </ul>
              </div>

              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Why Our Deep Cleaning Stands Out:</h3>
              <p class="mb-6 text-lg leading-relaxed kk wm">We believe in transparency—no vague promises, no hidden fees, and no cutting corners. Our team arrives fully equipped with eco-friendly products and commercial-grade tools. We also customize our cleaning checklist to fit your unique needs—whether it’s removing pet dander, tackling a post-party mess, or getting your space move-in ready for a new tenant.</p>
              <p class="mb-6 text-lg leading-relaxed kk wm">And because we know how much Brooklyn residents value their time and space, we make sure to be respectful, efficient, and thorough — every single visit.</p>

              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">How Often Should You Schedule a Deep Clean?</h3>
              <p class="mb-6 text-lg leading-relaxed kk wm">While regular cleaning keeps things maintained, a full deep clean is recommended every 3–6 months, depending on your lifestyle. Homes with pets, children, or allergy sufferers typically benefit from more frequent deep cleaning sessions to help reduce allergens, dander, and everyday mess—keeping the environment healthier and more comfortable for everyone.</p>
              <p class="mb-6 text-lg leading-relaxed kk wm">Not sure when you should schedule? Feel free to ask — we’re always happy to help!</p>

              <h3 class="kk wm text-2xl font-bold mb-6">Ready to Reclaim Your Space?</h3>
              <p class="kk wm">A deep clean isn’t just about making your home look good — it’s about creating a healthier, more comfortable place to live. Whether you're prepping for guests, moving in or out, or just craving a fresh start, our deep cleaning checklist ensures every inch of your Brooklyn home gets the attention it deserves.</p>
              <p class="kk wm">Let us take care of the hard work—so you can sit back, relax, and enjoy the fresh, healthy space you deserve.</p>

            </article>
@endsection