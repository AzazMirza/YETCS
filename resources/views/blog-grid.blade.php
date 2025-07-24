@extends('layouts.app')
@section('page_title')
  Blog - YETCS
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
      <!-- ===== Blog Grid Start ===== -->
      <section class="ji gp uq">
        <div class="bb ye ki xn vq jb jo">
          <div class="wc qf pn xo zf iq">
            <!-- Blog Item 1 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/home-owners-guide.webp" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route ('Mold-Asbestos-and-Lead-Paint-A-2025-Guide-for-Property-Owners')}}" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route ('Mold-Asbestos-and-Lead-Paint-A-2025-Guide-for-Property-Owners')}}">Mold, Asbestos and Lead Paint - A 2025 Guide for Property Owners</a>
                </h4>
              </div>
            </div>

            <!-- Blog Item 2 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/mold inspection.jpg" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route ('Professional-Mold-Lead-&-Asbestos-Remediation-Services-for-Real-Estate')}}" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route ('Professional-Mold-Lead-&-Asbestos-Remediation-Services-for-Real-Estate')}}">Hidden Hazards in Your Property</a>
                </h4>
              </div>
            </div>
            <!-- Blog Item 3 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/remediation-team.webp" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route('the-importance-of-Mold-remediation-Protecting-your-health-and-property')}}" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route('the-importance-of-Mold-remediation-Protecting-your-health-and-property')}}">The importance of Mold remediation - Protecting your health and property</a>
                </h4>
              </div>
            </div>
            <!-- Blog Item 4 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/office-cleaning.webp" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route('Top-5-Signs-Your-Warehouse-or-Office-Needs-a-Professional-Environmental-Inspection')}}" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route('Top-5-Signs-Your-Warehouse-or-Office-Needs-a-Professional-Environmental-Inspection')}}">Top 5 Signs Your Warehouse or Office Needs a Professional Environmental Inspection</a>
                </h4>
              </div>
            </div>
            <!-- Blog Item 5 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/cityscape.webp" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route('Lead-Paint-&-Asbestos-Hidden-Hazards-in-Brooklyn’s-Residential-&-Commercial-Properties')}}" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route('Lead-Paint-&-Asbestos-Hidden-Hazards-in-Brooklyn’s-Residential-&-Commercial-Properties')}}">Lead Paint & Asbestos Hidden Hazards in Brooklyn’s Residential & Commercial Properties</a>
                </h4>
              </div>
            </div>
            <!-- Blog Item 6 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/hidden-mold-collection.webp" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route ('How-We-Handle-Mold-the-Right-Way-A-Brooklyn-Centric-Approach-to-a-Healthier-Home')}}" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route ('How-We-Handle-Mold-the-Right-Way-A-Brooklyn-Centric-Approach-to-a-Healthier-Home')}}">How We Handle Mold the Right Way A Brooklyn Centric Approach to a Healthier Home</a>
                </h4>
              </div>
            </div>
            <!-- Blog Item 7 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/Industrial Warehouse1.webp" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="{{route ('Mold-in-Your-Home-How-It-Spreads-and-Why-Fast-Cleaning-Saves-Thousands')}}" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route ('Mold-in-Your-Home-How-It-Spreads-and-Why-Fast-Cleaning-Saves-Thousands')}}">Mold in Your Home How It Spreads and Why Fast Cleaning Saves Thousands</a>
                </h4>
              </div>
            </div>
            <!-- Blog Item 8 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/professional-cleaners.webp" alt="Blog" />

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
            <!-- Blog Item 9 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/street-house.webp" alt="Blog" />

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
            <!-- Blog Item 10 -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/brooklyn.webp" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="c" class="vc ek rg lk gh sl ml il gi hi"
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
                  <a href="{{route ('The-Hidden-Dangers-of-Asbestos-Are-You-at-Risk-in-Your-Brooklyn-Property')}}">The Hidden Dangers of Asbestos.</a>
                </h4>
              </div>
            </div>
        </div>
      </section>
      <!-- ===== Blog Grid End ===== -->

    @endsection