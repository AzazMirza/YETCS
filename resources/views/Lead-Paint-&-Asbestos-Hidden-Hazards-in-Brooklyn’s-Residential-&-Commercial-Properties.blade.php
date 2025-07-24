@extends('layouts.app')
@extends('layouts.blog')
@section('page_title')
  Lead Paint & Asbestos.
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
    <div class="absolute inset-0 bg-[url('images/mold-texture.webp')] opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
          <h1 class="text-4xl md:text-5xl  font-bold leading-tight mb-6 kk wm ">Lead Paint & Asbestos</h1>
          <h2 class="text-2xl opacity-90 mb-8 kk wm">Hidden Hazards in Brooklyn’s Residential & Commercial Properties</h2>
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
            <img src="images/cityscape.webp" fetchpriority="high" loading="eager" decoding="async" height="420" width="630" alt="home owners guide for mold remediation" class="rounded-lg shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
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
          <article class=" bg-transparent rounded-lg shadow-xl p-8 mb-12">
            <div class="flex items-center mb-6 text-sm text-gray-500">
              <span class=" kk wm">By Raees Rehan</span>
              <span class="mx-2">•</span>
              <span class=" kk wm">April 16, 2025</span>
              <span class="mx-2">•</span>
              <span class="bg-green-400  px-3 py-1 rounded-full  kk wm">He h & Safety</span>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-green-400  kk wm">The Hidden Dangers of Lead Paint & Asbestos in Brooklyn's Homes and Buildings</h2>
            <div class=" mb-8">
            <div class="overflow-hidden mb-8">
              <img loading="lazy" src="images/mold-house.webp" height="auto" width="100%" style="aspect-ratio: 21/9; object-fit: cover;" alt="damaged front door due to mold and asbestos" class="w-full rounded-lg shadow-md">
            </div>

            <p class="mb-6 text-lg leading-relaxed kk wm"> 
              Brooklyn is known for its stunning historic architecture—beautiful brownstones, stately townhouses, vintage storefronts, and converted warehouses that reflect the borough’s rich past. Yet beneath that classic charm can lurk serious hazards—many aging structures still contain lead-based paint and asbestos, which can release harmful toxins when disturbed during renovations or maintenance work.
             <br> At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, we proudly partner with Brooklyn homeowners, landlords, property managers, and business owners who prioritize safety. Whether you're preserving a historic home or renovating a commercial property, our team is here to help you create a healthier, hazard-free environment for your family, tenants, and employees. Whether you’re restoring a brownstone in Park Slope or renovating a retail space in DUMBO, it’s crucial to understand what could be lurking behind the walls.
             <br> In this article, we’ll explore the common places lead paint and asbestos are found, why these materials remain a serious concern in Brooklyn’s aging buildings, and how our certified experts at <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a> can help you to manage lead and asbestos safely, responsibly.
            </p>

            <!-- <blockquote class="border-l-4 kk wm border-yellow-400 pl-6 italic my-8 text-gray-700 text-xl">
              "A single square foot of visible mold indicates up to 10 square feet of hidden contamination. Professional assessment is crucial for accurate risk evaluation."
            </blockquote> -->

            <h3 class=" kk wm text-2xl font-bold mb-4 text-green-400">1. Why Older Brooklyn Properties Are at Risk:</h3>
            
            <div class="space-y-8 mb-8">
              <!-- Mold Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img loading="lazy" src="images/mold-wall.webp"  height="auto" width="100%" alt="Multiple kinds of mold on a wall" class=" w-full  md:min-h-[400px] md:h-[400px] h-[250px]  rounded object-cover mb-4 ">
                  <div>
                    <!-- <h4 class=" kk wm text-xl font-bold mb-2">What is Mold and Why It Matters?</h4> -->
                    <p class="wm kk">A lot of Brooklyn’s well-loved homes and older buildings were built before the 1980s—back when using lead paint and asbestos materials was the norm. Today, these hidden hazards may still be lurking behind walls, ceilings, and floors—out of sight, but ready to pose serious health risks if disturbed during renovations or repairs.</p>
                    <h4 class=" kk wm text-xl font-bold mb-2">Here’s where these hazards often hide:</h4>
                    <h3 class="wm kk text-lg font-semibold">In Residential Properties:</h3>
                    <ul class="list-disc pl-6">
                        <li class="wm kk">Window frames, doors, and trim</li>
                        <li class="wm kk">Porches and railings</li>
                        <li class="wm kk">Ceiling tiles (especially popcorn ceilings)</li>
                        <li class="wm kk">Floor tiles and insulation around heating pipes</li>
                    </ul>
                    <h3 class="wm kk text-lg font-semibold">In Commercial Buildings:</h3>
                    <ul class="list-disc pl-6">
                        <li class="wm kk">Industrial flooring and roofing materials</li>
                        <li class="wm kk">HVAC ductwork and boiler rooms</li>
                        <li class="wm kk">Metal beams and staircases coated in lead paint</li>
                        <li class="wm kk">Old signage and painted surfaces in repurposed lofts or warehouses</li>
                    </ul>
                    <p class="wm kk">Even if lead paint or asbestos looks undisturbed, any renovation, repair, or demolition work can release dangerous particles into the air—putting the health of your family, tenants, or workers at serious risk.</p>
                    <h4 class="kk wm text-xl font-bold mb-2 text-lg font-semibold">The Health Risks You Can’t Afford to Ignore:</h4>
                    <p class="wm kk">Both lead and asbestos become dangerous when disrupted—especially in enclosed areas like homes or offices, where prolonged exposure can lead to serious health issues over time.</p>
                </div>
              </div>


              <h3 class="kk wm text-2xl font-bold mb-4 text-green-400">Why Lead Paint and Asbestos Are Still a Threat Today:</h3>
              <div class="space-y-4 mb-8">
                <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg">
                  <h4 class="kk wm text-xl font-bold mb-2">Lead Paint:</h4>
                  <p class="wm kk">Lead dust is silent but dangerous—it has no smell or color, yet it poses serious health risks, especially for pregnant women and children under six, whose developing bodies are most at risk. Exposure can cause developmental delays, learning disabilities, and long-term health issues.</p>
                </div>
                <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg">
                  <h4 class="kk wm text-xl font-bold mb-2">Asbestos:</h4>
                  <p class="wm kk">Asbestos fibers are incredibly small and easily become airborne when disturbed. Once inhaled, they can lodge deep in the lungs and lead to serious illnesses—including lung cancer and mesothelioma—often decades after exposure. Because the health effects take so long to show up, early detection and proactive prevention are absolutely essential.</p>
                </div>
              </div>
              </div>
              <!-- Asbestos Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img loading="lazy" src="images/brooklyn-residance.webp" height="auto" width="100%" alt="Asbestos image" class="w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4">
                  <div>
                    <h4 class=" kk wm text-xl font-bold mb-2">2. How Do You Know If Your Brooklyn Property Is Affected?</h4>
                    <p class="kk wm">You can’t tell just by looking. That’s why testing is essential.
                     <br>At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, we offer certified lead paint inspections and asbestos sampling services right here in Brooklyn. Our experts use safe, non-invasive methods to collect samples, which are then sent to accredited labs for analysis.</p>
                    <h4 class=" kk wm text-xl font-bold mb-2">Why It’s Dangerous today?</h4>
                    <p class="kk wm">In older buildings, asbestos remains a hidden danger, disturbing it can release toxic fibers into the air. Handle with caution because the fibers are harmless when undisturbed, but once airborne (due to renovation, demolition, or deterioration), they can be inhaled and lead to serious illnesses like mesothelioma, lung cancer, and asbestosis.</p>
                    <h4 class=" kk wm text-xl font-bold mb-2">How to protect yourself?</h4>
                    <p class="kk wm">Once we receive your lab results, we’ll walk you through your best options:</p>
                    <ul class="kk wm list-disc list-inside">
                        <li class="wm kk"><strong>Encapsulation:</strong> Sealing the hazardous material to safely prevent exposure</li>
                        <li class="wm kk"><strong>Abatement:</strong> Safe removal by licensed professionals</li>
                        <li class="wm kk"><strong>Containment:</strong> Managing the hazard without full removal</li>
                    </ul>
                    <p class="kk wm">The right solution depends on the material, its current condition, and your renovation or usage plans for the property.</p>
                </div>
              </div>
              </div>

              <!-- Lead Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img loading="lazy" src="images/DIY-house-cleaning.webp" height="auto" width="100%" alt="Lead paint old image" class="w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4">
                  <div>
                    <h4 class="text-xl font-bold mb-2 kk wm">3. Why DIY Isn’t the Answer in NYC:</h4>
                    <p class=" kk wm">We get it—DIY can seem like a cost-saving solution, especially in a city where every dollar counts. But when dealing with lead paint or asbestos, taking shortcuts can put your health—and the health of your family, employees, or neighbors—at serious risk. Some jobs are just too dangerous to tackle without the right training and protection. Plus, New York City has strict regulations about handling these materials. Failing to follow proper procedures can result in:</p>
                    <ul class=" kk wm list-disc list-inside">
                      <li class="wm kk"><strong>Legal penalties</strong></li>
                      <li class="wm kk"><strong>Environmental contamination</strong></li>
                      <li class="wm kk"><strong>Costly cleanups down the road</strong></li>
                      <li class="wm kk"><strong>Delays in permits or approvals</strong></li>
                    </ul>
                    <p class=" kk wm">At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, our team is fully licensed, certified, and expertly trained to meet all NYC, OSHA, and EPA standards—so you can trust that every project is completed safely, legally, and with the highest level of professionalism. We wear full protective gear, set up containment zones, and ensure all waste is disposed of legally and safely.</p>
                </div>
              </div>
              <h2 class=" kk wm text-2xl font-bold mb-2 mt-6 ">What Happens During Professional Removal in Brooklyn?</h2>
              <p class=" kk wm">Here’s what you can expect when you choose <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a> for professional lead paint or asbestos abatement in Brooklyn:</p>
              <ol class="list-decimal list-inside kk wm">
                <li><strong>Initial Inspection & Risk Assessment:</strong> We begin with a detailed inspection of your property, identifying potential hazards and evaluating the level of risk—so we can create the safest, most efficient plan for proper lead or asbestos removal.</li>
                <li><strong>Testing & Confirmation:</strong> Our team carefully gathers samples from areas of concern and sends them to accredited laboratories for precise testing—confirming the presence of lead or asbestos before moving forward with any remediation work.</li>
                <li><strong>Containment Setup:</strong> Before any work begins, we seal off the affected area using plastic barriers and negative air pressure systems to prevent contamination.</li>
                <li><strong>Safe Removal or Encapsulation:</strong> Depending on the situation, we either carefully remove the material or apply a specialized sealant to prevent future risk.</li>
                <li><strong>HEPA Cleaning & Final Clearance Testing:</strong> After removal, we perform thorough HEPA vacuuming and air quality testing to ensure the space is safe and ready for re-occupancy.</li>
              </ol>
              <h2 class=" kk wm text-2xl font-bold mb-2 mt-6 ">Verdict: Protect Your Brooklyn Investment—and Everyone Who Lives or Works There:</h2>
              <p class=" kk wm">Brooklyn’s charm is rooted in its rich history—but with that legacy comes the responsibility to keep its homes and buildings safe, healthy spaces for everyone who lives, works, and visits them.</p>
              <p class=" kk wm">Whether you own a home in Carroll Gardens, manage rental units in Bedford-Stuyvesant, or operate a business in Williamsburg, staying ahead of lead paint and asbestos threats is more important than ever.</p>
              <p class=" kk wm">At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, our mission is simple: help Brooklyn property owners create safer, healthier spaces—today and for years to come.</p>
              <p class=" kk wm">If you’re unsure whether your property contains lead or asbestos—or you're getting ready to renovate—it’s best to get expert guidance.</p>
              <p class=" kk wm">We’re here to help you assess the risks and take the right steps to keep your space safe. Let’s work together to protect your property, your peace of mind, and the safety of everyone who walks through your doors.</p>

              </div>

              <div :class="{'bg-green-300': !darkMode, 'bg-green-600': darkMode}" class=" text-white p-8 rounded-lg my-12">
                <div class="flex flex-col md:flex-row items-center">
                  <div class="md:w-1/3 mb-6 md:mb-0 md:mr-6">
                    <img loading="lazy" src="images/danger.webp" height="auto" width="100%" alt="Warning Icon" class="w-20 h-20">
                  </div>
                  <div class="md:w-2/3">
                    <h3 class="text-2xl font-bold mb-4 kk wm">Critical Statistic</h3>
                    <p class="mb-4 kk wm">Properties with documented remediation complete 28% faster and sell for 12% higher than comparable untreated properties.</p>
                    <a href="{{route ('index')}}#support" class="inline-block kk wm bg-yellow-400  px-6 py-2 rounded font-bold hover:bg-yellow-300 transition">
                      Get Your Free Assessment
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

          <!-- Testimonials Section -->
          <section class="mb-16 kk wm">
            <h3 class="text-2xl font-bold mb-8 text-center text-green-400">What Our Clients Say</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Testimonial 1 -->
              <div class=" bg-transparent p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  <img loading="lazy" src="images/testimonial-1.webp" height="auto" width="100%" alt="Client Photo" class="w-12 h-12 rounded-full mr-4">
                  <div>
                    <h4 class="font-bold">Sarah Thompson</h4>
                    <p class="text-sm  kk wm">Real Estate Investor</p>
                  </div>
                </div>
                <div class="text-yellow-400 text-lg mb-2">
                  ★★★★★
                </div>
                <p class="italic">"The team's thorough assessment and professional approach saved us from a potentially disastrous investment. Their documentation made the insurance claim process seamless."</p>
              </div>

              <!-- Testimonial 2 -->
              <div class=" bg-transparent p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  <img loading="lazy" src="images/testimonial-1.webp" height="auto" width="100%" alt="Client Photo" class="w-12 h-12 rounded-full mr-4">
                  <div>
                    <h4 class="font-bold">Michael Chen</h4>
                    <p class="text-sm  kk wm">Commercial Property Manager</p>
                  </div>
                </div>
                <div class="text-yellow-400 kk wm text-lg mb-2">
                  ★★★★★
                </div>
                <p class="italic">"We've worked with multiple remediation companies over the years, but their attention to detail and adherence to safety protocols sets them apart. Highly recommended!"</p>
              </div>
            </div>
          </section>
@endsection