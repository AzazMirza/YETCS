@extends('layouts.app')
@section('page_title')
  Lead, Asbestos & Mold Removal | Brooklyn, NY | Yetcs
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
          <img src="images/001.webp"  alt="Worker providing professional mold and asbestos remediation service in Brooklyn, NY"  class=" q ua rounded-full overflow-hidden bg-[#a7d938] w-full" loading="lazy" />
        </div>

        <!-- Hero Content -->
        <div class="md:flex-1 md:order-1 bb ze ki xn 2xl:ud-px-0">
          <div class="tc _o">
            <div class="animate_left jn md:mt-12">
              <h1 class="fk vj zp or kk wm wb" >We Specialize in Lead, Asbestos and Mold Inspection..</h1>
              <p class="fq" >
                We are a dedicated company specializing in the inspection and remediation of lead, asbestos, and mold in residential properties. Our team is committed to ensuring the safety and well-being of your family by providing thorough assessments and effective removal solutions.
              </p>

              <div class="tc tf yo zf mb">
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
                <img src="images/cleaning1.webp" height="300" width="200" alt="About" class="ib sg" loading="lazy"/>
                <img src="images/cleaning2.webp" height="300" width="200"  alt="About" class="sg" loading="lazy"/>
              </div>
              <div>
                <img src="images/shape-06.svg" alt="Shape" />
                <img src="images/cleaning3.webp"  height="300" width="200"  alt="About" class="ob gb sg" loading="lazy"/>
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
                      <img class="bf" src="images/reviewer1.webp"  height="300" width="250" alt="User" loading="lazy"/>

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
                      <img class="bf" src="images/reviewer2.webp" height="300" width="250" alt="User" loading="lazy"/>

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
                      <img class="bf" src="images/reviewer3.webp" height="300" width="250" alt="User" loading="lazy"/>

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
                <img class="w-full" src="images/brooklyn.webp" alt="The Hidden Dangers of Asbestos" loading="lazy"/>

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
                <img class="w-full" src="images/street-house.webp" alt="The Hidden Health Risks Lurking in Unclean Properties" loading="lazy"/>

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
                <img class="w-full" src="images/professional-cleaners.webp" alt="Our Deep Cleaning Checklist What We Actually Do When You Book Us" loading="lazy"/>

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
                  </li>
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

