@php
    session(['activeMenu' => '']);
@endphp

@extends('layout')

@section('content')
@section('title', 'Ravelware Technology Indonesia');
    <div class="content">
      <!-- Main -->
      <div class="container-fluid p-0">
        <div class="intro slick-intro custom-intro">
          <div class="intro-list">
            <div class="d-flex align-items-center h-100 banner-bottom">
              <div class="container ps-0">
                <div class="text">
                  <h2 class="title title-xl text-uppercase">UNLEASHING GROWTH, PRODUCTIVITY, AND EFFICIENCY WITH ONE SOLUTION</h2>
                  <p class="my-4">Discover our IoT automation platform, designed to reveal and tackle hidden inefficiencies on the production line, empower your team, and deliver outstanding results in a single move.</p>
                  <div class="d-flex align-items-center">
                    <a href="/consult-date" class="btn-lg btn-black px-4 d-flex align-items-center">Book Consultation & Demo</a>
                    <a href="/products" class="ms-4 color-primary-neutral-100 weight-700 text-decoration-none d-flex align-items-center">Explore More <img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-2"></a>
                  </div>
                </div>
              </div>
              <div class="box-banner">
                <img src="{{asset('img/banner-03.jpg')}}">
              </div>
            </div>
          </div>
          <div class="intro-list">
            <div class="d-flex align-items-center h-100 banner-right-square">
              <div class="container ps-0">
                <div class="text">
                  <h2 class="title title-xl text-uppercase">EMBRACE KAIZEN WITH OUR SMART AUTOMATION</h2>
                  <p class="my-4">Boost efficiency in manufacturing, warehousing, and logistics. Achieve more with less.</p>
                  <div class="d-flex align-items-center">
                    <a href="/consult-date" class="btn-lg btn-black px-4 d-flex align-items-center">Book Consultation & Demo</a>
                    <a href="/products" class="ms-4 color-primary-neutral-100 weight-700 text-decoration-none d-flex align-items-center">Explore More <img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-2"></a>
                  </div>
                </div>
              </div>
              <div class="box-banner">
                <img src="{{asset('img/banner-04.jpg')}}">
              </div>
            </div>
          </div>
          <div class="intro-list">
            <div class="d-flex align-items-center h-100 banner-right-hexa">
              <div class="container ps-0">
                <div class="text">
                  <h2 class="title title-xl text-uppercase">ROBUST BIG DATA SOLUTIONS FOR EFFORTLESS MONITORING</h2>
                  <p class="my-4">Leverage our expertise in crafting customized, user-friendly software to scale your business today.</p>
                  <div class="d-flex align-items-center">
                    <a href="/consult-date" class="btn-lg btn-black px-4 d-flex align-items-center">Book Consultation & Demo</a>
                    <a href="/products" class="ms-4 color-primary-neutral-100 weight-700 text-decoration-none d-flex align-items-center">Explore More <img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-2"></a>
                  </div>
                </div>
              </div>
              <div class="box-banner">
                <img src="{{asset('img/banner-05.jpg')}}">
              </div>
            </div>
          </div>
          <div class="intro-list">
            <div class="d-flex align-items-center h-100 banner-bottom">
              <div class="container ps-0">
                <div class="text">
                  <h2 class="title title-xl text-uppercase">PRODUCTIVITY ASSURANCE <br>BY OPTIMIZATION & STANDARDIZATION (PA'BOS)</h2>
                  <h2 class="title title-l text-uppercase">12-MONTHS WARRANTY; AT LEAST 10% PRODUCTIVITY UP</h2>
                  <p class="my-4">Simplest way in less than IDR 5 Mio per month to start securing your company's future and scale up your business by getting rid the 8-wastes off and entering the Lean Manufacturing era.</p>
                  <div class="d-flex align-items-center">
                    <a href="" class="btn-lg btn-black px-4 d-flex align-items-center">Book Consultation & Demo</a>
                    <a href="" class="ms-4 color-primary-neutral-100 weight-700 text-decoration-none d-flex align-items-center">Explore More <img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-2"></a>
                  </div>
                </div>
              </div>
              <div class="box-banner">
                <img src="{{asset('img/banner-06-all.jpg')}}">
              </div>
            </div>
          </div>
          <div class="intro-list">
            <div class="d-flex align-items-center h-100 banner-right-full flex-column">
              <div class="full-top position-relative w-100 d-flex align-items-center">
                <div class="container ps-0">
                  <div class="text">
                    <h2 class="title title-xl text-uppercase">YOUR SEARCH FOR TRUST ENDS HERE</h2>
                    <p class="my-4">Proud to be an Industry 4.0 specialist and recognized globally</p>
                    
                    <div class="d-flex align-items-center">
                      <a href="" class="btn-lg btn-black px-4 d-flex align-items-center">Book Consultation & Demo</a>
                      <a href="" class="ms-4 color-primary-neutral-100 weight-700 text-decoration-none d-flex align-items-center">Explore More <img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-2"></a>
                    </div>
                  </div>
                </div>
                <div class="box-banner">
                  <img src="{{asset('img/banner-07.jpg')}}">
                </div>
              </div>
              <div class="full-bottom d-flex align-items-center">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="d-flex align-items-center mb-3">
                        <img src="{{asset('img/client/client-21.svg')}}">
                      </div>
                      <p class="mb-0 weight-700">Chosen for the Global Incubator Network by the Austrian Government (2022).</p>
                    </div>
                    <div class="col-md-4">
                      <div class="d-flex align-items-center mb-3">
                        <img src="{{asset('img/client/client-22.svg')}}">
                      </div>
                      <p class="mb-0 weight-700">Finalist in the Startup Studio Indonesia Batch 7 Program (2023).</p>
                    </div>
                    <div class="col-md-4">
                      <div class="d-flex align-items-center mb-3">
                        <img src="{{asset('img/client/client-23.svg')}}">
                        <img src="{{asset('img/client/client-24.svg')}}">
                      </div>
                      <p class="mb-0 weight-700">Exclusive local-tech partner in the METI Japan & Kemenperin RI Lean Monozukuri collaborative program (2023).</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Why you choose us ? -->
      <div class="bg-primary-neutral-20 pt-5">
        <div class="container">
          <h3 class="title title-md color-primary-neutral-100 weight-700 d-inline-flex align-items-center pb-4 mb-4 b-bottom-primary-80"><span class="me-3 btn-md btn-black px-3 d-flex align-items-center weight-400">Benefits</span>Why you choose Our Solution ?</h3>
          <div class="row">
            <div class="col-md-3 mb-5">
              <h4 class="title title-sm color-primary-neutral-80 text-uppercase line-height-normal weight-700 mb-3">MAXIMIZE GROWTH, PRODUCTIVITY & EFFICIENCY</h4>
              <p class="mb-0 color-primary-neutral-80">Benefit from an all-in-one automation service that offers high-impact opportunities, driving up to 45% efficiency gains post-implementation.</p>
            </div>
            <div class="col-md-3 mb-5">
              <h4 class="title title-sm color-primary-neutral-80 text-uppercase line-height-normal weight-700 mb-3">GUARANTEED SUCCESS FROM DAY ONE</h4>
              <p class="mb-0 color-primary-neutral-80">Rely on our expert support from the outset and expect a Return on Investment within just 3 (three) years.</p>
            </div>
            <div class="col-md-3 mb-5">
              <h4 class="title title-sm color-primary-neutral-80 text-uppercase line-height-normal weight-700 mb-3">RAPID IMPLEMENTATION & INTUITIVE DESIGN</h4>
              <p class="mb-0 color-primary-neutral-80">Gain actionable insights with a platform designed for ease of use and precise user experiences.</p>
            </div>
            <div class="col-md-3 mb-5">
              <h4 class="title title-sm color-primary-neutral-80 text-uppercase line-height-normal weight-700 mb-3">PRECISION DIGITALIZATION WITH A HUMAN TOUCH</h4>
              <p class="mb-0 color-primary-neutral-80">We focus on amplifying human productivity, not replacing it.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Product & Solution -->
      <div class="bg-primary-neutral-10 py-5">
        <div class="container">
          <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Solution</span>
          <h2 class="title title-xl color-primary-neutral-100 weight-700 d-flex align-items-center mt-4">Product & Solution</h2>
          <div class="row mt-4">
            <div class="col-md-6">
              <p class="mb-0">Your Comprehensive Automation Solution on an IoT Platform. Harness real-time insights to enhance decision-making, streamline processes, and empower your team. Built on the principles of Overall Equipment Effectiveness (OEE), Total Productive Maintenance (TPM), and Toyota Production System (TPS), we cater to Manufacturing, Warehousing, Logistic.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-end sm-justify-content-start sm-mt-3">
                <a href="/products" 
                  class="d-inline-flex btn-lg align-items-center btn-black-outline px-4 position-relative text-decoration-none" >
                  <span class="position-relative">
                      See All our Product & Solution 
                      <img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-2">
                  </span>
                </a>
              </div>
            </div>
          </div>
          <ul class="list-unstyled row product-solution-list mt-5">
            <li class="col-md-3">
              <a href="/products#ims" class="box d-flex flex-column text-decoration-none p-5">
                <div>
                  <img src="{{asset('img/product/product-01-initial.png')}}" class="initial img-fluid">
                  <img src="{{asset('img/product/product-01.png')}}" class="hover img-fluid">
                </div>
                <h2 class="mb-0 mt-auto d-flex align-items-end justify-content-between">
                  <span class="title weight-700 title-lg">Intelligent Manufacture System</span>
                  <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                </h2>
              </a>
            </li>
            <li class="col-md-3">
              <a href="/products#pabos" class="box d-flex flex-column text-decoration-none p-5">
                <div>
                  <img src="{{asset('img/product/product-04-initial.png')}}" class="initial img-fluid">
                  <img src="{{asset('img/product/product-04.png')}}" class="hover img-fluid">
                </div>
                <h2 class="mb-0 mt-auto align-items-end justify-content-between">
                  <span class="title weight-700 title-lg">Pa'Bos -</span><br>
                  <span class="title weight-700 title-md">Productivity Warranty</span>
                  <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                </h2>
              </a>
            </li>
            <li class="col-md-3">
              <a href="/products#software" class="box d-flex flex-column text-decoration-none p-5">
                <div>
                  <img src="{{asset('img/product/product-02-initial.png')}}" class="initial img-fluid">
                  <img src="{{asset('img/product/product-02.png')}}" class="hover img-fluid">
                </div>
                <h2 class="mb-0 mt-auto d-flex align-items-end justify-content-between">
                  <span class="title weight-700 title-lg">Software Capability</span>
                  <img class='mr-2' src="{{asset('img/icon/arrow-right-block.svg')}}">
                </h2>
              </a>
            </li>
            <li class="col-md-3">
              <a href="/products#hardware" class="box d-flex flex-column text-decoration-none p-5">
                <div>
                  <img src="{{asset('img/product/product-03-initial.png')}}" class="initial img-fluid">
                  <img src="{{asset('img/product/product-03.png')}}" class="hover img-fluid">
                </div>
                <h2 class="mb-0 mt-auto d-flex align-items-end justify-content-between">
                  <span class="title weight-700 title-lg">Hardware Supply</span>
                  <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                </h2>
              </a>
            </li>
          </ul>

          <div class="percentage">
            <h2 class="title title-lg justify-content-center color-primary-neutral-100 weight-700 d-flex align-items-center">Result From using our solution</h2>
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center">
                <div class="box position-relative d-flex flex-column align-items-center justify-content-center p-4">
                  <div class="percent">
                    <canvas id="imsChart" class="canvas-percent"></canvas>
                  </div>
                  <h2 class="title title-3xl color-primary-neutral-100 line-height-normal weight-700"><span>30</span><span class="unit title-xl">%</span></h2>
                  <p class="mb-0 title color-primary-neutral-100 weight-700 text-center">Efficiencies Factors Post Using IMS Solution</p>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center">
                <div class="box position-relative d-flex flex-column align-items-center justify-content-center p-4">
                  <div class="percent">
                    <canvas id="eficiencyChart" class="canvas-percent"></canvas>
                  </div>
                  <h2 class="title title-3xl color-primary-neutral-100 line-height-normal weight-700"><span>50</span><span class="unit title-xl">%</span></h2>
                  <p class="mb-0 title color-primary-neutral-100 weight-700 text-center">Efficiency Gain Post Using Revelight – Smart Lighting</p>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center">
                <div class="box position-relative d-flex flex-column align-items-center justify-content-center p-4">
                  <div class="percent">
                    <canvas id="customerChart" class="canvas-percent"></canvas>
                  </div>
                  <h2 class="title title-3xl color-primary-neutral-100 line-height-normal weight-700"><span>57</span><span class="unit title-xl">%</span></h2>
                  <p class="mb-0 title color-primary-neutral-100 weight-700 text-center">Customers Retention</p>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center">
                <div class="box position-relative d-flex flex-column align-items-center justify-content-center p-4">
                  <div class="percent">
                    <canvas id="yearChart" class="canvas-percent"></canvas>
                  </div>
                  <h2 class="title title-3xl color-primary-neutral-100 line-height-normal weight-700"><span>3</span><span class="unit years font-md">Years</span></h2>
                  <p class="mb-0 title color-primary-neutral-100 weight-700 text-center">Return Of Investment (ROI) Our Solution</p>
                </div>
              </div>
            </div>
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
  
      <!-- Trusted By Company -->
      <div class="trusted-company">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4">
              <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Client</span>
              <h2 class="title title-xl color-primary-neutral-100 mt-4">Trusted By Leading Brands</h2>
            </div>
            <div class="col-md-8">
              <div class="box-client box-client-fade">
                <div class="w-100">
                  <div>
                    <ul class="row">
                      <li class="col-md-4">&nbsp;</li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-01.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-bca.png')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-02.svg')}}" alt=""></div></div>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-03.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-04.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-agci.svg')}}" alt=""></div></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <ul class="row">
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-05.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-06.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-easygo.jpg')}}" alt=""></div></div>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-07.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-08.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-eidai.png')}}" alt=""></div></div>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-09.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-10.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-musashi.webp')}}" alt=""></div></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <ul class="row">
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-11.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-12.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-tridi.webp')}}" alt=""></div></div>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-13.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-14.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-adaptive.jpg')}}" alt=""></div></div>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-15.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-16.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-ecoxyztem.png')}}" alt=""></div></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <ul class="row">
                      <li class="col-md-4">&nbsp;</li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-17.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-18.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-infiniti.jpg')}}" alt=""></div></div>
                        </div>
                      </li>
                      <li class="col-md-4">
                        <div class="slick-client-fade">
                          <div><div class="box-fade"><img src="{{asset('img/client/client-telkomsel.webp')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-19.svg')}}" alt=""></div></div>
                          <div><div class="box-fade"><img src="{{asset('img/client/client-20.svg')}}" alt=""></div></div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
              </div><!-- End Box -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Our Resources -->
      <div class="py-5">
        <div class="container-fluid text-center top-our-resources d-flex align-items-center justify-content-center">
          <h2 class="mb-0 title title-xl color-primary-neutral-100 weight-700">Our Resources</h2>
        </div>
        <div class="container mt-5">
          <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Resources</span>
          <div class="row mt-4 align-items-center">
            <div class="col-md-6">
              <h2 class="mb-0 title title-xl color-primary-neutral-100 weight-700 d-flex align-items-center">Case Study</h2>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-end sm-justify-content-start sm-mt-3">
                <div class="btn-wrap d-inline-flex btn-lg align-items-center btn-black-outline px-4">
                  <button class="prev-btn border-0 bg-transparent"><img src="{{asset('img/icon/arrow-right.svg')}}" class="rotate-180"></button>
                  <a href="" class="color-primary-neutral-100 weight-700 text-decoration-none">See All our Case Study</a>
                  <button class="next-btn border-0 bg-transparent"><img src="{{asset('img/icon/arrow-right.svg')}}"></button>
                </div>
              </div>
            </div>
          </div>
          <div class="slick-list slick-resource general-card mt-4">
            <div>
              <a href="" class="card border-0 text-decoration-none">
                <img src="{{asset('img/product/case-01.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5 px-0">
                  <div class="tags">
                    <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                      <li><input type="checkbox" id="" checked="" readonly=""><label for="">Case Study</label></li>
                    </ul>
                  </div>
                  <h2 class="title title-lg color-primary-neutral-100 my-3">Lean Warehousing System</h2>
                  <p class="title title-md mb-0 mb-4 pb-4">Warehouse 4.0</p>
                  <div class="d-flex justify-content-between">
                    <span class="title-sm weight-700">Learn More</span>
                    <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="" class="card border-0 text-decoration-none">
                <img src="{{asset('img/product/case-02.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5 px-0">
                  <div class="tags">
                    <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                      <li><input type="checkbox" id="" checked="" readonly=""><label for="">Case Study</label></li>
                    </ul>
                  </div>
                  <h2 class="title title-lg color-primary-neutral-100 my-3">Lean Manufacture</h2>
                  <p class="title title-md mb-0 mb-4 pb-4">Toyota Production System</p>
                  <div class="d-flex justify-content-between">
                    <span class="title-sm weight-700">Learn More</span>
                    <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="" class="card border-0 text-decoration-none">
                <img src="{{asset('img/product/case-03.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5 px-0">
                  <div class="tags">
                    <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                      <li><input type="checkbox" id="" checked="" readonly=""><label for="">Case Study</label></li>
                    </ul>
                  </div>
                  <h2 class="title title-lg color-primary-neutral-100 my-3">Smart Factory</h2>
                  <p class="title title-md mb-0 mb-4 pb-4">Smart Building</p>
                  <div class="d-flex justify-content-between">
                    <span class="title-sm weight-700">Learn More</span>
                    <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="" class="card border-0 text-decoration-none">
                <img src="{{asset('img/product/case-04.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5 px-0">
                  <div class="tags">
                    <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                      <li><input type="checkbox" id="" checked="" readonly=""><label for="">Case Study</label></li>
                    </ul>
                  </div>
                  <h2 class="title title-lg color-primary-neutral-100 my-3">Cyber Security</h2>
                  <p class="title title-md mb-0 mb-4 pb-4">&nbsp;</p>
                  <div class="d-flex justify-content-between">
                    <span class="title-sm weight-700">Learn More</span>
                    <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a href="" class="card border-0 text-decoration-none">
                <img src="{{asset('img/product/case-05.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body py-5 px-0">
                  <div class="tags">
                    <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                      <li><input type="checkbox" id="" checked="" readonly=""><label for="">Case Study</label></li>
                    </ul>
                  </div>
                  <h2 class="title title-lg color-primary-neutral-100 my-3">Mechanical</h2>
                  <p class="title title-md mb-0 mb-4 pb-4">Contractor & Manufacture Services</p>
                  <div class="d-flex justify-content-between">
                    <span class="title-sm weight-700">Learn More</span>
                    <img src="{{asset('img/icon/arrow-right-block.svg')}}">
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Ravelware Blog -->
      <div class="bg-primary-neutral-10 py-5">
        <div class="container">
          <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Resources</span>
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="mb-0 title title-xl color-primary-neutral-100 weight-700 d-flex align-items-center mt-4">Article</h2>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-end sm-justify-content-start sm-mt-3">
                <a href="" class="color-primary-neutral-100 weight-700 text-decoration-none btn-wrap d-inline-flex btn-lg align-items-center btn-black-outline px-4">See All our Blog & News <img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-2"></a>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-8">
              <div class="general-card">
                <a href="" class="card border-0 text-decoration-none">
                  <img src="{{asset('img/product/case-06.jpg')}}" class="card-img-top card-img-blog" alt="...">
                  <div class="card-body py-5 px-0">
                    <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                    <h2 class="title title-lg color-primary-neutral-100 my-3">RAVELWARE : WAREHOUSE MANAGEMENT SYSTEM</h2>
                    <p class="mb-0 mb-4 text-wrap border-0">Warehouse Management System (WMS) adalah perangkat lunak atau sistem yang digunakan untuk mengelola dan mengoptimalkan operasi penyimpanan dan distribusi dalam gudang atau pusat distribusi. Tujuan utama dari WMS adalah meningkatkan efisiensi, akurasi, dan produktivitas dalam mengelola inventaris dan pengiriman barang.</p>
                    <div class="d-flex justify-content-between">
                      <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 ps-5">
              <h2 class="mb-4 title title-lg color-primary-neutral-100 weight-700 d-flex align-items-center">Recent Post</h2>
              <div class="general-card">
                <a href="" class="card border-0 text-decoration-none">
                  <img src="{{asset('img/product/case-07.jpg')}}" class="card-img-top card-img-column" alt="...">
                  <div class="card-body py-4 px-0">
                    <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                    <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                  </div>
                </a>
              </div>
              <div class="general-card">
                <a href="" class="card border-0 text-decoration-none">
                  <img src="{{asset('img/product/case-08.jpg')}}" class="card-img-top card-img-column" alt="...">
                  <div class="card-body py-4 px-0">
                    <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                    <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="mt-5">
            <div class="row mt-4 align-items-center">
              <div class="col-md-6">
                <h2 class="mb-0 title title-xl color-primary-neutral-100 weight-700 d-flex align-items-center">Ravelware News</h2>
              </div>
              <div class="col-md-6">
                <div class="d-flex justify-content-end sm-justify-content-start sm-mt-3">
                  <div class="btn-wrap d-inline-flex btn-lg align-items-center btn-black-outline px-4">
                    <button class="prev-news border-0 bg-transparent"><img src="{{asset('img/icon/arrow-right.svg')}}" class="rotate-180"></button>
                    <a href="/resources" class="color-primary-neutral-100 weight-700 text-decoration-none">See All News</a>
                    <button class="next-news border-0 bg-transparent"><img src="{{asset('img/icon/arrow-right.svg')}}"></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-list slick-news general-card mt-5">
              
              @foreach($resources->reverse() as $resource)
                @if($resource['type'] === 'news')
                  <div class="">
                    <div class="general-card">
                      <a href="/resources/{{ $resource['id']}}" class="card border-0 text-decoration-none">
                        <img src="{{ Str::contains($resource['img-path'], 'thumbnail/') ? asset('storage/' . $resource['img-path']) : $resource['img-path']}}" class="card-img-top card-img-column" alt="...">
                        <div class="card-body py-4 px-0">
                          <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">{{ $resource['date'] }}</span></p>
                          <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">{{ $resource['title'] }}</h2>
                          <div class="">
                            <span class="title-sm weight-700 color-primary-neutral-100 text-decoration-none d-flex align-items-center">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                @endif
                
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <!-- Achievements -->
      <div class="bg-primary-neutral-10 pt-5 testimony">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="d-flex mb-3 justify-content-center"><span class="btn-md btn-black px-3 d-flex align-items-center justify-content-center weight-400">Achievements</span></div>              <h2 class="mb-0 title title-2xl color-primary-neutral-100 weight-700 d-flex align-items-center justify-content-center">“ Let's See What We've Achieved ”</h2>
            </div>
          </div>
          <div class="slick-testimony mt-5">
            <div class="p-5 testimony-list d-flex align-items-start flex-column">
              <span>2022</span>
              <p class="font-sm">
                Became the premier Indonesian company amongst 17 startups in the esteemed Global Incubator Network by the Austrian Government. This acknowledgment not only facilitated the establishment of Ravelware’s R&D Centre in Austria but also spearheaded our international business expansion into the Austrian and broader European market, pushing the boundaries of Industry 4.0 solutions.
              </p>
              <div class="d-flex align-items-center">
                <h4 class="font-md weight-700 ps-3 mb-0">
                </h4>
                <img src="{{asset('img/achivements-03.jpg')}}">
              </div>
            </div>
            <div class="p-5 testimony-list d-flex align-items-start flex-column">
              <span>2023</span>
              <p class="font-sm">
                Handpicked for a special visit to JETRO Japan, marking our integration into the Japanese industry ecosystem in Indonesia.
              </p>
              <div class="d-flex align-items-center">
                <h4 class="font-md weight-700 ps-3 mb-0">
                </h4>
                <img src="{{asset('img/achivements-04.jpg')}}">
              </div>
            </div>
            <div class="p-5 testimony-list d-flex align-items-start flex-column">
              <p class="font-sm">
                <span>2023</span>
                Carved a niche as an exclusive local-tech partner in the collaboration between the Minister of Economic, Trade, Industry (METI) Japan and the Ministry of Industry of the Republic of Indonesia (Kemenperin RI) for the Lean Monozukuri program. This aligns with the PIDI 4.0 roadmap propelling the Indonesia 4.0 initiative, reaffirming our commitment to smart logistic solutions and intelligent manufacture systems (IMS).
              </p>
              <div class="d-flex align-items-center">
                <h4 class="font-md weight-700 ps-3 mb-0">
                </h4>
                <img src="{{asset('img/achivements-05.jpg')}}">
              </div>
            </div>
            <div class="p-5 testimony-list">
              <p class="font-sm">
                <span>2023</span>
                Earned a coveted spot as one of 18 finalists in the Batch 7 Startup Studio Indonesia by the Ministry of Communication and Informatica of the Republic of Indonesia (Kemenkominfo RI), underscoring our position at the forefront of deep-tech startup innovation in the region.
              </p>
              <div class="d-flex align-items-center">
                <h4 class="font-md weight-700 ps-3 mb-0">
                </h4>
                <img src="{{asset('img/achivements-06.png')}}">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

      $('.slick-client-fade').slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade:true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover:false
      });

      $(".slick-resource").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        autoplay: true,
        prevArrow: ".prev-btn",
        nextArrow: ".next-btn",
        responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
      });

      $(".slick-news").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        autoplay: true,
        prevArrow: ".prev-news",
        nextArrow: ".next-news",
        responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
      });

      $(".slick-testimony").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
      });

      $(".slick-intro").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        dots: true
      });

      const retentionChart = document.getElementById('imsChart');

      new Chart(retentionChart, {
        type: 'pie',
        data: {
          labels: ['Red', 'Blue'],
          datasets: [{
            label: '# of Votes',
            data: [30, 70],
            borderWidth: 1,
            borderColor: '#000000',
            backgroundColor: ['#E04842', '#FFFFFF'],
            color: '#FFFFFF',
          }]
        },
        options: {
          plugins: {
            legend: false,
            tooltip: false,
          },
        }
      });

      const eficiencyChart = document.getElementById('eficiencyChart');

      new Chart(eficiencyChart, {
        type: 'pie',
        data: {
          labels: ['Red', 'Blue'],
          datasets: [{
            label: '# of Votes',
            data: [50, 50],
            borderWidth: 1,
            borderColor: '#000000',
            backgroundColor: ['#E04842', '#FFFFFF'],
            color: '#FFFFFF',
          }]
        },
        options: {
          plugins: {
            legend: false,
            tooltip: false,
          },
        }
      });

      const customerChart = document.getElementById('customerChart');

      new Chart(customerChart, {
        type: 'pie',
        data: {
          labels: ['Red', 'Blue'],
          datasets: [{
            label: '# of Votes',
            data: [57, 43],
            borderWidth: 1,
            borderColor: '#000000',
            backgroundColor: ['#E04842', '#FFFFFF'],
            color: '#FFFFFF',
          }]
        },
        options: {
          plugins: {
            legend: false,
            tooltip: false,
          },
        }
      });

      const yearChart = document.getElementById('yearChart');

      new Chart(yearChart, {
        type: 'pie',
        data: {
          labels: ['Red', 'Blue'],
          datasets: [{
            label: '# of Votes',
            data: [75, 25],
            borderWidth: 1,
            borderColor: '#000000',
            backgroundColor: ['#E04842', '#FFFFFF'],
            color: '#FFFFFF',
          }]
        },
        options: {
          plugins: {
            legend: false,
            tooltip: false,
          },
        }
      });
    </script>
@endsection