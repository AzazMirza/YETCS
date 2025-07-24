@extends('layouts.app')
@extends('layouts.blog')
@section('page_title')
  Mold in your home.
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
          <h1 class="text-4xl md:text-5xl  font-bold leading-tight mb-6 kk wm ">Mold in Your Home: </h1>
          <h2 class="text-2xl opacity-90 mb-8 kk wm">How It Spreads, and Why Fast Cleaning Saves Thousands?</h2>
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
            <img src="images/mold-house.webp" alt="office-cleaning-for-mold-remediation" class="rounded-lg shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
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
              <span class="bg-green-400  px-3 py-1 rounded-full  kk wm">Health & Safety</span>
            </div>
            

            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-green-400 kk wm">Why should you care about mold <br> in your house</h2>
            <div class=" mb-8">
            <div class="overflow-hidden mb-8">
              <img src="images/moldy-indoors.webp" style="aspect-ratio: 21/9; object-fit: cover;" alt="damaged-front-door-due-to-mold-and-asbestos" class="w-full rounded-lg shadow-md">
            </div>

            <p class="mb-6 text-lg leading-relaxed kk wm">
              Mold is one of those quiet troublemakers. Mold can surface unexpectedly, and once it takes hold, it can lead to serious health concerns and expensive property damage if not dealt with swiftly and properly.
              At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, we’ve seen firsthand how fast mold can spread—what begins as a tiny patch can quickly turn into a major issue that threatens both your health and your home’s structure. Whether you’ve noticed a strange smell after a rainstorm or found some dark spots near a window, mold isn’t something to ignore. If ignored, mold doesn’t just damage walls, wood, and insulation—it can also impact your health and lead to thousands in repair costs.
              In this post, we’ll dive into how mold spreads through your home—and why taking quick action with the trusted professionals at <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a> is essential to safeguarding your health and preventing costly damage.    
                    </p>

            <!-- <blockquote class="border-l-4 kk wm border-yellow-400 pl-6 italic my-8 text-gray-700 text-xl">
              "A single square foot of visible mold indicates up to 10 square feet of hidden contamination. Professional assessment is crucial for accurate risk evaluation."
            </blockquote> -->

            <h3 class=" kk wm text-2xl font-bold mb-4 text-green-400">1. How Mold Gets into Your Home:</h3>
            
            <div class="space-y-8 mb-8">
              <!-- Mold Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img src="images/mold1.webp" alt="Multiple-kinds-of-mold-on-a-wall" class=" w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4 ">
                  <div>
                    <p class="wm kk">Mold spores are total party crashers - they show up uninvited and are everywhere! Outdoors, they're eco-superheroes, breaking down organic stuff. But indoors? They're unwelcome guests that can wreak havoc on your space! That’s where things go sideways.</p>
                   
                    <ul class="list-disc list-inside kk wm">
                        <li class="wm kk"><strong>Here’s how mold typically enters your home:</strong></li>
                        <li class="wm kk">Through open windows, doors, or HVAC systems.</li>
                        <li class="wm kk">On clothing, pets, or furniture.</li>
                        <li class="wm kk">Via water leaks (roof, plumbing, flooding).</li>
                        <li class="wm kk">Excess humidity in spaces like bathrooms, kitchens, and basements creates the perfect environment for mold to thrive.</li>
                    </ul>
                    <p class="kk wm">
                        Once mold spores enter your home, even a small amount of moisture is enough to trigger rapid growth. A damp wall behind the shower, condensation under the sink, or a slow leak in the basement—these are all perfect breeding grounds for mold. And here’s the scary part: mold can begin growing within 24–48 hours of moisture exposure.
                    </p>

                  </div>
                </div>
              </div>
            
              <h3 class=" kk wm text-2xl font-bold mb-4 text-green-400">2. The Sneaky Way Mold Spreads Indoors:</h3>
              
              <!-- Asbestos Section -->
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img src="images/sneaky-mold.webp" alt="smelly-office-image" class="w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4">
                  <div>
                    <p class="kk wm">Mold spreads through tiny airborne spores that float easily through the air, landing on damp or humid surfaces where they can quickly begin to grow and multiply.  If your heating or cooling system is running while mold is present, those spores can travel throughout your entire home. What makes mold especially tricky is that it often grows out of sight —behind drywall, under floors, or inside ductwork. By the time you notice discoloration or a musty Odor, the infestation may already be well underway. This concealed mold growth often indicates that the damage behind walls or under surfaces may be much more severe than it appears on the surface.</p>
                      <table class="table-auto border-collapse w-full">
                        <thead>
                          <tr class="bg-green-400">
                            <th class="px-4 py-2 text-lg font-bold text-white">Delay Time</th>
                            <th class="px-4 py-2 text-lg font-bold text-white">Potential Consequences</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="border px-4 py-2 text-black">1–3 Days</td>
                            <td class="border px-4 py-2 text-black">Surface mold begins, minor repairs possible</td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2 text-black">1 Week</td>
                            <td class="border px-4 py-2 text-black">Mold spreads: drywall or flooring replacement needed</td>
                          </tr>
                          <tr>
                            <td class="border px-4 py-2 text-black">2+ Weeks</td>
                            <td class="border px-4 py-2 text-black">Structural damage: HVAC contamination, costly restoration</td>
                          </tr>
                        </tbody>
                      </table>
                      <p class="kk wm mt-4">The more you delay, the deeper mold spreads and the more complex and costly the cleanup gets. That small patch of mold in your bathroom could end up requiring full wall demolition, flooring replacement, and air purification—all because of a delay.</p>
                  
                  </div>
                </div>
              </div>
              
              <h3 class=" kk wm text-2xl font-bold mb-4 text-green-400">3. Why Quick Professional Cleaning Makes All the Difference:</h3>
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img src="images/professionals-cleaning.webp" alt="Lead-paint-old-image" class="w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4">
                  <div>
                    <p class=" kk wm">It might be tempting to tackle mold yourself with some bleach and elbow grease—but without the right tools, training, and containment measures, you could end up spreading harmful spores and making the problem worse.</p>
                      <p class="kk wm">
                          That’s where <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a> comes in. We offer expert mold remediation services using safe, proven, and industry-approved methods to fully remove mold while keeping your home and your family’s health protected. Our process includes:
                      </p>
                      <ol class="list-decimal list-inside kk wm">
                          <li>Inspection & Moisture Assessment</li>
                          <li>Containment to Prevent Cross-Contamination</li>
                          <li>HEPA Vacuuming & Antimicrobial Treatment</li>
                          <li>Air Filtration & Post-Cleanup Verification</li>
                      </ol>
                      <p class="kk wm">
                          We don’t just clean—we ensure your home is truly free from mold and safe for everyone who lives there.
                      </p>

                  </div>
                </div>
              </div>
              
              <h3 class=" kk wm text-2xl font-bold mb-4 text-green-400">4. Real-Life Example: A Timely Save.</h3>
              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <img src="images/roof-mold.webp" alt="humid-office-image" class="w-full  md:h-[400px] h-[250px]  rounded object-cover mb-4">
                  <div>
                    <p class=" kk wm">One of our clients noticed a slight musty smell after a minor roof leak during a storm. Instead of risking further damage by waiting for it to “dry out,” they contacted us right away.
                                      Our team was on-site the same day, quickly detected early-stage mold developing in the ceiling, and carried out a fast, focused remediation to stop it before it spread. Total cost? Far less than what a full ceiling replacement would have been two weeks later.
                                      They saved money, avoided disruption, and kept their family safe—all because they acted fast.</p>
                    
                  </div>
                </div>
              </div>

              <div :class="{'bg-green-50': !darkMode, 'bg-green-600': darkMode}" class="bg-green-50 p-6 rounded-lg">
                <div class="flex flex-col items-start">
                  <h4 class="text-xl font-bold mb-2 kk wm">Verdict: Don’t Wait Until It’s Too Late.</h4>
                  <p class=" kk wm">Mold is sneaky, fast-moving, and potentially dangerous. But with swift action and the expert team at <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, you can stop it early—before it impacts your home or your finances. <br>
                                    If you think mold could be hiding in your home, don’t wait—contact us today for a quick, no-obligation evaluation and take the first step toward a cleaner, healthier living environment. At <a class="text-blue-700 hover:underline" href="{{route('index')}}">YETCS Environmental</a>, your health and home deserve the best protection, and that’s exactly what we’re here to provide! <br>
                                    We're dedicated to swift mold solutions, because we know every minute counts and delays can lead to pricey problems. Let's get your peace of mind back!</p>
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