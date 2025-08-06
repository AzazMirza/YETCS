@extends('layouts.app')
@extends('layouts.blog')
@section('page_title')
  Hidden Hazards in Your Property.
@endsection
@section('page')
  <body
    x-data="{ page: 'Professional Mold Lead & Asbestos Remediation Services for Real Estate', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
  @section('blog')
  <!-- Hero Section with Parallax Effect -->
  <section class=" text-white py-16 md:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('images/mold-texture.webp')] opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
          <h1 class="text-4xl md:text-5xl  font-bold leading-tight mb-6 kk wm ">Hidden Hazards in Your Property</h1>
          <p class="text-xl opacity-90 mb-8 kk wm">Professional Mold, Lead & Asbestos Remediation Services for Real Estate Professionals</p>
          <div class="flex flex-wrap gap-4">
            <a href="{{route ('index')}}#support" class=" kk wm bg-green-400 px-6 py-3 rounded-lg font-semibold hover:bg-green-300 transition-shadow shadow-lg hover:shadow-xl flex items-center">
              <svg width="25px" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
              </svg>
              Schedule Inspection  
            </a>
            <a href="#process" class=" kk wm border-2 border-[ rgb(255 255 255 / var(--tw-text-opacity))] px-6 py-3 rounded-lg font-semibold hover:bg-[rgb(244 247 250 / var(--tw-bg-opacity)] hover:text-green-400 transition-all flex items-center">
              <svg width="25px" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Our Process
            </a>
          </div>
        </div>
        <div class="md:w-1/2">
          <div class="relative">
            <img src="images/mold inspection.webp" alt="Professional Remediation Team" class="rounded-lg shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
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
              <span class="bg-green-100 text-green-400 px-3 py-1 rounded-full  kk wm">Health & Safety</span>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-green-400  kk wm">The Silent Threats in Your Real Estate Investment</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
              <img src="images/molding inspection2.webp" alt="Mold Inspection" class="rounded-lg shadow-md">
              <img src="images/asbestos testing2.webp" alt="Asbestos Testing" class="rounded-lg shadow-md">
            </div>

            <p class="mb-6 text-lg leading-relaxed kk wm">
              In the fast-paced world of real estate transactions, hidden hazards like mold, lead, and asbestos can turn a promising investment into a liability nightmare. Our team at YETCS has encountered countless properties where these silent threats have jeopardized both health and financial returns.
            </p>

            <blockquote class="border-l-4 kk wm border-yellow-400 pl-6 italic my-8 text-gray-700 text-xl">
              "A single square foot of visible mold indicates up to 10 square feet of hidden contamination. Professional assessment is crucial for accurate risk evaluation."
            </blockquote>

            <h3 class=" kk wmtext-2xl font-bold mb-4 text-green-400">The Three Most Dangerous Contaminants</h3>
            
            <div class="space-y-8 mb-8">
              <!-- Mold Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img src="images/mold1.webp" alt="Mold Icon" class="w-full  md:h-[400px] h-[250px]  mr-4">
                  <div>
                    <h4 class=" kk wm wmtext-xl font-bold mb-2">Mold Infestation</h4>
                    <p class=" kk wm">Black mold (Stachybotrys chartarum) releases mycotoxins that can cause respiratory issues, allergic reactions, and even neurological symptoms. Our air quality specialists use thermal imaging to detect hidden moisture sources.</p>
                  </div>
                </div>
              </div>

              <!-- Lead Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img src="images/paint.webp" alt="Lead Icon" class="w-full  md:h-[400px] h-[250px]  mr-4">
                  <div>
                    <h4 class=" kk wmtext-xl font-bold mb-2">Lead Paint Hazards</h4>
                    <p class=" kk wm">Homes built before 1978 often contain lead-based paint. Our certified inspectors use XRF analyzers to detect lead in dust and surfaces, providing OSHA-compliant risk assessments.</p>
                  </div>
                </div>
              </div>

              <!-- Asbestos Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img src="images/Asbestos Exposure.webp" alt="Asbestos Icon" class="w-full  md:h-[400px] h-[250px]  mr-4">
                  <div>
                    <h4 class="text-xl font-bold mb-2 kk wm">Asbestos Exposure</h4>
                    <p class=" kk wm">Friable asbestos fibers in building materials become airborne during renovations. Our EPA-certified team follows strict containment protocols for safe removal and disposal.</p>
                  </div>
                </div>
              </div>
            </div>

            <h3 class=" kk wmtext-2xl font-bold mb-6 text-green-400">Our Scientific Approach</h3>
            
            <div class="mb-8">
              <div class="relative">
                <div class="absolute left-0 top-8 w-full h-1 bg-green-200"></div>
                <div class="relative">
                  <!-- Process Step 1 -->
                  <div class="flex items-start mb-12">
                    <div class=" kk wm w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl">1</div>
                    <div class="ml-6  bg-transparent p-6 rounded-lg shadow-md flex-1">
                      <h4 class=" kk wm text-xl font-bold mb-2">Scientific Assessment</h4>
                      <ul class="space-y-2">
                        <li class="flex items-center kk wm">
                          <svg width="25px" class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                          </svg>
                          Air sampling with NIOSH-approved methods
                        </li>
                        <li class="flex items-center kk wm">
                          <svg width="25px" class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                          </svg>
                          Surface testing with PCR analysis for mold
                        </li>
                        <li class="flex items-center kk wm">
                          <svg width="25px" class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                          </svg>
                          X-ray diffraction for asbestos identification
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div :class="{'bg-green-300': !darkMode, 'bg-green-600': darkMode}" class=" text-white p-8 rounded-lg my-12">
              <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-6 md:mb-0 md:mr-6">
                  <img src="images/danger.webp" alt="Warning Icon" class="w-20 h-20">
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
              <span class="bg-green-100 text-green-400 px-3 py-1 rounded-full text-sm">Mold Remediation</span>
              <span class="bg-green-100 text-green-400 px-3 py-1 rounded-full text-sm">Lead Abatement</span>
              <span class="bg-green-100 text-green-400 px-3 py-1 rounded-full text-sm">Asbestos Removal</span>
              <span class="bg-green-100 text-green-400 px-3 py-1 rounded-full text-sm">Property Assessment</span>
            </div>


          </article>

          <!-- Testimonials Section -->
          <section class="mb-16 kk wm">
            <h3 class="text-2xl font-bold mb-8 text-center text-green-400">What Our Clients Say</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Testimonial 1 -->
              <div class=" bg-transparent p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                  <img src="images/testimonial-1.webp" alt="Client Photo" class="w-12 h-12 rounded-full mr-4">
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
                  <img src="images/testimonial-1.webp"alt="Client Photo" class="w-12 h-12 rounded-full mr-4">
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