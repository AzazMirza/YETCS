
<main>
  @yield('blog')
          <!-- Call to Action -->
          <div id="assessment" class="bg-green-400 text-white rounded-lg p-8 mb-12">
            <div class="flex flex-col md:flex-row items-center kk wm">
              <div class="md:w-1/3 mb-6 md:mb-0 md:mr-6">
                <img src="images/protection.png" alt="CTA Icon" class="w-24 h-24">
              </div>
              <div class="md:w-2/3">
                <h3 class="text-2xl font-bold mb-4">Protect Your Investment Today</h3>
                <p class="mb-6">Schedule your free property assessment with our certified inspectors and receive a comprehensive risk evaluation report within 24 hours.</p>
                {{-- <form class="flex flex-col sm:flex-row gap-4">
                  <input type="email" placeholder="Enter your email" class="px-4 py-3 rounded-lg text-gray-900 focus:outline-none">
                  <button type="submit" class="bg-yellow-400  kk wm px-6 py-3 rounded-lg font-bold hover:bg-yellow-300 transition">
                    Get Free Assessment  
                  </button> --}}
                  <a href="{{route ('index')}}#support" class="inline-block kk wm bg-yellow-400  px-6 py-2 rounded font-bold hover:bg-yellow-300 transition">Get Free Assessment </a>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-8">
          <!-- Search Widget -->
          <div>
            <form class="relative kk wm">
              <input type="text" placeholder="Search services..." class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
              <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                <svg width="25px" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </button>
            </form>
          </div>

          <!-- Categories Widget -->
          <div class=" bg-transparent rounded-lg shadow-md p-6 kk wm">
            <h4 class="text-xl font-bold mb-4 text-green-400">Service Categories</h4>
            <ul class="space-y-3">
              <li><a href="#" class="flex items-center hover:text-green-600 transition">
                <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                Mold Remediation
              </a></li>
              <li><a href="#" class="flex items-center hover:text-green-600 transition">
                <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                Lead Paint Removal
              </a></li>
              <li><a href="#" class="flex items-center hover:text-green-600 transition">
                <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                Asbestos Abatement
              </a></li>
              <li><a href="#" class="flex items-center hover:text-green-600 transition">
                <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                Air Quality Testing
              </a></li>
              <li><a href="#" class="flex items-center hover:text-green-600 transition">
                <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                Post-Remediation Verification
              </a></li>
            </ul>
          </div>

          <!-- Popular Posts Widget -->
          <div class=" bg-transparent rounded-lg shadow-md p-6 kk wm">
            <h4 class="text-xl font-bold mb-4 text-green-400">Popular Guides</h4>
            <div class="space-y-4">
              <div class="flex">
                <img src="images/molding inspection checklist.jpg" alt="Guide Thumbnail" class="w-16 h-16 object-cover rounded mr-4">
                <div>
                  <a href="#" class="font-medium hover:text-green-600">Mold Inspection Checklist</a>
                  <p class="text-sm text-gray-500">April 10, 2025</p>
                </div>
              </div>
              <div class="flex">
                <img src="images/Lead Paint Safety Guide.jpg" alt="Guide Thumbnail" class="w-16 h-16 object-cover rounded mr-4">
                <div>
                  <a href="#" class="font-medium hover:text-green-600">Lead Paint Safety Guide</a>
                  <p class="text-sm text-gray-500">April 5, 2025</p>
                </div>
              </div>
              <div class="flex">
                <img src="images/asbestos guide.jpg" alt="Guide Thumbnail" class="w-16 h-16 object-cover rounded mr-4">
                <div>
                  <a href="#" class="font-medium hover:text-green-600">Asbestos Identification Guide</a>
                  <p class="text-sm text-gray-500">March 28, 2025</p>
                </div>
              </div>
            </div>
          </div>

          {{-- <!-- Certification Widget -->
          <div class=" bg-transparent rounded-lg shadow-md p-6 kk wm">
            <h4 class="text-xl font-bold mb-4 text-green-400">Certifications</h4>
            <div class="grid grid-cols-3 gap-4">
              <img src="images/iicrc.png" alt="IICRC Certified" class="w-full h-auto">
              <img src="images/osha.png" alt="OSHA Certified" class="w-full h-auto">
              <img src="images/epa.png" alt="EPA Certified" class="w-full h-auto">
            </div>
            <p class="text-sm  kk wm mt-4">We maintain the highest industry certifications for mold, lead, and asbestos remediation.</p>
          </div> --}}
        </div>
      </div>
    </div>
  </section>

  <!-- Case Studies Section -->
  <section :class="{'bg-green-200': !darkMode, 'bg-green-800': darkMode}" class="py-16  kk wm">
    <div class="container mx-auto px-4">
      <h2  class="text-3xl font-bold text-center mb-12 ">Our Success Stories</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Case Study 1 -->
        <div class=" bg-transparent rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2">
          <img src="images/Commercial Office Building.jpg" alt="Case Study 1" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Commercial Office Building</h3>
            <p class=" kk wm mb-4">15,000 sq ft remediation project with hidden mold contamination behind drywall.</p>
            <div class="flex justify-between items-center">
              <span class="bg-green-100 text-green-400 px-2 py-1 text-sm rounded">Completed</span>
              <a href="#" class="text-green-600 hover:text-green-400 flex items-center">
                View Details
                <svg width="25px" class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Case Study 2 -->
        <div class=" bg-transparent rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2">
          <img src="images/Historic Residential Property.jpg" alt="Case Study 2" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Historic Residential Property</h3>
            <p class=" kk wm mb-4">Lead paint and asbestos remediation in a 100-year-old home.</p>
            <div class="flex justify-between items-center">
              <span class="bg-green-100 text-green-400 px-2 py-1 text-sm rounded">Completed</span>
              <a href="#" class="text-green-600 hover:text-green-400 flex items-center">
                View Details
                <svg width="25px" class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Case Study 3 -->
        <div class=" bg-transparent rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:-translate-y-2">
          <img src="images/Industrial Warehouse1.webp" alt="Case Study 3" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Industrial Warehouse</h3>
            <p class=" kk wm mb-4">Large-scale asbestos abatement project with complex containment requirements.</p>
            <div class="flex justify-between items-center">
              <span class="bg-green-100 text-green-400 px-2 py-1 text-sm rounded">In Progress</span>
              <a href="#" class="text-green-600 hover:text-green-400 flex items-center">
                View Details
                <svg width="25px" class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
