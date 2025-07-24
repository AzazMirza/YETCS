@extends('layouts.app')
@extends('layouts.blog')
@section('page_title')
  How We Handle Mold the Right Way A Brooklyn Centric Approach to a Healthier Home.
@endsection
@section('page')
  <body
    x-data="{ page: 'blog-single', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
@endsection
    @section('blog')
  <!-- Hero Section with Parallax Effect -->
  <section class=" text-white py-16 md:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('images/mold-texture.png')] opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
          <h1 class="text-5xl md:text-6xl font-extrabold leading-snug mb-6 kk wm">The Hidden Dangers of Mold and Asbestos</h1>
          <h2 class="text-2xl opacity-90 mb-8 kk wm">Learn How to Identify and Mitigate the Risks in Your Brooklyn Home</h2>
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
            <img src="images/hidden-mold-collection.webp" fetchpriority="high" loading="eager" decoding="async" height="420" width="630" alt="home-owners-guide-for-mold-remediation" class="rounded-lg shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
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
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-green-400 kk wm">How We Handle Mold the Right Way: A Brooklyn-Centric Approach to a Healthier Home</h2>
            <div class="mb-8 overflow-hidden">
              <img loading="lazy" src="images/professional-asbestos-cleaning.webp" height="auto" width="100%" style="aspect-ratio: 21/9; object-fit: cover;" alt="Mold Remediation in Brooklyn" class="w-full rounded-lg shadow-md">
            </div>
            <p class="mb-6 text-lg leading-relaxed kk wm">Mold is one of those hidden threats that often starts out small—a little discoloration here, a faint musty smell there—and quietly spreads behind walls, under flooring, or inside cabinets. By the time it’s visible, it could already be affecting your air quality and putting your health—and your wallet—at risk.</p>
            <p class="mb-6 text-lg leading-relaxed kk wm">Here in Brooklyn, where older buildings, seasonal humidity, and occasional plumbing issues are part of life, mold is more common than many people think.</p>
            <p class="mb-6 text-lg leading-relaxed kk wm">At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, we’ve helped countless homeowners and renters across neighborhoods like Park Slope, Williamsburg, Fort Greene, and beyond deal with mold the right way — safely, thoroughly, and with your health in mind.</p>
            <p class="mb-6 text-lg leading-relaxed kk wm">But here’s the thing—not all mold remediation is created equal. The difference between a quick fix and a lasting solution comes down to expertise, proper equipment, and addressing the root cause—not just what’s visible on the surface. Just wiping it off the surface or spraying some bleach won’t solve the problem long-term. In fact, doing it wrong could make things worse.</p>
            <p class="mb-6 text-lg leading-relaxed kk wm">Let us walk you through how we handle mold the right way — because when it comes to your home and family’s well-being, cutting corners isn’t an option.</p>

            <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Step 1: Identify the Source — Because Mold Doesn’t Grow Without a Reason</h3>
            <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
              <img loading="lazy" src="images/water-pipe-mold.webp" height="auto" width="100%" alt="Moisture Inspection" class="w-full md:h-[400px] h-[250px] rounded object-cover mb-4">
              <p class="wm kk">Mold doesn’t just appear out of nowhere. Mold needs moisture to grow—whether it’s from a hidden leak, high humidity, condensation, or past water damage from a storm or flood.</p>
              <p class="wm kk">That’s why our first priority is always to find and fix the source. We carefully inspect areas like under sinks, behind walls, around windows, and near HVAC systems to ensure the moisture issue is identified and addressed before any remediation begins. If needed, we’ll recommend a deeper inspection or moisture testing to get to the bottom of the issue.</p>
              <p class="wm kk">In many of Brooklyn’s older homes—especially during those hot, sticky summer months—poor ventilation is a common issue. Without adequate ventilation, moisture tends to linger—especially in tight, closed-off areas—creating the perfect environment for mold, mildew, and other indoor air quality issues to grow and quietly spread throughout your home.</p>
            </div>

            <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Step 2: Assess the Damage — Is It Just a Spot, or Something More Serious?</h3>
            <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
              <img loading="lazy" src="images/mold-spot-on-wall.webp" height="auto" width="100%" alt="Mold Assessment" class="w-full md:h-[400px] h-[250px] rounded object-cover mb-4">
              <p class="wm kk">Not all mold looks the same. Some mold shows up as tiny black specks along bathroom grout, while other types appear as greenish or yellowish patches on walls, ceilings, or around windows—often in areas with poor ventilation or past moisture issues.</p>
              <p class="wm kk">And sometimes, you can smell mold before you even see it — a musty, earthy odor is often a red flag.</p>
              <p class="wm kk">We assess the size, location, and type of mold present. Small mold patches (less than 10 square feet) can often be handled with targeted professional cleaning. However, when mold covers a larger area, surface cleaning alone isn’t enough. These infestations demand advanced containment methods and specialized remediation techniques to safely and thoroughly eliminate the problem—while preventing it from spreading to other parts of your home.</p>
            </div>

            <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Step 3: Use the Right Tools & Techniques — Not Just Bleach and a Sponge</h3>
            <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
              <p class="wm kk">You’ve probably heard someone say, “Just spray some bleach and wipe it away.” But here’s what they don’t tell you: bleach only kills surface mold and doesn’t remove spores. Plus, overuse of harsh chemicals can be harmful to both your family and the environment.</p>
              <p class="wm kk">Instead of harsh chemicals, we use safe, eco-friendly antimicrobial treatments that target mold at the source—eliminating it at the roots and helping prevent it from coming back. We also follow industry best practices for:</p>
              <ul class="list-disc pl-6 wm kk">
                <li>HEPA vacuuming to capture airborne spores</li>
                <li>Thorough scrubbing of affected surfaces</li>
                <li>Proper drying to prevent regrowth</li>
                <li>Air purification to reduce lingering odors and particles</li>
              </ul>
              <p class="wm kk">And unlike DIY methods, we don’t just treat the mold—we make sure the area is completely dry afterward, because lingering moisture is exactly what caused the problem to begin with.</p>
            </div>

            <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Step 4: Protect Your Space During the Process</h3>
            <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
              <p class="wm kk">When dealing with mold, containment is key. We take steps to isolate the affected area using plastic sheeting and air filtration devices to prevent spores from spreading to other parts of your home.</p>
              <p class="wm kk">This is especially important in multi-unit buildings or shared spaces — something we’re very familiar with in Brooklyn’s dense housing landscape.</p>
            </div>

            <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Step 5: Prevent Future Growth — Because Clean Should Mean Stay Clean</h3>
            <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg space-y-4 mb-8">
              <p class="wm kk">After removing the mold, we focus on prevention. That means:</p>
              <ul class="list-disc pl-6 wm kk">
                <li>Recommending improved ventilation (like exhaust fans or dehumidifiers)</li>
                <li>Sealing cracks or gaps where moisture can enter</li>
                <li>Educating homeowners on proper cleaning habits</li>
                <li>Suggesting regular deep cleans to keep high-humidity zones like kitchens and bathrooms in check</li>
              </ul>
              <p class="wm kk">We want our work to make a lasting difference—so you can feel confident that your space isn’t just clean, but truly safe, healthy, and ready for whatever comes next.</p>
            </div>

            <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Why Brooklyn Residents Trust Us with Mold Removal</h3>
            <p class="mb-6 text-lg leading-relaxed kk wm">We know how personal your home is — especially in Brooklyn, where space is precious and neighborhood pride runs deep. That’s why we approach every job with care, honesty, and respect.</p>
            <p class="mb-6 text-lg leading-relaxed kk wm">At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, we’re not just here to clean—we’re here to safeguard your health, protect your property, and give you the peace of mind you deserve.</p>

            <div :class="{'bg-green-300': !darkMode, 'bg-green-600': darkMode}" class="text-white p-8 rounded-lg my-12">
              <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-6 md:mb-0 md:mr-6">
                  <img loading="lazy" src="images/protection.png" height="auto" width="100%" alt="Prevention Icon" class="w-20 h-20">
                </div>
                <div class="md:w-2/3">
                  <h3 class="text-2xl font-bold mb-4 kk wm">Ready to Breathe Easier?</h3>
                  <p class="mb-4 kk wm">If you suspect mold in your Brooklyn home, don't wait until it becomes a bigger issue. Our team is ready to help you restore your space safely and effectively.</p>
                  <a href="{{route ('index')}}#support" class="inline-block kk wm bg-yellow-400 px-6 py-2 rounded font-bold hover:bg-yellow-300 transition">
                    Schedule a Free Mold Inspection
                  </a>
                </div>
              </div>
            </div>
            <h3 class="text-2xl font-bold mb-6 text-green-400 kk wm">Frequently Asked Questions</h3>
            
            <div class="space-y-6 mb-8">
              <!-- FAQ Item 1 -->
              <div class="border-b border-gray-200 pb-4 kk wm">
                <h4 class="text-xl font-semibold mb-2 flex justify-between items-center">
                  How long does the remediation process take?
                  <svg width="25px" class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </h4>
                <p class="text-gray-700 kk wm">Most residential projects complete in 3-5 business days. Larger commercial properties typically require 1-2 weeks depending on scope.</p>
              </div>

              <!-- FAQ Item 2 -->
              <div class="border-b border-gray-200 pb-4">
                <h4 class="text-xl kk wm font-semibold mb-2 flex justify-between items-center">
                  Will my insurance cover this?
                  <svg width="25px" class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </h4>
                <p class="text-gray-700 kk wm">Many standard homeowners policies cover sudden and accidental water damage that leads to mold growth. We provide detailed documentation for claims submission.</p>
              </div>

              <!-- FAQ Item 3 -->
              <div class="pb-4">
                <h4 class="text-xl kk wm font-semibold mb-2 flex justify-between items-center">
                  Can I stay in my property during remediation?
                  <svg width="25px" class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </h4>
                <p class="text-gray-700 kk wm">For safety reasons, we recommend temporary relocation during active remediation. Our team provides 24/7 air monitoring to ensure safety protocols are maintained.</p>
              </div>
            </div>

            <div class="flex flex-wrap gap-2 mb-8 kk wm">
              <span class="bg-green-300  kk wm px-3 py-1 rounded-full text-sm">Mold Remediation</span>
              <span class="bg-green-300  kk wm px-3 py-1 rounded-full text-sm">Lead Abatement</span>
              <span class="bg-green-300  kk wm px-3 py-1 rounded-full text-sm">Asbestos Removal</span>
              <span class="bg-green-300  kk wm px-3 py-1 rounded-full text-sm">Property Assessment</span>
            </div>
          </article>

@endsection
    