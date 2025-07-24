@extends('layouts.app')
@section('page_title')
  Yetcs Environmentals
@endsection

@section('page')
<body  
x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
    >  
@endsection

@section('mainContent')

      <!-- ===== Hero Start ===== -->
      <section class="gj ir hj  jr i pg flex flex-col md:flex-row items-start justify-center md:items-center py-24 px-8">

        <!-- Hero Images -->
        <div class="w-full md:w-1/2 md:order-2 px-8">
          <img src="images/001.webp" alt="Worker"  class=" q ua rounded-full overflow-hidden bg-[#a7d938] w-full" />
        </div>

        <!-- Hero Content -->
        <div class="md:flex-1 md:order-1 bb ze ki xn 2xl:ud-px-0">
          <div class="tc _o">
            <div class="animate_left jn md:mt-12">
              <h1 class="fk vj zp or kk wm wb" >We Specialize in Lead, Asbestos and Mold Inspection.</h1>
              <p class="fq" >
                We are a dedicated company specializing in the inspection and remediation of lead, asbestos, and mold in residential properties. Our team is committed to ensuring the safety and well-being of your family by providing thorough assessments and effective removal solutions.
              </p>

              <div class="tc tf yo zf mb">
<!--                 <a href="#support" class="ek jk lk gh gi hi rg ml il vc _d _l" @click="$scrollTo('#support')">Get Started Now</a> -->

                <span class="tc sf">
                  <button class="ek jk lk gh gi hi rg ml il vc _d _l">
                      <a href="tel:13472546186" class="inline-block">Call now (1347) 254-6186</a>
                  </button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Hero End ===== -->

      <!-- ===== Small Features Start ===== -->
      <section id="features">
        <div class="bb ze ki yn 2xl:ud-px-12.5">
          <div class="tc uf zo xf ap zf bp mq">
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg mh">
                <img src="images/icon-01.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">24/7 Support</h4>
                <p>Our dedicated support team is available around the clock to help you with any issues or questions.</p>
              </div>
            </div>
      
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg nh">
                <img src="images/icon-02.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">Take Ownership</h4>
                <p>We empower every team member to take initiative and drive results with accountability and confidence.</p>
              </div>
            </div>
      
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg nh">
                <img src="images/icon-03.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">Team Work</h4>
                <p>Collaboration lies at the heart of our success — working together to achieve shared goals and innovation.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
            <!-- ===== Small Features End ===== -->

      <!-- ===== About Start ===== -->
      <section class="ji gp uq 2xl:ud-py-35 pg">
        <div class="bb ze ki xn wq">
          <div class="tc wf gg qq">
            <!-- About Images -->
            <div class="animate_left xc gn gg jn/2 i">
              <div>
                <img src="images/shape-05.svg" alt="Shape" class="h -ud-left-5 x" />
                <img src="images/cleaning1.webp" height="300" width="200" alt="About" class="ib sg" />
                <img src="images/cleaning2.webp" height="300" width="200"  alt="About" class="sg" />
              </div>
              <div>
                <img src="images/shape-06.svg" alt="Shape" />
                <img src="images/cleaning3.webp"  height="300" width="200"  alt="About" class="ob gb sg" />
                <img src="images/shape-07.svg" alt="Shape" class="bb" />
              </div>
            </div>

            <!-- About Content -->
            <div class="animate_right jn/2">
              <h4 class="ek yj mk gb">Why Choose Us</h4>
              <h2 class="fk vj zp pr kk wm qb">We Deliver Excellence Through Trusted Solutions & Expert Support.</h2>
              <p class="uo">
                With years of experience and a dedicated team, we provide reliable, high-quality services tailored to meet your business needs. Our focus on customer satisfaction ensures that every project is handled with care and precision.
              </p>
            
              <a href="{{ asset('videos/YETCS-video.mp4') }}" data-fslightbox class="vc wf hg mb">
                <span class="tc wf xf be dd rg i gh ua">
                  <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                  <img src="images/icon-play.svg" alt="Play" />
                </span>
                <span class="kk">SEE HOW WE WORK</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== About End ===== -->


      <!-- ===== Services Start ===== -->
      <section class="lj tp kr">
        <!-- Section Title Start -->
        <div
          x-data="{
            sectionTitle: `Professional Hazardous Material Cleaning Services`,
            sectionTitleText: `We specialize in safe, thorough, and certified removal of mold, asbestos, and lead contaminants to protect your health, property, and peace of mind.`
          }"
        >
          <div class="animate_top bb ze rj ki xn vq">
            <h2
              x-text="sectionTitle"
              class="fk vj pr kk wm on/5 gq/2 bb _b"
            >
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
          </div>
        </div>
        <!-- Section Title End -->
      
        <div class="bb ze ki xn yq mb en">
          <div class="wc qf pn xo ng">
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-04.svg" alt="Mold Removal Icon" />
              <h4 class="ek zj kk wm nb _b">Mold Remediation</h4>
              <p>We offer complete mold inspection, testing, and remediation services using industry-approved techniques to eliminate mold growth and prevent future outbreaks.</p>
            </div>
      
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-05.svg" alt="Asbestos Removal Icon" />
              <h4 class="ek zj kk wm nb _b">Asbestos Abatement</h4>
              <p>Our licensed professionals safely remove and dispose of asbestos-containing materials, ensuring full compliance with local regulations and keeping your environment safe.</p>
            </div>
      
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-06.svg" alt="Lead Paint Removal Icon" />
              <h4 class="ek zj kk wm nb _b">Lead Paint Removal</h4>
              <p>Protect your family or tenants from harmful lead exposure with our certified lead-safe practices, including containment, removal, and post-removal clearance testing.</p>
            </div>
      
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-07.svg" alt="Decontamination Icon" />
              <h4 class="ek zj kk wm nb _b">Post-Cleanup Restoration</h4>
              <p>After hazardous material removal, we restore your space to its original condition — including drywall repair, painting, and air quality restoration.</p>
            </div>
      
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-05.svg" alt="Air Quality Testing Icon" />
              <h4 class="ek zj kk wm nb _b">ACP-5</h4>
              <p>The ACP-5 service is a critical compliance solution offered by YETCS Inc, designed to identify and document the presence  of asbestos-containing materials in New York City.</p>
            </div>
      
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-030.svg" alt="Certified Professionals Icon" />
              <h4 class="ek zj kk wm nb _b">Licensed & Certified Experts</h4>
              <p>All our technicians are fully trained, state-certified, and equipped with the latest tools and protective gear to handle hazardous materials safely and effectively.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Services End ===== -->

      <!-- ===== Pricing Table Start ===== -->
      {{-- <section x-data="setup()" class="i pg fh rm ji gp uq">
        <!-- Bg Shapes -->
        <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
        <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
        <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
        <img src="images/shape-12.svg" alt="Shape" class="h p s" />
        <img src="images/shape-13.svg" alt="Shape" class="h r q" />


      <!-- ===== Projects Start ===== -->
      <section class="pg pj vp mr oj wp nr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `We Offer Great Affordable Premium Prices.`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>
        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn 2xl:ud-px-0 jb" x-data="{filterTab: 1}">
          <!-- Porject Tab -->
          <div
            class="projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc"
          >
            <button
              data-filter="*"
              @click="filterTab = 1"
              :class="{ 'gh lk' : filterTab === 1 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
              All
            </button>
            <button
              data-filter=".branding"
              @click="filterTab = 2"
              :class="{ 'gh lk' : filterTab === 2 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
              Asbestos Removal
            </button>
            <button
              data-filter=".digital"
              @click="filterTab = 3"
              :class="{ 'gh lk' : filterTab === 3 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
              Lead Removal
            </button>
            <button
              data-filter=".ecommerce"
              @click="filterTab = 4"
              :class="{ 'gh lk' : filterTab === 4 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
              Mold
            </button>
          </div>

          <!-- Projects item wrapper -->
          <div class="projects-wrapper tc -ud-mx-5">
            <div class="project-sizer"></div>
            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
              <div class="c i pg sg z-1">
                <img src="images/project-01.webp" width="250" height="250"  class=" object-cover mx-auto" alt="Project" />

                <div 
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">Yetcs</h4>
                  <p>Asbestos cleaning</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#"
                  >
                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 digital">
              <div class="c i pg sg z-1">
                <img src="images/project-02.webp" width="250" height="250" alt="Project" class=" object-cover mx-auto" />
                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">Lead Removal</h4>
                  <p>Lead inspection</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#"
                  >
                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
              <div class="c i pg sg z-1">
                <img src="images/project-04.webp" width="250" height="250" class=" object-cover mx-auto" alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">Roofing Restoration</h4>
                  <p>Roof inspection and Cleaning</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#"
                  >
                    <!-- <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg> -->
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd vo/3 digital ecommerce">
              <div class="c i pg sg z-1">
                <img src="images/project-03.webp" width="250" height="250" class=" object-cover mx-auto" alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">Mold Inspection</h4>
                  <p>Mold Removel</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#"
                  >
                    <!-- <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Projects End ===== --> --}}

      <!-- ===== Testimonials Start ===== -->
      <section class="hj rp hr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Client’s Testimonials`, sectionTitleText: `Our satisfied customers share thier experience to help others make better decisions.` }"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn ar">
          <div class="animate_top jb cq">
            <!-- Slider main container -->
            <div class="swiper testimonial-01">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="i hh rm sg vk xm bi qj">
                    <!-- Border Shape -->
                    <span class="rc je md/2 gh xg h q r"></span>
                    <span class="rc je md/2 mh yg h q p"></span>

                    <div class="tc sf rn tn un zf dp">
                      <img class="bf" src="images/reviewer1.webp"  height="300" width="250" alt="User" />

                      <div>
                        <img src="images/icon-quote.svg" alt="Quote" />
                        <p class="ek ik xj _p kc fb">
                          I was really impressed with the quality of the work. I was a 1st time using this service and they were very friendly and cooperative. I was able to get my house cleaned up in no time.                          </p>

                        <div class="tc yf vf">
                          <div>
                            <span class="rc ek xj kk wm zb">Devid Smith</span>
                            <span class="rc">Brooklyn Resident</span>
                          </div>

                          <img class="rk" src="images/brand-light-02.svg" alt="Brand" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="i hh rm sg vk xm bi qj">
                    <!-- Border Shape -->
                    <span class="rc je md/2 gh xg h q r"></span>
                    <span class="rc je md/2 mh yg h q p"></span>

                    <div class="tc sf rn tn un zf dp">
                      <img class="bf" src="images/reviewer2.webp" height="300" width="250" alt="User" />

                      <div>
                        <img src="images/icon-quote.svg" alt="Quote" />
                        <p class="ek ik xj _p kc fb">
                          I was referred to this company by a friend who had a great experience with them. I was very impressed with the quality of work and the price was very reasonable.
                        </p>

                        <div class="tc yf vf">
                          <div>
                            <span class="rc ek xj kk wm zb">Debby</span>
                            <span class="rc">Flowers shop owner</span>
                          </div>

                          <img class="rk" src="images/brand-light-02.svg" alt="Brand" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="i hh rm sg vk xm bi qj">
                    <!-- Border Shape -->
                    <span class="rc je md/2 gh xg h q r"></span>
                    <span class="rc je md/2 mh yg h q p"></span>

                    <div class="tc sf rn tn un zf dp">
                      <img class="bf" src="images/reviewer3.webp" height="300" width="250" alt="User" />

                      <div>
                        <img src="images/icon-quote.svg" alt="Quote" />
                        <p class="ek ik xj _p kc fb">
                          I had asbestos in my home and I was very impressed with the service. They were very professional and did a great job. I would definitely recommend them.
                        </p>

                        <div class="tc yf vf">
                          <div>
                            <span class="rc ek xj kk wm zb">John Kennedy</span>
                            <span class="rc">Home Owner </span>
                          </div>

                          <img class="rk" src="images/brand-light-02.svg" alt="Brand" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- If we need navigation -->
              <div class="tc wf xf fg jb">
                <div
                  class="swiper-button-prev c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym"
                >
                  <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3.52366 7.83336L7.99366 12.3034L6.81533 13.4817L0.333663 7.00002L6.81533 0.518357L7.99366 1.69669L3.52366 6.16669L13.667 6.16669L13.667 7.83336L3.52366 7.83336Z"
                      fill=""
                    />
                  </svg>
                </div>
                <div
                  class="swiper-button-next c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym"
                >
                  <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" fill="" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Testimonials End ===== -->

      <!-- ===== Counter Start ===== -->
      <section class="i pg qh rm ji hp">
        <img src="images/shape-11.svg" alt="Shape" class="of h ga ha ke" />
        <img src="images/shape-07.svg" alt="Shape" class="h ia o ae jf" />
        <img src="images/shape-14.svg" alt="Shape" class="h ja ka" />
        <img src="images/shape-15.svg" alt="Shape" class="h q p" />

        <div class="bb ze i va ki xn br">
          <div class="tc uf sn tn xf un gg">
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">800+</h2>
              <p class="ek bk aq">Clients Served</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">12+</h2>
              <p class="ek bk aq">Years of Experience</p>
            </div>
            <!-- <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">865</h2>
              <p class="ek bk aq">Winning Award</p>
            </div> -->
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">300+</h2>
              <p class="ek bk aq">Returning Clients</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Counter End ===== -->

      <!-- ===== Blog Start ===== -->
      <section class="ji gp uq">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Latest Blogs & News`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
          <div class="wc qf pn xo zf iq">
            <!-- Blog Item 10 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/brooklyn.webp" alt="The Hidden Dangers of Asbestos" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route ('The-Hidden-Dangers-of-Asbestos-Are-You-at-Risk-in-Your-Brooklyn-Property')}}" class="vc ek rg lk gh sl ml il gi hi"
                    >Read More</a
                  >
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img src="images/icon-man.svg" alt="User" />
                    <p>Raees ur Rehan</p>
                  </div>
                  <div class="tc wf ag">
                    <img src="images/icon-calender.svg" alt="Calender" />
                    <p>26 june, 2025</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a href="{{route ('The-Hidden-Dangers-of-Asbestos-Are-You-at-Risk-in-Your-Brooklyn-Property')}}">The Hidden Dangers of Asbestos</a>
                </h4>
              </div>
            </div>

            <!-- Blog Item 9 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/street-house.webp" alt="The Hidden Health Risks Lurking in Unclean Properties" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route('The-Hidden-Health-Risks-Lurking-in-Unclean-Properties')}}" class="vc ek rg lk gh sl ml il gi hi"
                    >Read More</a
                  >
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img src="images/icon-man.svg" alt="User" />
                    <p>Raees ur Rehan</p>
                  </div>
                  <div class="tc wf ag">
                    <img src="images/icon-calender.svg" alt="Calender" />
                    <p>26 june, 2025</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a href="{{route('The-Hidden-Health-Risks-Lurking-in-Unclean-Properties')}}">The Hidden Health Risks Lurking in Unclean Properties</a>
                </h4>
              </div>
            </div>

            <!-- Blog Item 8 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/professional-cleaners.webp" alt="Our Deep Cleaning Checklist What We Actually Do When You Book Us" />

                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                  <a href="{{route ('Our-Deep-Cleaning-Checklist-What-We-Actually-Do-When-You-Book-Us')}}" class="vc ek rg lk gh sl ml il gi hi"
                    >Read More</a>
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img src="images/icon-man.svg" alt="User" />
                    <p>Raees ur Rehan</p>
                  </div>
                  <div class="tc wf ag">
                    <img src="images/icon-calender.svg" alt="Calender" />
                    <p>26 june, 2025</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a href="{{route ('Our-Deep-Cleaning-Checklist-What-We-Actually-Do-When-You-Book-Us')}}">Our Deep Cleaning Checklist What We Actually Do When You Book Us</a>
                </h4>
              </div>
            </div>
      </section>
      <!-- ===== Blog End ===== -->

      <!-- ===== Contact Start ===== -->
      <section id="support" class="i pg fh rm ji gp uq">
        <!-- Bg Shapes -->
        <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
        <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
        <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
        <img src="images/shape-12.svg" alt="Shape" class="h p s" />
        <img src="images/shape-13.svg" alt="Shape" class="h r q" />

        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Let’s Stay Connected`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="i va bb ye ki xn wq jb mo">
          <div class="tc uf sn tf rn un zf xl:gap-10">
            <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
              <!-- Bg Shapes -->
              <img src="images/shape-03.svg" alt="Shape" class="h la x wd" />
              <img src="images/shape-06.svg" alt="Shape" class="h la ma ne kf" />

              <div class="fb">
                <h4 class="wj kk wm cc">Email Address</h4>
                <a href="mailto:adnan@yetcs.com?subject=Service%20Inquiry&body=Hi%2C%20I%20would%20like%20your%20services%20related%20to%20mold%20and%20lead%20cleaning." class="ek jk lk gh gi hi rg ml il vc _d _l">adnan@yetcs.com</a>

              </div>
                <div class="fb">
                <h4 class="wj kk wm cc">Office Location</h4>
                <a target="_blank" href="https://www.google.com/maps?q=3842+Flatlands+Avenue,+Brooklyn,+NY+11234" class="text-green-500 underline">3842 Flatlands Avenue, Brooklyn, NY 11234</a>
              </div>
              <div class="fb">
                <h4 class="wj kk wm cc">Phone Number</h4>
                <a href="https://api.whatsapp.com/send?phone=+13473273079" class="ek jk lk gh gi hi rg ml il vc _d _l">Whatsapp +1347 327 3079</a>
              </div>
              <!-- <div class="fb">
                <h4 class="wj kk wm cc">Skype Email</h4>
                <p><a href="#">example@yourmail.com</a></p>
              </div> -->

              <span class="rc nd rh tm lc fb"></span>

              <div>
                <h4 class="wj kk wm qb">Social Media</h4>
                <ul class="tc wf fg">
                  <li>
                    <a href="https://www.facebook.com/YETCS/" target="_blank" class="c tc wf xf ie ld rg ml il tl">
                      <svg class="th lm ml il" width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.83366 11.3752H9.12533L10.042 7.7085H6.83366V5.87516C6.83366 4.931 6.83366 4.04183 8.667 4.04183H10.042V0.96183C9.74316 0.922413 8.61475 0.833496 7.42308 0.833496C4.93433 0.833496 3.16699 2.35241 3.16699 5.14183V7.7085H0.416992V11.3752H3.16699V19.1668H6.83366V11.3752Z"
                          fill=""
                        />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/yetcs_envirmental/" target="_blank" class="c tc wf xf ie ld rg ml il tl">
                      <svg class="th lm ml il" width="20" height="16" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"><path fill-rule="nonzero" d="M170.663 256.157c-.083-47.121 38.055-85.4 85.167-85.482 47.121-.092 85.407 38.029 85.499 85.159.091 47.13-38.047 85.4-85.176 85.492-47.112.09-85.399-38.039-85.49-85.169zm-46.108.092c.141 72.602 59.106 131.327 131.69 131.185 72.592-.14 131.35-59.089 131.209-131.691-.141-72.577-59.114-131.336-131.715-131.194-72.585.141-131.325 59.114-131.184 131.7zm237.104-137.092c.033 16.954 13.817 30.682 30.772 30.649 16.961-.034 30.689-13.811 30.664-30.765-.033-16.954-13.818-30.69-30.78-30.656-16.962.033-30.689 13.818-30.656 30.772zm-208.696 345.4c-24.958-1.086-38.511-5.234-47.543-8.709-11.961-4.628-20.496-10.177-29.479-19.093-8.966-8.951-14.532-17.461-19.202-29.397-3.508-9.033-7.73-22.569-8.9-47.527-1.269-26.983-1.559-35.078-1.683-103.433-.133-68.338.116-76.434 1.294-103.441 1.069-24.941 5.242-38.512 8.709-47.536 4.628-11.977 10.161-20.496 19.094-29.478 8.949-8.983 17.459-14.532 29.403-19.202 9.025-3.526 22.561-7.715 47.511-8.9 26.998-1.278 35.085-1.551 103.423-1.684 68.353-.133 76.448.108 103.456 1.294 24.94 1.086 38.51 5.217 47.527 8.709 11.968 4.628 20.503 10.145 29.478 19.094 8.974 8.95 14.54 17.443 19.21 29.413 3.524 8.999 7.714 22.552 8.892 47.494 1.285 26.998 1.576 35.094 1.7 103.432.132 68.355-.117 76.451-1.302 103.442-1.087 24.957-5.226 38.52-8.709 47.56-4.629 11.953-10.161 20.488-19.103 29.471-8.941 8.949-17.451 14.531-29.403 19.201-9.009 3.517-22.561 7.714-47.494 8.9-26.998 1.269-35.086 1.56-103.448 1.684-68.338.133-76.424-.124-103.431-1.294zM149.977 1.773c-27.239 1.286-45.843 5.648-62.101 12.019-16.829 6.561-31.095 15.353-45.286 29.603C28.381 57.653 19.655 71.944 13.144 88.79c-6.303 16.299-10.575 34.912-11.778 62.168C.172 178.264-.102 186.973.031 256.489c.133 69.508.439 78.234 1.741 105.548 1.302 27.231 5.649 45.827 12.019 62.092 6.569 16.83 15.353 31.089 29.611 45.289 14.25 14.2 28.55 22.918 45.404 29.438 16.282 6.294 34.902 10.583 62.15 11.777 27.305 1.203 36.022 1.468 105.521 1.336 69.532-.133 78.25-.44 105.555-1.734 27.239-1.302 45.826-5.664 62.1-12.019 16.829-6.585 31.095-15.353 45.288-29.611 14.191-14.251 22.917-28.55 29.428-45.404 6.304-16.282 10.592-34.904 11.777-62.134 1.195-27.323 1.478-36.049 1.344-105.557-.133-69.516-.447-78.225-1.741-105.522-1.294-27.256-5.657-45.844-12.019-62.118-6.577-16.829-15.352-31.08-29.602-45.288-14.25-14.192-28.55-22.935-45.404-29.429-16.29-6.304-34.903-10.6-62.15-11.778C333.747.164 325.03-.101 255.506.031c-69.507.133-78.224.431-105.529 1.742z"/></svg>
                      <!-- <svg class="th lm ml il" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M19.3153 2.18484C18.6155 2.4944 17.8733 2.6977 17.1134 2.78801C17.9144 2.30899 18.5138 1.55511 18.8001 0.666844C18.0484 1.11418 17.2244 1.42768 16.3654 1.59726C15.7885 0.979958 15.0238 0.57056 14.1901 0.432713C13.3565 0.294866 12.5007 0.436294 11.7558 0.835009C11.0108 1.23372 10.4185 1.86739 10.0708 2.63749C9.72313 3.40759 9.63963 4.27098 9.83327 5.09343C8.30896 5.01703 6.81775 4.62091 5.45645 3.93079C4.09516 3.24067 2.89423 2.27197 1.93161 1.08759C1.59088 1.67284 1.41182 2.33814 1.41278 3.01534C1.41278 4.34451 2.08928 5.51876 3.11778 6.20626C2.50912 6.1871 1.91386 6.02273 1.38161 5.72685V5.77451C1.38179 6.65974 1.68811 7.51766 2.24864 8.20282C2.80916 8.88797 3.58938 9.3582 4.45703 9.53376C3.89201 9.68688 3.29956 9.70945 2.72453 9.59976C2.96915 10.3617 3.44595 11.0281 4.08815 11.5056C4.73035 11.9831 5.50581 12.2478 6.30594 12.2627C5.51072 12.8872 4.60019 13.3489 3.62642 13.6213C2.65264 13.8938 1.63473 13.9716 0.630859 13.8503C2.38325 14.9773 4.4232 15.5756 6.50669 15.5737C13.5586 15.5737 17.415 9.73176 17.415 4.66535C17.415 4.50035 17.4104 4.33351 17.4031 4.17035C18.1537 3.62783 18.8016 2.95578 19.3162 2.18576L19.3153 2.18484Z"
                          fill=""
                        />
                      </svg> -->
                    </a>
                  </li>
                  <li>
                    <a href="https://www.tiktok.com/@yetcs_envirmental" target="_blank" class="c tc wf xf ie ld rg ml il tl">
                      
                      <svg class="th lm ml il" width="15" height="20" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 449.45 515.38"><path fill-rule="nonzero" d="M382.31 103.3c-27.76-18.1-47.79-47.07-54.04-80.82-1.35-7.29-2.1-14.8-2.1-22.48h-88.6l-.15 355.09c-1.48 39.77-34.21 71.68-74.33 71.68-12.47 0-24.21-3.11-34.55-8.56-23.71-12.47-39.94-37.32-39.94-65.91 0-41.07 33.42-74.49 74.48-74.49 7.67 0 15.02 1.27 21.97 3.44V190.8c-7.2-.99-14.51-1.59-21.97-1.59C73.16 189.21 0 262.36 0 352.3c0 55.17 27.56 104 69.63 133.52 26.48 18.61 58.71 29.56 93.46 29.56 89.93 0 163.08-73.16 163.08-163.08V172.23c34.75 24.94 77.33 39.64 123.28 39.64v-88.61c-24.75 0-47.8-7.35-67.14-19.96z"/></svg>
                    </a>

                      <!-- <svg class="th lm ml il" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M4.36198 2.58327C4.36174 3.0695 4.16835 3.53572 3.82436 3.87937C3.48037 4.22301 3.01396 4.41593 2.52773 4.41569C2.0415 4.41545 1.57528 4.22206 1.23164 3.87807C0.887991 3.53408 0.69507 3.06767 0.695313 2.58144C0.695556 2.09521 0.888943 1.62899 1.23293 1.28535C1.57692 0.941701 2.04333 0.748781 2.52956 0.749024C3.01579 0.749267 3.48201 0.942654 3.82566 1.28664C4.1693 1.63063 4.36222 2.09704 4.36198 2.58327ZM4.41698 5.77327H0.750313V17.2499H4.41698V5.77327ZM10.2103 5.77327H6.56198V17.2499H10.1736V11.2274C10.1736 7.87244 14.5461 7.56077 14.5461 11.2274V17.2499H18.167V9.98077C18.167 4.32494 11.6953 4.53577 10.1736 7.31327L10.2103 5.77327Z"
                          fill=""
                        />
                      </svg> -->
                  </li>
                  <!-- <li>
                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                      <svg class="th lm ml il" width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.82308 0.904297C7.40883 0.904297 7.95058 0.95013 8.44558 1.0858C8.89476 1.16834 9.32351 1.33772 9.70783 1.58446C10.069 1.81088 10.3394 2.12896 10.5191 2.53688C10.6997 2.9448 10.7895 3.44438 10.7895 3.98796C10.7895 4.62321 10.6547 5.1668 10.3394 5.57471C10.069 5.98355 9.61799 6.34563 9.07716 6.61788C9.84349 6.84521 10.4292 7.25313 10.7895 7.79672C11.1507 8.34122 11.3762 9.02138 11.3762 9.7923C11.3762 10.4275 11.2405 10.9711 11.015 11.4249C10.7895 11.8786 10.4292 12.2865 10.0232 12.5588C9.58205 12.8506 9.09443 13.0651 8.58124 13.1931C8.04041 13.3297 7.49958 13.4205 6.95874 13.4205H0.916992V0.904297H6.82308ZM6.46191 5.98263C6.95783 5.98263 7.36391 5.84696 7.67924 5.62055C7.99458 5.39413 8.13024 4.9853 8.13024 4.48663C8.13024 4.21438 8.08441 3.94213 7.99458 3.76155C7.90474 3.58005 7.76908 3.44346 7.58941 3.3078C7.40883 3.21705 7.22824 3.1263 7.00274 3.08138C6.77724 3.03555 6.55266 3.03555 6.28133 3.03555H3.66699V5.98355H6.46283L6.46191 5.98263ZM6.59758 11.3341C6.86799 11.3341 7.13841 11.2883 7.36391 11.2434C7.59159 11.2001 7.80692 11.1071 7.99458 10.9711C8.17826 10.8384 8.33193 10.6685 8.44558 10.4725C8.53541 10.246 8.62616 9.9738 8.62616 9.65663C8.62616 9.02138 8.44558 8.56763 8.08533 8.25046C7.72416 7.97822 7.22824 7.84255 6.64249 7.84255H3.66699V11.335H6.59758V11.3341ZM15.2986 11.2883C15.6588 11.6513 16.1997 11.8328 16.9211 11.8328C17.417 11.8328 17.868 11.6971 18.2282 11.4707C18.5894 11.1985 18.8149 10.9262 18.9047 10.654H21.1139C20.7527 11.742 20.2119 12.513 19.4914 13.0116C18.7691 13.4654 17.9129 13.7376 16.8762 13.7376C16.2128 13.7396 15.5551 13.6165 14.9374 13.3746C14.3816 13.1661 13.886 12.8235 13.4946 12.3773C13.0759 11.9598 12.7665 11.4457 12.5935 10.8804C12.368 10.291 12.2772 9.65663 12.2772 8.93063C12.2772 8.25047 12.368 7.61613 12.5935 7.0258C12.8103 6.45755 13.1311 5.93468 13.5395 5.48396C13.9456 5.07605 14.4415 4.71396 14.9823 4.48663C15.5843 4.24469 16.2274 4.12143 16.8762 4.12363C17.6425 4.12363 18.319 4.26021 18.9047 4.57738C19.4914 4.89455 19.9415 5.25755 20.3027 5.80205C20.6711 6.32503 20.9456 6.90819 21.1139 7.52538C21.2037 8.15972 21.2487 8.79497 21.2037 9.52005H14.667C14.667 10.246 14.9374 10.9262 15.2986 11.2892V11.2883ZM18.1384 6.52713C17.8231 6.20996 17.3272 6.02846 16.7405 6.02846C16.3353 6.02846 16.0191 6.11922 15.7487 6.25488C15.4782 6.39147 15.2986 6.57297 15.118 6.75447C14.952 6.92978 14.8422 7.15067 14.8027 7.3888C14.7568 7.61613 14.7119 7.79672 14.7119 7.97822H18.7691C18.6792 7.29805 18.4537 6.84522 18.1384 6.52713ZM14.1711 1.76596H19.2201V2.99063H14.172V1.76596H14.1711Z"
                          fill=""
                        />
                      </svg>
                    </a>
                  </li> -->
                </ul>
              </div>
            </div>

            <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
              <form action="https://formbold.com/s/unique_form_id" method="POST">
                <div class="tc sf yo ap zf ep qb">
                  <div class="vd to/2">
                    <label class="rc ac" for="fullname">Full name</label>
                    <input
                      type="text"
                      name="fullname"
                      id="fullname"
                      placeholder="Devid Wonder"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>

                  <div class="vd to/2">
                    <label class="rc ac" for="email">Email address</label>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="example@gmail.com"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>
                </div>

                <div class="tc sf yo ap zf ep qb">
                  <div class="vd to/2">
                    <label class="rc ac" for="phone">Phone number</label>
                    <input
                      type="text"
                      name="phone"
                      id="phone"
                      placeholder="+009 3342 3432"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>

                  <div class="vd to/2">
                    <label class="rc ac" for="subject">Subject</label>
                    <input
                      type="text"
                      for="subject"
                      id="subject"
                      placeholder="Type your subject"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>
                </div>

                <div class="fb">
                  <label class="rc ac" for="message">Message</label>
                  <textarea
                    placeholder="Message"
                    rows="4"
                    name="message"
                    id="message"
                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"
                  ></textarea>
                </div>

                <div class="tc xf">
                  <button class="vc rg lk gh ml il hi gi _l">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Contact End ===== -->

@endsection
