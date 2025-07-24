@extends('layouts.app')
@extends('layouts.blog')
@section('page_title')
  Mold, Asbestos and lead paint.
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
          <h1 class="text-4xl md:text-5xl  font-bold leading-tight mb-6 kk wm ">Mold, Asbestos and Lead Paint</h1>
          <h2 class="text-2xl opacity-90 mb-8 kk wm">A 2025 Guide for Property Owners</h2>
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
            <img src="images/home-owners-guide.webp" fetchpriority="high" loading="eager" decoding="async" height="420" width="630" alt="home owners guide for mold remediation" class="rounded-lg shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
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

            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-green-400  kk wm">Know the Dangers, Know the Risks. <br> Education is Key to Safety</h2>
            
            <div class=" mb-8">
            <div class="overflow-hidden mb-8">
              <img loading="lazy" src="images/damaged-front-door.webp" height="auto" width="100%" style="aspect-ratio: 21/9; object-fit: cover;" alt="damaged front door due to mold and asbestos" class="w-full rounded-lg shadow-md">
            </div>

            <p class="mb-6 text-lg leading-relaxed kk wm">

              In year 2025, owning personal property is not just about managing bills and fixing leaks—it means protecting your space from invisible threats. Historic homes are beautiful, but they may contain hidden risks such as mold, lead paint, and asbestos. It's essential to be aware and take steps to mitigate these risks for a healthier living space. Mold, lead paint, and asbestos aren’t just building materials or biological growth—they’re potential threats to your health, your tenants' safety, and your property’s value.

              Whether you're a homeowner, landlord, or commercial property investor, here’s what you absolutely need to know about these silent threats—and what to do about them.

            </p>

            <!-- <blockquote class="border-l-4 kk wm border-yellow-400 pl-6 italic my-8 text-gray-700 text-xl">
              "A single square foot of visible mold indicates up to 10 square feet of hidden contamination. Professional assessment is crucial for accurate risk evaluation."
            </blockquote> -->

            <h3 class=" kk wm text-2xl font-bold mb-4 text-green-400">1. Mold: A Quiet but Harmful Guest</h3>
            
            <div class="space-y-8 mb-8">
              <!-- Mold Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img loading="lazy" src="images/mold-wall.webp"  height="auto" width="100%" alt="Multiple-kinds-of-mold-on-a-wall" class=" w-full  md:min-h-[400px] md:h-[400px] h-[250px]  rounded object-cover mb-4 ">
                  <div>
                    <h4 class=" kk wm text-xl font-bold mb-2">What is Mold and Why It Matters?</h4>
                    <p class="wm kk">Mold is like fungus. Damp environments create the perfect conditions for mold to grow and spread fast. Keep your space dry and airy to send moisture packing. It can grow behind walls, under floors, in basements, or anywhere moisture accumulates. The most common indoor types include Aspergillus, Cladosporium, and the infamous Stachybotrys—often called black mold.</p>
                    <h4 class=" kk wm text-xl font-bold mb-2">Why It’s Dangerous in 2025?</h4>
                    <p class="wm kk">It can cause various health problems, especially in kids, seniors, and people with breathing problems or weak immunity. In 2025, more people are working from there homes and spending more time in their rooms, exposure to room air pollutants like mold is more dangerous than ever.</p>
                    <h4 class=" kk wm text-xl font-bold mb-2">What to Do?</h4>
                    <p class=" kk wm">
                      <ul class="list-disc">
                        <li class="wm kk"><strong>Inspect regularly:</strong> Pay attention to leaks, water stains, or musty Odors.</li>
                        <li class="wm kk"><strong>Fix those leaks ASAP:</strong> Even tiny drips can turn into major mold issues fast.</li>
                        <li class="wm kk"><strong>Use dehumidifiers:</strong> Dehumidifiers are a smart way to tackle moisture in damp areas. They help keep the air dry, making it harder for mold to thrive.</li>
                        <li class="wm kk"><strong>Hire experts:</strong> They'll tackle the mold safely and efficiently, so you don't have to risk spreading spores or dealing with health issues.</li>
                      </ul>
                      <!-- <span class="wm kk">It’s not something you want hanging around in the air you're breathing every day.</span> -->
                      </p>
                    </div>
                </div>
              </div>

              <!-- Asbestos Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img loading="lazy" src="images/asbestos.webp" height="auto" width="100%" alt="Asbestos image" class="w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4">
                  <div>
                    <h4 class=" kk wm text-xl font-bold mb-2">2. Asbestos: The Hidden Legacy.</h4>
                    <p class="kk wm">Asbestos was valued for its fire-resistant properties and strength, but its health risks are now well-known. It was commonly used in insulation, roofing, floor tiles, and pipe wrappings in buildings constructed before the 1980s.</p>
                    <h4 class=" kk wm text-xl font-bold mb-2">Why It’s Dangerous today?</h4>
                    <p class="kk wm">In older buildings, asbestos remains a hidden danger, disturbing it can release toxic fibers into the air. Handle with caution because the fibers are harmless when undisturbed, but once airborne (due to renovation, demolition, or deterioration), they can be inhaled and lead to serious illnesses like mesothelioma, lung cancer, and asbestosis.</p>
                    <h4 class=" kk wm text-xl font-bold mb-2">How to protect yourself?</h4>
                    <ul class="kk wm list-disc list-inside">
                        <li class="wm kk"><strong>Don’t disturb it:</strong> If it's asbestos then no drilling, sanding, or cutting.</li>
                        <li class="wm kk"><strong>Get a pro test:</strong> consulted a certified professional to test it before starting any work.</li>
                        <li class="wm kk"><strong>Remove safely:</strong> Safe asbestos removal should be done by trained, licensed professionals.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Lead Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img loading="lazy" src="images/paint.webp" height="auto" width="100%" alt="Lead paint old image" class="w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4">
                  <div>
                    <h4 class="text-xl font-bold mb-2 kk wm">3. Lead Paint: A Lingering Danger</h4>
                    <p class=" kk wm">Before it was banned in the U.S. in 1978, lead-based paint was widely used due to its durability. Unfortunately, lead is toxic—especially to children.</p>
                    <h4 class="text-xl font-bold mb-2 kk wm">Why It’s Dangerous in 2025:</h4>
                    <p class=" kk wm">Lead exposure can be super harmful to little ones, affecting their development and health. Keep those surfaces clean and intact. Handle with care. Kids are super vulnerable to its toxic effects, which can cause developmental delays, learning issues, and behavioural problems.</p>
                    <h4 class="text-xl font-bold mb-2 kk wm">What to Do?</h4>
                    <ul class=" kk wm list-disc list-inside">
                      <li class="wm kk"><strong>Test your home:</strong> Not sure that there is lead in your home? Use a test kit or hire a qualified expert to find out.</li>
                      <li class="wm kk"><strong>Keep painted surfaces intact:</strong> Maintain the beauty of painted surfaces through regular care and timely touch-ups.</li>
                      <li class="wm kk"><strong>Renovate responsibly:</strong> Hire EPA-certified renovators who follow safe removal procedures.</li>
                      <li class="wm kk"><strong>Don’t DIY:</strong> Improper scraping or sanding can release lead dust. Hire a professional.</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <h4 class="text-xl font-bold mb-2 kk wm">Staying Compliant in 2025?</h4>
                  <p class=" kk wm">Environmental laws have tightened in recent years. Property owners beware! Neglecting hazards like mold, asbestos, or lead paint can lead to lawsuits, fines, and insurance issues. Stay on the safe side! Inspections, docs, and compliance – check. Stay ahead, avoid the headache!.</p>
                </div>
              </div>
              
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <h4 class="text-xl font-bold mb-2 kk wm">Final Thoughts: Knowledge is Protection.</h4>
                  <p class=" kk wm">Owning property comes with responsibilities, and ensuring it’s a safe place to live or work is one of the biggest. Mold, asbestos, and lead paint may be out of sight, but they shouldn’t be out of mind.If you suspect your property might contain any of these hazards, don’t wait. Take action today—not just for compliance, but for your health, your family, and your peace of mind. <br>Concerned about hidden hazards? Reach out to our certified experts and schedule a professional home inspection today. A little caution today can save you from future problems.</p>
                </div>
              </div>

          <!--  <h2 class=" kk wmtext-4xl font-bold mb-6 text-green-400">What Happens During the Mold Remediation Process?</h2>
            
            <div class="mb-8">
              <div class="relative">
                <div class="absolute left-0 top-8 w-full h-1 bg-green-200"></div>
                <div class="relative">
                  <div class="flex items-start mb-12">
                    <div class=" kk wm w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl">1</div>
                    <div class="ml-6  bg-transparent p-6 rounded-lg shadow-md flex-1">
                      <h4 class=" kk wm text-xl font-bold mb-2">Assessment: A professional checks the Mold condition</h4>
                    </div>
                  </div>

                  <div class="flex items-start mb-12">
                    <div class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl kk wm">2</div>
                    <div class="ml-6  bg-transparent p-6 rounded-lg shadow-md flex-1">
                      <h4 class="text-xl font-bold mb-2 kk wm">Containment: They block off the area to prevent further spread</h4>
                    </div>
                  </div>

                  <div class="flex items-start">
                    <div class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl kk wm">3</div>
                    <div class="ml-6  bg-transparent p-6 rounded-lg shadow-md flex-1">
                      <h4 class="text-xl font-bold mb-2 kk wm">Air filtration: filtration equipment's like HEPA air purifiers are used remove Mold spores from the air</h4>
                    </div>
                  </div>

                  <div class="flex items-start">
                    <div class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl kk wm">4</div>
                    <div class="ml-6  bg-transparent p-6 rounded-lg shadow-md flex-1">
                      <h4 class="text-xl font-bold mb-2 kk wm">Removal: Moldy materials are removed safely</h4>
                    </div>
                  </div>

                  <div class="flex items-start">
                    <div class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl kk wm">5</div>
                    <div class="ml-6  bg-transparent p-6 rounded-lg shadow-md flex-1">
                      <h4 class="text-xl font-bold mb-2 kk wm">Cleaning and disinfecting: The are is thoroughly deodorized and sanitized</h4>
                    </div>
                  </div>

                  <div class="flex items-start">
                    <div class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl kk wm">6</div>
                    <div class="ml-6  bg-transparent p-6 rounded-lg shadow-md flex-1">
                      <h4 class="text-xl font-bold mb-2 kk wm">Restoration: Repairs are made, and instructions are given to prevent future issues</h4>
                    </div>
                  </div>
                </div>
              </div>
             </div>

             <div class="bg-transparent rounded-lg shadow-md p-8 my-12">
              <h3 class="text-2xl font-bold mb-4 kk wm">Want to stop Mold before it starts?</h3>
              <p class="mb-4 kk wm">Here's few habits you can follow:</p>
              <ul class="list-disc list-inside mb-4">
                <li class="kk wm">Fix any leaks right away (roof, pipes, basement)</li>
                <li class="kk wm">Use exhaust fans in your kitchens and bathrooms to prevent moisturizing</li>
                <li class="kk wm">If your house feels damp, you can run a dehumidifier</li>
                <li class="kk wm">Dry every wet place in your house thoroughly to prevent the growth of Mold</li>
                <li class="kk wm">Regularly check hidden spots (behind furniture, under sinks) in your house to prevent Mold</li>
              </ul>
              <h4 class="text-xl font-bold mb-2 kk wm">Final Thoughts: Mold Is Sneaky, But You Don’t Have to Let It Win.</h4>
              <p class="mb-4 kk wm">Mold often starts small, but it can become a big problem fast. As long as you wait, it became more expensive and riskier. you need to check it immediately if you see Mold signs to prevent further spreading.</p>
            </div> -->

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
