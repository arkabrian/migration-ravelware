@php
    session(['activeMenu' => 'about_us']);
@endphp

@extends('layout')
@section('content')
@section('title', 'About Us | Ravelware Technology Indonesia');
    <div class="content">
      <div class="about-us pt-5">
        <div class="container">
          <div class="mb-5 text-center row">
            <div class="col-md-6 offset-md-3">
              <h2 class="title title-xl mb-4">All About Ravelware</h2>
              <p class="mb-0">“We firmly believe that while there may not always be a "best" way, there's always a "better" way”</p>
            </div>
          </div>
        </div>
        
        <div class="mt-5 banner">
          <img src="{{asset('img/banner-about-us.jpg')}}" class="w-100">
        </div>  

        <div class="mt-100">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2 class="title title-xl mb-4">Background Overview</h2>
              </div>
              <div class="col-md-8">
                <p class="mb-0">Founded in 2016, PT Ravelware Technology Indonesia stands at the forefront of the Industry 4.0 movement in Indonesia. We have swiftly risen to prominence as a leading IoT and deep-tech-based automation solutions provider. Our dedication to the principle of 'One-Stop Solution Automation Service' resonates through sectors including manufacturing, warehousing, logistics, and financial services. With accolades and high regard from the domestic market, our approach is grounded in lean manufacturing or processing design.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-100">
          <div class="row m-0 specialization">
            <div class="col-md-6 p-5 bg-primary-neutral-100">
              <h2 class="title title-xl mb-4 color-primary-neutral-10">Specialization</h2>
              <p class="mb-0 color-primary-neutral-10">Our core strength lies in cutting-edge Research and Development. We harness technologies such as RFID, NFC, interconnected databases, Artificial Intelligence, smart sensors, and intuitive interfaces.</p>
            </div>
            <div class="col-md-6 p-0">
              <img src="{{asset('img/banner-about-us-02.jpg')}}" class="object-fit-cover w-100 h-100">
            </div>
          </div>
        </div>

        <div class="vision">
          <div class="container">
            <div class="row">
              <ul class="py-100 col-md-8 offset-md-4 list-unstyled mb-0">
                <li>
                  <img src="{{asset('img/vision.png')}}">
                  <h2 class="title title-lg my-3">Vision</h2>
                  <p class="mb-0">Redefining the Way of Life with Technology</p>
                </li>
                <li>
                  <img src="{{asset('img/mission.png')}}">
                  <h2 class="title title-lg my-3">Mission</h2>
                  <p class="mb-0">At Ravelware, we champion the integration of Industry 4.0 technologies and deep-tech innovations, committed to developing products that not only enhance daily activities but also serve as the foundation for future innovations. Through our signature 'One-Stop Solution Automation Service', we aim to resolve global challenges using networking technology, always prioritizing a user experience tailored to specific customer demographies. Our ambition reaches beyond creating adaptable and user-friendly solutions; we aspire to be a major influencer in technological innovation, continuously redefining how technology can empower, streamline, and positively transform the human experience.</p>
                </li>
                <li>
                  <img src="{{asset('img/adaptability.png')}}">
                  <h2 class="title title-lg my-3">Adaptability & Expansion</h2>
                  <p class="mb-0">In a world that's constantly evolving, so are we. Our in-house expertise in crafting high-quality software and hardware from the ground up positions us uniquely. We're not just limited to automation. Our capabilities extend to support client needs in digitalization, network enhancement, and technology expansion, always aligned with the demands of Industry 4.0.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Numbering -->
        <div class="numbering py-5">
          <div class="container">
            <div class="row" id="counter">
              <div class="col-md-3 text-center">
                <h2 class="title title-3xl color-primary-neutral-10 line-height-normal weight-700"><span>8</span>+</h2>
                <p class="mb-0 title color-primary-neutral-10 title-lg weight-700">Operated Years</p>
              </div>
              <div class="col-md-3 text-center">
                <h2 class="title title-3xl color-primary-neutral-10 line-height-normal weight-700"><span>21</span>+</h2>
                <p class="mb-0 title color-primary-neutral-10 title-lg weight-700">Our Teams</p>
              </div>
              <div class="col-md-3 text-center">
                <h2 class="title title-3xl color-primary-neutral-10 line-height-normal weight-700"><span>40</span>+</h2>
                <p class="mb-0 title color-primary-neutral-10 title-lg weight-700">Clients</p>
              </div>
              <div class="col-md-3 text-center">
                <h2 class="title title-3xl color-primary-neutral-10 line-height-normal weight-700"><span>120</span>+</h2>
                <p class="mb-0 title color-primary-neutral-10 title-lg weight-700">Projects</p>
              </div>
            </div>
          </div>
        </div>

        <div class="our-history mb-5">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-header">
                  <h2 class="title title-xl">Our<br>History</h2>
                </div>

                <div class="box-timeline">
                  <ul class="timeline timeline-horizontal">

                    <li class="timeline-item top">
                      <div class="timeline-box-body">
                        <div class="timeline-badge">
                          <span class="bullet"></span>
                        </div>

                        <div class="timeline-panel">
                          <div class="timeline-body">
                            <div class="box">
                              <h4 class="title title-2xl weight-700">2016</h4>
                              <p>On 3 September 2016 PT Ravelware Technology Indonesia, Founded</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li class="timeline-item bottom">
                      <div class="timeline-box-body">
                        <div class="timeline-badge">
                          <span class="bullet"></span>
                        </div>

                        <div class="timeline-panel">
                          <div class="timeline-body">
                            <div class="box">
                              <h4 class="title title-2xl weight-700">2017</h4>
                              <p>Endorsed By Indonesia BEKRAF (Creative Economy Ministry)</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li class="timeline-item top">
                      <div class="timeline-box-body">
                        <div class="timeline-badge">
                          <span class="bullet"></span>
                        </div>

                        <div class="timeline-panel">
                          <div class="timeline-body">
                            <div class="box">
                              <h4 class="title title-2xl weight-700">2018</h4>
                              <p>
                                Growing the market #, invited Kemenkominfo for indonesia IoT Roadmap FGD
                                <br><br>
                                Product Base Feasibility Study, join international industry 4,0 conferences
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li class="timeline-item bottom">
                      <div class="timeline-box-body">
                        <div class="timeline-badge">
                          <span class="bullet"></span>
                        </div>

                        <div class="timeline-panel">
                          <div class="timeline-body">
                            <div class="box">
                              <h4 class="title title-2xl weight-700">2019</h4>
                              <p>Product Base RnD Start (Chipless RFID)</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li class="timeline-item top">
                      <div class="timeline-box-body">
                        <div class="timeline-badge">
                          <span class="bullet"></span>
                        </div>

                        <div class="timeline-panel">
                          <div class="timeline-body">
                            <div class="box">
                              <h4 class="title title-2xl weight-700">2022</h4>
                              <p><b>The only and first Indonesian Startup</b> selected in <b>Go Austria, </b> Ravelware RnD Center In Austria Establishment</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li class="timeline-item bottom">
                      <div class="timeline-box-body">
                        <div class="timeline-badge">
                          <span class="bullet"></span>
                        </div>

                        <div class="timeline-panel">
                          <div class="timeline-body">
                            <div class="box">
                              <h4 class="title title-2xl weight-700">2023</h4>
                              <p>
                                The <b>only tech local company </b>to support METI Japan for successing <b>Lean Monozukuri Program 4.0</b> in 2023 & <b>New Midec</b> 2024
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-item top">
                      <div class="timeline-box-body">
                        <div class="timeline-badge">
                          <span class="bullet"></span>
                        </div>

                        <div class="timeline-panel">
                          <div class="timeline-body">
                            <div class="box">
                              <h4 class="title title-2xl weight-700">2024</h4>
                              <p><b>Graphene</b> new market tap-in launched</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Achivements -->
        <div class="pt-100 pb-5 achivements bg-primary-neutral-100">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2 class="title title-xl mb-4 color-primary-neutral-10">Achivements</h2>
              </div>
              <div class="col-md-8">
                <p class="mb-0 color-primary-neutral-10">As a pioneering Industry 4.0 enabler in Indonesia, PT Ravelware Technology Indonesia is not only known for its innovative solutions in IoT automation and smart automation, but we've also been recognized on numerous occasions for our contributions to the evolving technological landscape. Here's a snapshot of our proudest moments:</p>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-4">
                <div class="card bg-transparent border-0 border-radius-0">
                  <img src="{{asset('img/achivements-01.jpg')}}">
                  <h3 class="mt-3 mb-4 color-primary-neutral-10 weight-700 title title-lg">2018</h3>
                  <p class="mb-0 color-primary-neutral-10">Recognized by the Ministry of Communication and Informatica of the Republic of Indonesia (Kemenkominfo RI) and invited as a key think-tank contributor for the Indonesia IoT Roadmap, affirming our stature as leaders in IoT and AI in manufacturing</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-transparent border-0 border-radius-0">
                  <img src="{{asset('img/achivements-02.jpg')}}">
                  <h3 class="mt-3 mb-4 color-primary-neutral-10 weight-700 title title-lg">2018</h3>
                  <p class="mb-0 color-primary-neutral-10">Stood as the only Indonesian startup representative at GEC+ in Taipei, Taiwan, showcasing our lean manufacturing automation expertise on a global platform.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-transparent border-0 border-radius-0">
                  <img src="{{asset('img/achivements-03.jpg')}}">
                  <h3 class="mt-3 mb-4 color-primary-neutral-10 weight-700 title title-lg">2022</h3>
                  <p class="mb-0 color-primary-neutral-10">Became the premier Indonesian company amongst 17 startups in the esteemed Global Incubator Network by the Austrian Government. This acknowledgment not only facilitated the establishment of Ravelware’s R&D Centre in Austria but also spearheaded our international business expansion into the Austrian and broader European market, pushing the boundaries of Industry 4.0 solutions.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-transparent border-0 border-radius-0">
                  <img src="{{asset('img/achivements-04.jpg')}}">
                  <h3 class="mt-3 mb-4 color-primary-neutral-10 weight-700 title title-lg">2023</h3>
                  <p class="mb-0 color-primary-neutral-10">Handpicked for a special visit to JETRO Japan, marking our integration into the Japanese industry ecosystem in Indonesia.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-transparent border-0 border-radius-0">
                  <img src="{{asset('img/achivements-05.jpg')}}">
                  <h3 class="mt-3 mb-4 color-primary-neutral-10 weight-700 title title-lg">2023</h3>
                  <p class="mb-0 color-primary-neutral-10">Carved a niche as an exclusive local-tech partner in the collaboration between the Minister of Economic, Trade, Industry (METI) Japan and the Ministry of Industry of the Republic of Indonesia (Kemenperin RI) for the Lean Monozukuri program. This aligns with the PIDI 4.0 roadmap propelling the Indonesia 4.0 initiative, reaffirming our commitment to smart logistic solutions and intelligent manufacture systems (IMS).</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-transparent border-0 border-radius-0">
                  <img src="{{asset('img/achivements-06.png')}}">
                  <h3 class="mt-3 mb-4 color-primary-neutral-10 weight-700 title title-lg">2023</h3>
                  <p class="mb-0 color-primary-neutral-10">Earned a coveted spot as one of 18 finalists in the Batch 7 Startup Studio Indonesia by the Ministry of Communication and Informatica of the Republic of Indonesia (Kemenkominfo RI), underscoring our position at the forefront of deep-tech startup innovation in the region.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script>
      var section = document.querySelector('#counter');
      var hasEntered = false;

      window.addEventListener('scroll', (e) => {
        var shouldAnimate = (window.scrollY + window.innerHeight) >= section.offsetTop;

        if (shouldAnimate && !hasEntered) {
        hasEntered = true;
          
          $('.text-center h2 span').each(function () {
            $(this).prop('Counter',0).animate({
              Counter: $(this).text()
            }, {
              duration: 4000,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now));
              }
              });
          });

        }
      });
    </script>
@endsection